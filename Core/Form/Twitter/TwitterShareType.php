<?php
/*
 * This file is part of the BusinessDropCapBundle and it is distributed
 * under the MIT LICENSE. To use this application you must leave intact this copyright 
 * notice.
 *
 * Copyright (c) AlphaLemon <webmaster@alphalemon.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For extra documentation and help please visit http://www.alphalemon.com
 * 
 * @license    MIT LICENSE
 * 
 */

namespace AlphaLemon\Block\TwitterShareBundle\Core\Form\Twitter;

use AlphaLemon\AlphaLemonCmsBundle\Core\Form\JsonBlock\JsonBlockType;
use Symfony\Component\Form\FormBuilderInterface;

class TwitterShareType extends JsonBlockType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder->add('url');
        $builder->add('text', 'textarea');
        $builder->add('via');
        $builder->add('related');
        $builder->add('hashtags');
        $builder->add('size', 'choice', array('choices' => array('' => 'small', 'large' => 'large')));
        $builder->add('dnt', 'choice', array('choices' => array('' => 'false', 'true' => 'true')));
        $builder->add('count', 'choice', array('choices' => array('' => 'true', 'none' => 'false')));
        $builder->add('lang');                
    }
    
    public function getDefaultOptions(array $options)
    {
        $values = parent::getDefaultOptions($options);
        
        return $values + array(
            'data_class' => '\AlphaLemon\Block\TwitterShareBundle\Core\Form\Twitter\TwitterShare',
        );
    }
}
