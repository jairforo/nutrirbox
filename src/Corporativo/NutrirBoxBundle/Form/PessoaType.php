<?php

namespace Corporativo\NutrirBoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PessoaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('noNome', 'text', array(
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
            ->add('nuCpf', 'text', array(
                'label' => 'CPF',
                'attr' => array(
                    'maxlength' => 14
                )
            ))
            ->add('tpSexo', 'choice', array(
                'label' => 'Sexo',
                'choices' => array(
                    'M' => 'Masculino',
                    'F' => 'Feminino'
                ),
            ))
            ->add('dtNascimento', 'text', array(
                'label' => 'Data Nascimento',
                'attr' => array(
                    'maxlength' => 10
                )
            ))
            ->add('nuTelefone', 'text', array(
                'label' => 'Telefone',
                'attr' => array(
                    'maxlength' => 15
                )
            ))
            ->add('nuCelular', 'text', array(
                'label' => 'Celular',
                'attr' => array(
                    'maxlength' => 15
                )
            ))
            ->add('nuCelular', 'text', array(
                'label' => 'Celular',
                'attr' => array(
                    'maxlength' => 15
                )
            ))
            ->add('isAtivo', 'checkbox', array(
                'label' => 'Ativo',
                'attr' => array('checked' => 'checked'),
            ))
            //            ->add('coPerfil')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Corporativo\NutrirBoxBundle\Entity\Pessoa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'corporativo_nutrirboxbundle_pessoa';
    }
}
