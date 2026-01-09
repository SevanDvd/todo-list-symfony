<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [
                'attr' => ['class' => 'input']
            ])
            ->add('description', null, [
                'attr' => ['class' => 'input']
            ])
            ->add('priorityLevel', null, [
                'attr' => ['class' => 'select']
            ])
            ->add('type', null, [
                'attr' => ['class' => 'select']
            ])
            ->add('isDone')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}
