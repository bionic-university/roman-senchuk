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
        $form = $this->createForm(new ContactType(), new ContactEntity());
        
        if($request->getMethod() == 'POST'){
            if ($form->isValid()) {
            $mailMessage = \Swift_Message::newInstance()
                    ->setFrom('frspm.roman@gmail.com')
                    ->setTo($this->container->getParameter('emails.contact_email'))
                    ->setSubject('Message of my Dear Bob')
                    ->setBody($this->renderView('BionicUniversityContactBundle:Mail:contactusEmail.txt.twig',
                            array('mail'=> $mailMessage)));
            $this->get('mailer')->send($mailMessage);
            $this->get('session')->setFlash('contactus-notice', 'The message was successfully sent!');
            // Here redirect will be required
            
            }
        }
        
        return $this->render(
                'BionicUniversityContactBundle:Mail:contact.html.twig', array(
                    'form' => $form->createView())
            );
    }
}
