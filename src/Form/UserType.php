<?php
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
            $builder
                ->add('email', EmailType::class)
                ->add('username', TextType::class)
                ->add('plainPassword', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'first_options'  => array('label' => 'Password'),
                    'second_options' => array('label' => 'Repeat Password'),
                        ))
            ->add('newsletter',CheckboxType::class,[
                'required'=>false,
                'label'=>'receive newsletter ?'
            ])
            ;
}

public function configureOptions(OptionsResolver $resolver)
{
        $resolver->setDefaults(array(
            'data_class' => User::class,
            'csrf_protection' => false
                    ));
}
}