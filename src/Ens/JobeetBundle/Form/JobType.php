<?php

namespace Ens\JobeetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Ens\JobeetBundle\Entity\Job;

class JobType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm( FormBuilderInterface $builder, array $options ) {
        $builder
                ->add( 'type', 'choice', array( 'choices' => Job::getTypes(), 'expanded' => true ) )
                ->add( 'company' )
                ->add( 'file', 'file', array( 'label' => 'Company logo', 'required' => false ) )
                ->add( 'url' )
                ->add( 'position' )
                ->add( 'location' )
                ->add( 'description' )
                ->add( 'how_to_apply', null, array( 'label' => 'How to apply?' ) )
                ->add( 'is_public', null, array( 'label' => 'Public?' ) )
                ->add( 'email' )
                ->add( 'category' )
        ;
    }

    /**
     * @return string
     */
    public function getName() {
        return 'job';
    }

}
