<?php

namespace Corporativo\NutrirBoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class PratoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $formOptionsCategoria = array(
            'class'         => 'NutrirBoxBundle:Categoria',
            'property'        => 'noNome',
            'label'         => 'Categoria',
            'empty_value'   => 'Selecione',
            'expanded' => false,
            'multiple' => false,
            'query_builder' => function (EntityRepository $repository)  {
                $qb = $repository->createQueryBuilder('categoria')->orderBy('categoria.noNome');
                return $qb;
            }
        );
        
        $builder
            ->add('noNome')
            ->add('nuQtd')
            ->add('deDescricao')
            ->add('vlValor', null,array('label' => 'Valor', 'attr'=>array('class'=>'money')))
            ->add('coCategoria','entity', $formOptionsCategoria)
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Corporativo\NutrirBoxBundle\Entity\Prato'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'corporativo_nutrirboxbundle_prato';
    }
}
