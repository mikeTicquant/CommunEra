<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 15/05/2017
 * Time: 00:05
 */

namespace AppBundle\Form;


use AppBundle\Entity\Booking;
use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;


class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('duree',IntegerType::class,[
                'label' => 'Nombre d\'heures',

            ])

            ->add('dateArrived',DateType::class,[
                'html5'  => true,
                'widget' => 'single_text',
                'label'  => 'Date d\'arrivée',
                'attr'  => ['placeholder' =>'La date d\'arrivée du Sitter']
            ])

            ->add('userNom',TextType::class,[
                'label'  => 'Nom et prénom',
                'attr'  => ['placeholder' =>'Votre Nom et prénom'],
            ])
            ->add('adresse',TextType::class,[
                'label' => 'Adresse',
                'attr'  => ['placeholder' =>'Votre adresse'],
            ])
            ->add('email',TextType::class,[
                'label' => 'Mail',
                'attr'  => ['placeholder' =>'Votre adresse email'],
            ]);



    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            ['data_class' => Booking::class]
        );
    }


}