<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 15/05/2017
 * Time: 14:36
 */

namespace AppBundle\Form;


use AppBundle\Entity\Sitter;
use Doctrine\DBAL\Types\BooleanType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class SitterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class,[
                'label' => 'Prénom',
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom',
            ])
            ->add('cp',IntegerType::class,[
                'label' => 'Code postal'
            ])
            ->add('ville',TextType::class,[
                'label' => 'ville'
            ])
            ->add('tel', TextType::class,[
                'label' => 'Tel'
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
                'attr'  => ['placeholder' => 'Votre descrption']
            ])
            ->add('email', EmailType::class,[
                'label' => 'Email'
            ])
            ->add('mission', IntegerType::class,[
                'label' => 'Nombre missions'
            ])
            ->add('dispo', IntegerType::class,[
                'label' => 'Disponibilité'
            ])
            ->add('password', RepeatedType ::class, array(
                'invalid_message' => 'The password fields must match.',
                'first_options'   => array('label' => 'Password'),
                'second_options'  => array('label' => 'Repeat Password'),
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Sitter::class
        ));
    }


}