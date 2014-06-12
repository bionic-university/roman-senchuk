<?php

namespace BionicUniversity\ContactBundle\Controller;

use BionicUniversity\ContactBundle\Form\Type\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $form = $this->createForm(new ContactType());
        return array('form' => $form->createView());
    }
}
