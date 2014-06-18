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
            // Sending email

            // Here redirect will be required
            
            }
        }
        
        return $this->render(
                'BionicUniversityContactBundle:Mail:contact.html.twig', array(
                    'form' => $form->createView())
            );
    }
}
