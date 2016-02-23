<?php

namespace Corporativo\NutrirBoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IngredienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('noNome')
            ->add('deDescricao')
            ->add('vlValor')
            ->add('isAtivo')
//            ->add('coTipoIngrediente')
//            ->add('coIngredientePai')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Corporativo\NutrirBoxBundle\Entity\Ingrediente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'corporativo_nutrirboxbundle_ingrediente';
    }
}
