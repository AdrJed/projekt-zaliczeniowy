<?php

namespace Adrj\AdrjFilesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FilesList
 */
class FilesList
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $tokenId;

    /**
     * @var string
     */
    private $extension;


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
     * Set name
     *
     * @param string $name
     * @return FilesList
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * Set tokenId
     *
     * @param integer $tokenId
     * @return FilesList
     */
    public function setTokenId($tokenId)
    {
        $this->tokenId = $tokenId;

        return $this;
    }

    /**
     * Get tokenId
     *
     * @return integer 
     */
    public function getTokenId()
    {
        return $this->tokenId;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return FilesList
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string 
     */
    public function getExtension()
    {
        return $this->extension;
    }
}
