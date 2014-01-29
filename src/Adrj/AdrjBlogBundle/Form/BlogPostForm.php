<?php

namespace Adrj\AdrjBlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BlogPostForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text')
            ->add('description', 'textarea')
            ->add('content', 'textarea')
            ->add('active', 'checkbox', array(
                'required' => FALSE))
            ->add('tag', 'text')
            ->add('Dodaj', 'submit');
    }

    public function getName()
    {
        return 'post';
    }
}
