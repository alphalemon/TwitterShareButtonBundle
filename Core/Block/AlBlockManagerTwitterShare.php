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

namespace AlphaLemon\Block\TwitterShareBundle\Core\Block;

use AlphaLemon\AlphaLemonCmsBundle\Core\Content\Block\JsonBlock\AlBlockManagerJsonBlock;

/**
 * Description of AlBlockManagerTwitterShare
 */
class AlBlockManagerTwitterShare extends AlBlockManagerJsonBlock
{
    public function getDefaultValue()
    {
        $value =
            '{
                "0" : {
                    "url" : "",
                    "text" : "",
                    "via" : "",
                    "related" : "",
                    "hashtags" : "",
                    "size" : "",
                    "dnt" : "", 
                    "count" : "", 
                    "lang" : ""
                 }
            }';
        
        return array('Content' => $value);
    }
    
    public function getHtml()
    {
        $items = $this->decodeJsonContent($this->alBlock->getContent());
        $options = $items["0"]; 
        
        $data = array();
        foreach($options as $tag => $value)
        {
            if ( ! empty($value)) {
                $data[] = 'data-' . $tag . '="' . $value . '"';
            }
        }
        $tags = implode(" ", $data);
        
        return array('RenderView' => array(
            'view' => 'TwitterShareBundle:Twitter:twitter_share.html.twig',
            'options' => array('data' => $tags),
        ));
    }
    
    protected function getEditorWidth() 
    {
        return 300;
    }
    
    protected function replaceHtmlCmsActive()
    {
        return "Share button not renderable when editor is active";
    }
}