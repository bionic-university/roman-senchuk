<?php
namespace BionicUniversity\ContactBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
                ->add('email','email')
                ->add('subject')
                ->add('message', 'textarea');
    }

    public function getName(){
        return 'contact';
    }
} 