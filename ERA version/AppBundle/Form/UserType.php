<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 07/06/2017
 * Time: 13:32
 */

namespace AppBundle\Form;


use AppBundle\AppBundle;
use AppBundle\Entity\Role;
use AppBundle\Entity\User;

use function Sodium\add;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

            $builder->add('civility', ChoiceType::class, array(
                'choices'   => array(
                    'Monsieur' => 'M',
                    'Madame' => 'F'),
                'label' => 'Civilité*',
                'required'  => false,
            ))

            ->add('first_name', TextType::class, [
                'label' => 'Nom*'
            ])
            ->add('last_name', TextType::class, [
                'label' => 'Prénom*'
            ])
            ->add('email', RepeatedType::class, [
                'type' => EmailType::class,
                'first_options' => ['label' => 'Email*'],
                'second_options' => ['label' => 'Répéter l email* '],

            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Répéter le mot de passe'],
            ])
            ->add('id_role', EntityType::class, [
                'label' => 'Type de compte',
                'class' => Role::class,
                'choice_label' => 'name',
                'empty_data' => null,
                'placeholder' => 'Sélectionnez un type de compte ...',
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
            ])
            ->add('signature', CheckboxType::class, [
                'label' => 'J\'ai lu et j\'accepte les conditions générales et notre politique de confidentialité.'
            ])


            ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['userform' => User::class]);
    }


}