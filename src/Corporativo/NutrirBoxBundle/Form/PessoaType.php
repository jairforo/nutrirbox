<?php

namespace Corporativo\NutrirBoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PessoaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('noNome', 'text', array(
                    'label' => 'Nome',
                    'attr' => array(
                        'maxlength' => 100
                    )
                ))
                ->add('noEmail', 'text', array(
                    'label' => 'E-mail',
                    'attr' => array(
                        'maxlength' => 100
                    )
                ))
                ->add('noEmail', 'text', array(
                    'label' => 'E-mail',
                    'attr' => array(
                        'maxlength' => 100
                    )
                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Corporativo\NutrirBoxBundle\Entity\Pessoa'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'corporativo_nutrirboxbundle_pessoa';
    }

}
