<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Enum\TaskPriority;
use App\Enum\TaskType as EnumTaskType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => ['class' => 'input']
            ])
            ->add('description', TextType::class, [
                'attr' => ['class' => 'input']
            ])
            ->add('priorityLevel', EnumType::class,[
            'class' => TaskPriority::class,
                'attr' => ['class' => 'select']
            ])
            ->add('type', EnumType::class, [
                'class' => EnumTaskType::class,
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
