<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Food
 */
class Food
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idChief;

    /**
     * @var int
     */
    private $note;

    /**
     * @var int
     */
    private $countNote;

    /**
     * @var int
     */
    private $price;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $type;


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
     * Set idChief
     *
     * @param integer $idChief
     * @return Food
     */
    public function setIdChief($idChief)
    {
        $this->idChief = $idChief;

        return $this;
    }

    /**
     * Get idChief
     *
     * @return integer
     */
    public function getIdChief()
    {
        return $this->idChief;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return Food
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set countNote
     *
     * @param integer $countNote
     * @return Food
     */
    public function setCountNote($countNote)
    {
        $this->countNote = $countNote;

        return $this;
    }

    /**
     * Get countNote
     *
     * @return integer
     */
    public function getCountNote()
    {
        return $this->countNote;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Food
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
     * Get price
     *
     * @param integer $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Food
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
