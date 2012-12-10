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

/**
 * 
 *
 * @author alphalemon <webmaster@alphalemon.com>
 */
class TwitterShare
{
    protected $id;    
    protected $url;
    protected $text;
    protected $hashtags;
    protected $via;
    protected $related;   
    protected $size = false;   
    protected $dnt = false;   
    protected $count;  
    protected $lang;
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($v)
    {
        $this->id = $v;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($v)
    {
        $this->url = $v;
    }
    
    public function getText()
    {
        return $this->text;
    }

    public function setText($v)
    {
        $this->text = $v;
    }
    
    public function getHashtags()
    {
        return $this->hashtags;
    }

    public function setHashtags($v)
    {
        $this->hashtags = $v;
    }
    
    public function getVia()
    {
        return $this->via;
    }

    public function setVia($v)
    {
        $this->via = $v;
    }
    
    public function getRelated()
    {
        return $this->related;
    }

    public function setRelated($v)
    {
        $this->related = $v;
    }
    
    public function getSize()
    {
        return $this->size;
    }

    public function setSize($v)
    {
        $this->size = $v;
    }
    
    public function getDnt()
    {
        return $this->dnt;
    }

    public function setDnt($v)
    {
        $this->dnt = $v;
    }
    
    public function getCount()
    {
        return $this->count;
    }

    public function setCount($v)
    {
        $this->count = $v;
    }
    
    public function getLang()
    {
        return $this->lang;
    }

    public function setLang($v)
    {
        $this->lang = $v;
    }
}