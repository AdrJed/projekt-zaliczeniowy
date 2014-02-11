<?php

namespace Adrj\AdrjFilesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FilesTokenForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('token','password')
            ->add('OK', 'submit');
    }

    public function getName()
    {
        return 'token';
    }
}