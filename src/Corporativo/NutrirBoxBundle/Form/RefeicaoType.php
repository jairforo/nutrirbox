<?php

namespace Corporativo\NutrirBoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RefeicaoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('isEntregue')
            ->add('dtEntrega')
            ->add('isAtivo')
            ->add('deObservacao')
            ->add('coPedido')
            ->add('pratoCoPrato')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Corporativo\NutrirBoxBundle\Entity\Refeicao'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'corporativo_nutrirboxbundle_refeicao';
    }
}
