<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 14/05/2017
 * Time: 21:09
 */

namespace AppBundle\Form;


use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class UserDetailsType extends  AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class, ['label' => 'Email'])
            ->add('firstname', TextType::class, ['label' => 'Prénom' ])
            ->add('lastname', TextType::class, ['label' => 'Nom' ])
            ->add('birthdate', DateType::class, [
                'html5' => true,
                'widget' => 'single_text',
                'label' => 'Date de naissance',
            ]);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
            $resolver->setDefaults(
                ['data_class' => User::class,]
            );
    }


}