<?php

namespace Adrj\AdrjWorksBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorksList
 */
class WorksList
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $shortDesc;

    /**
     * @var string
     */
    private $thumb;


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
     * Set categoryId
     *
     * @param integer $categoryId
     * @return WorksList
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

        /**
     * Set name
     *
     * @param string $name
     * @return WorksList
     */
    public function setName($name)
    {
        $this->categoryId = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set shortDesc
     *
     * @param string $shortDesc
     * @return WorksList
     */
    public function setShortDesc($shortDesc)
    {
        $this->shortDesc = $shortDesc;

        return $this;
    }

    /**
     * Get shortDesc
     *
     * @return string 
     */
    public function getShortDesc()
    {
        return $this->shortDesc;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     * @return WorksList
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return string 
     */
    public function getThumb()
    {
        return $this->thumb;
    }
    
    public function jsonSerializeWork()
    {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'shortDesc' => $this->shortDesc,
            'thumb' => $this->thumb
        );
    }
}
