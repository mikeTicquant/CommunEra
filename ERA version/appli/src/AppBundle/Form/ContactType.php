<?php

namespace AppBundle\Form;

use AppBundle\Model\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Inscrivez votre nom ...'],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr'  => ['placeholder' => 'Inscrivez votre email ...'],
            ])
            ->add('subject', TextType::class, [
                'label' => 'Sujet',
                'attr'  => ['placeholder' =>'Inscrivez votre sujet...'],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'attr'  => ['placeholder' =>'Inscrivez votre message...'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Contact::class);
    }
}
