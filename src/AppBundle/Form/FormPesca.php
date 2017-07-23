<?php

namespace AppBundle\Form;


use Symfony\Component\Form\TextField;
use Symfony\Component\Form\Checkbox;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use AppBundle\Entity\Pesca;

use Symfony\Component\Form\Extension\Core\Type\TimeType;

//PER COLLECTION
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class FormPesca extends AbstractType {
		
	public function buildForm(FormBuilderInterface $builder, array $options) {
    	
		 $builder->add('valorePescato');
		 $builder->add('tipologiaPesca');
		 $builder->add('dataInserimento');
		 $builder->add('dataFine');
		 		   $builder->add('geojson', HiddenType::class);
		 		     $builder->add('idutente', HiddenType::class);


	
		   $builder->add('save', SubmitType::class, array('label' => 'InserisciArea'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Pesca',
        ));
    }

    public function getName()
    {
        return 'pescato';
    }
}