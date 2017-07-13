<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 20/06/2017
 * Time: 11:24
 */

namespace AppBundle\Form;


use AppBundle\Entity\Reseau;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ReseauType extends AbstractType
{



    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codeAffReseau', TextType::class, [
                'label' => 'Code reseau',
            ])

            ->add('photoFile', FileType::class, [
                'label' => 'Logo Réseau',
                'required' => false,
            ])

        ->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) {
        $reseau = $event->getData();
        if ($reseau instanceof Reseau) {
            $reseau->setVersion(1 + $reseau->getVersion());
            $event->setData($reseau);
        }
    });

    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reseau::class,
        ]);
    }

}