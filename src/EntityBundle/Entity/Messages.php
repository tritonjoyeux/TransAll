<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 */
class Messages
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $body;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var int
     */
    private $idUser1;

    /**
     * @var int
     */
    private $idUser2;

    /**
     * @var string
     */
    private $writter;

    /**
     * @var string
     */
    private $getter;

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
     * Set body
     *
     * @param string $body
     * @return Messages
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Messages
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idUser1
     *
     * @param integer $idUser1
     * @return Messages
     */
    public function setIdUser1($idUser1)
    {
        $this->idUser1 = $idUser1;

        return $this;
    }

    /**
     * Get idUser1
     *
     * @return integer
     */
    public function getIdUser1()
    {
        return $this->idUser1;
    }

    /**
     * Set idUser2
     *
     * @param integer $idUser2
     * @return Messages
     */
    public function setIdUser2($idUser2)
    {
        $this->idUser2 = $idUser2;

        return $this;
    }

    /**
     * Get idUser2
     *
     * @return integer
     */
    public function getIdUser2()
    {
        return $this->idUser2;
    }

    /**
     * Set writter
     *
     * @param integer $writter
     * @return Messages
     */
    public function setwritter($writter)
    {
        $this->writter = $writter;

        return $this;
    }

    /**
     * Get writter
     *
     * @return integer
     */
    public function getwritter()
    {
        return $this->writter;
    }

    /**
     * Set getter
     *
     * @param integer $getter
     * @return Messages
     */
    public function setgetter($getter)
    {
        $this->getter = $getter;

        return $this;
    }

    /**
     * Get getter
     *
     * @return integer
     */
    public function getgetter()
    {
        return $this->getter;
    }


}
