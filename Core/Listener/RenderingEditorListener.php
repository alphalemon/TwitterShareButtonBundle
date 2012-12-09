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

namespace AlphaLemon\Block\TwitterShareBundle\Core\Listener;

use AlphaLemon\AlphaLemonCmsBundle\Core\Listener\JsonBlock\RenderingItemEditorListener;

/**
 * Manipulates the block's editor response when the editor has been rendered
 *
 * @author alphalemon <webmaster@alphalemon.com>
 */
class RenderingEditorListener extends RenderingItemEditorListener
{
    protected function configure()
    {
        return array(
            'blockClass' => '\AlphaLemon\Block\TwitterShareBundle\Core\Block\AlBlockManagerTwitterShare',
            'formClass' => '\AlphaLemon\Block\TwitterShareBundle\Core\Form\Twitter\TwitterShareType',
            'embeddedClass' => '\AlphaLemon\Block\TwitterShareBundle\Core\Form\Twitter\TwitterShare',
        );
    }
}