<?php

namespace AppBundle\Form\Admin;


use Symfony\Component\Form\TextField;
use Symfony\Component\Form\Checkbox;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
//use AppBundle\Entity\Pesca;

use Symfony\Component\Form\Extension\Core\Type\TimeType;

//PER COLLECTION
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class FormMostra extends AbstractType {
		
	public function buildForm(FormBuilderInterface $builder, array $options) {
    	
		 $builder->add('gruppo',TextType::class, array
		 ('required' => False));
		 $builder->add('idutente', TextType::class, array('required' => False));

	
		   $builder->add('save', SubmitType::class, array('label' => 'Filtra'));
    }


/*
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Pesca',
        ));
    }
*/
    public function getName()
    {
        return 'mostra';
    }
}