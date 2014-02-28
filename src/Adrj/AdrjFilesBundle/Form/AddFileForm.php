<?php

namespace Adrj\AdrjFilesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddFileForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text', array( 'label' => 'Nazwa pliku : '))
            ->add('extension','text', array( 'label' => 'Rozszerzenie : '))
            ->add('token','password', array( 'label' => 'Nazwa powiązanego tokena : '))
            ->add('attachment', 'file', array('label' => 'Plik : '))
            ->add('Submit', 'submit');
    }
    
    public function getAttachment()
    {
        return $this->attachment;
    }
    
    public function getToken()
    {
        return $this->token;
    }

    public function getName()
    {
        return 'addFile';
    }
}