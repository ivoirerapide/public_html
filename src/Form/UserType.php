<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('roles')
            ->add('password')
            // ->add('agreeTerms', CheckboxType::class, array(
            //     'label' => 'J\'ai lu et j\'accepte les conditions générales d\'utilisation',
            //     'mapped' => false
            // ))
            ->add('is_verified', 'choice', array(
                    'required' => false,
                    '1' => true,
                    '0' => false 
                    ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
