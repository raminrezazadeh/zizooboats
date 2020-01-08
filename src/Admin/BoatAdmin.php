<?php
namespace App\Admin;

use App\Types\ColorsEnum;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

final class BoatAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', TextType::class)
            ->add('length', IntegerType::class)
            ->add('color', ChoiceType::class, array(
                'choices' => array(
                    ColorsEnum::Blue => true,
                    ColorsEnum::Green => false,
                    ColorsEnum::Red => false,
                ),
                'attr' => array('class' => 'dropdown')

            ))
            ->add('year', IntegerType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('length')
            ->add('year');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('length')
            ->add('year');
    }
}