<?php

namespace Adrj\AdrjBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlogPosts
 */
class BlogPosts
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $unused;

    /**
     * @var \DateTime
     */
    private $createTime;

    /**
     * @var \DateTime
     */
    private $editTime;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var string
     */
    private $tag;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return BlogPosts
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return BlogPosts
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return BlogPosts
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set unused
     *
     * @param string $unused
     * @return BlogPosts
     */
    public function setUnused($unused)
    {
        $this->unused = $unused;

        return $this;
    }

    /**
     * Get unused
     *
     * @return string 
     */
    public function getUnused()
    {
        return $this->unused;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     * @return BlogPosts
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return \DateTime 
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set editTime
     *
     * @param \DateTime $editTime
     * @return BlogPosts
     */
    public function setEditTime($editTime)
    {
        $this->editTime = $editTime;

        return $this;
    }

    /**
     * Get editTime
     *
     * @return \DateTime 
     */
    public function getEditTime()
    {
        return $this->editTime;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return BlogPosts
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set tag
     *
     * @param string $tag
     * @return BlogPosts
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }
}
