<?php

namespace FindMeBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 */
class Game
{
    public function __toString()
    {
        return $this->getUsers();
    }

/*    public function __toString()
    {
        return $this->photo;
    }

    protected function getUploadDir()
    {
        return 'photos';
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    public function getWebPath()
    {
        return null === $this->photo ? null : $this->getUploadDir().'/'.$this->photo;
    }

    public function getAbsolutePath()
    {
        return null === $this->photo ? null : $this->getUploadRootDir().'/'.$this->photo;
    }


    /**
     * @ORM\PrePersist
     */
   /* public function preUpload()
    {
        if (null !== $this->file) {
            // "uniquid()" permet de créer une id de manière aléatoire
            // Récupère l'extension du fichier
            $this->photo = uniqid().'.'.$this->file->guessExtension();
        }
    }


    /**
     * @ORM\PostPersist
     */
    /*public function upload()
    {
        if (null === $this->file) {
            return;
        }
// If there is an error when moving the file, an exception will
// be automatically thrown by move(). This will properly prevent
// the entity from being persisted to the database on error
        $this->file->move($this->getUploadRootDir(), $this->photo);

        unset($this->file);
    }*/

/*
    /**
     * @ORM\PostRemove
     */
/*    public function removeUpload()
    {
        if ($photo = $this->getAbsolutePath()) {
            unlink($photo);
        }
    } */

    // GENERATED CODE


    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @Assert\Photo(
     *     maxSize = "1k",
     *     mimeTypes = {"image/*"},
     *     maxSizeMessage = "The maximum allowed file size is 1MB.",
     *     mimeTypesMessage = "Please upload a valid Image.")
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \FindMeBundle\Entity\User $user
     *
     * @return Game
     */
    public function addUser(\FindMeBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \FindMeBundle\Entity\User $user
     */
    public function removeUser(\FindMeBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
