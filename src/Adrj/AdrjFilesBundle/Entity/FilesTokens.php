<?php

namespace Adrj\AdrjFilesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FilesTokens
 */
class FilesTokens
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $token;


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
     * Set token
     *
     * @param string $token
     * @return FilesTokens
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }
}
