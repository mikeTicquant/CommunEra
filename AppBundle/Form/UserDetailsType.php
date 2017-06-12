<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 08/06/2017
 * Time: 16:32
 */

namespace AppBundle\Form;


use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserDetailsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('first_name', TextType::class, [
                'label' => 'Nom*'
            ])
            ->add('last_name', TextType::class, [
                'label' => 'Prénom*'
            ])


            ->add('job', TextType::class, [
                'label' => 'Poste*'
            ])
            ->add('address_street', TextType::class, [
                'label' => 'Adresse*'
            ])
            ->add('address_street2', TextType::class, [
                'label' => 'Complément adresse'
            ])
            ->add('address_postal_code', TextType::class, [
                'label' => 'Code postal*'
            ])
            ->add('address_city', TextType::class, [
                'label' => 'Ville*'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }

}