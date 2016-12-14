<?php

namespace FindMeBundle\Entity;

/**
 * Game
 */
class Game
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $indice;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Game
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set indice
     *
     * @param string $indice
     *
     * @return Game
     */
    public function setIndice($indice)
    {
        $this->indice = $indice;

        return $this;
    }

    /**
     * Get indice
     *
     * @return string
     */
    public function getIndice()
    {
        return $this->indice;
    }




    /**
     * @var \FindMeBundle\Entity\User
     */
    private $winner;

    /**
     * @var \FindMeBundle\Entity\User
     */
    private $author;


    /**
     * Set winner
     *
     * @param \FindMeBundle\Entity\User $winner
     *
     * @return Game
     */
    public function setWinner(\FindMeBundle\Entity\User $winner = null)
    {
        $this->winner = $winner;

        return $this;
    }

    /**
     * Get winner
     *
     * @return \FindMeBundle\Entity\User
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * Set author
     *
     * @param \FindMeBundle\Entity\User $author
     *
     * @return Game
     */
    public function setAuthor(\FindMeBundle\Entity\User $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \FindMeBundle\Entity\User
     */
    public function getAuthor()
    {
        return $this->author;
    }
    /**
     * @var \FindMeBundle\Entity\Level
     */
    private $level;


    /**
     * Set level
     *
     * @param \FindMeBundle\Entity\Level $level
     *
     * @return Game
     */
    public function setLevel(\FindMeBundle\Entity\Level $level = null)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return \FindMeBundle\Entity\Level
     */
    public function getLevel()
    {
        return $this->level;
    }
}
