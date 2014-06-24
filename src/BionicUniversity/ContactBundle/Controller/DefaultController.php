<?php

namespace BionicUniversity\ContactBundle\Controller;

use BionicUniversity\ContactBundle\Form\Type\ContactType;
use BionicUniversity\ContactBundle\Entity\ContactEntity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $contact_entity = new ContactEntity();
        $form = $this->createForm(new ContactType(), $contact_entity);
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) 
            {
                $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'ssl');
                $msg = \Swift_Message::newInstance($transport)
                        ->setSubject('Contactus message')
                        ->setFrom('frspm.roman@gmail.com')
                        ->setTo('curze@mail.ru')
                        ->setBody($this->renderView(
                                'BionicUniversityContactBundle:Mail:contactusEmail.txt.twig',
                                array('mail'=>$contact_entity) ));
                $this->get('mailer')->send($msg);
                $this->get('session')->getFlashBag()
                        ->add('bionic_contactus', 'Message sent. Thank you!');
                // Redirect
                //return $this->redirect($this->generateUrl('bionic_contactsent'));
            }
        }

        return $this->render('BionicUniversityContactBundle:Mail:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function sentAction(Request $request)
    {
        return $this->render('BionicUniversityContactBundle:Mail:sent.html.twig');
    }
}
