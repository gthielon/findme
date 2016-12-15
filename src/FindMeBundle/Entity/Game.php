<?php

namespace FindMeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


class Game
{
    public $file;

    protected function getUploadDir()
    {
        return 'uploads/photo';
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
    public function preUpload()
    {
        if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $this->photo = uniqid().'.'.$this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file->move($this->getUploadRootDir(), $this->photo);

        unset($this->file);
    }

    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }

    // generate code
  
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $indice;

    /**
     * @var \FindMeBundle\Entity\Player
     */
    private $winner;

    /**
     * @var \FindMeBundle\Entity\Player
     */
    private $author;

    /**
     * @var \FindMeBundle\Entity\Level
     */
    private $level;


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
     *
     * @return Game
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
     * Set winner
     *
     * @param \FindMeBundle\Entity\Player $winner
     *
     * @return Game
     */
    public function setWinner(\FindMeBundle\Entity\Player $winner = null)
    {
        $this->winner = $winner;

        return $this;
    }

    /**
     * Get winner
     *
     * @return \FindMeBundle\Entity\Player
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * Set author
     *
     * @param \FindMeBundle\Entity\Player $author
     *
     * @return Game
     */
    public function setAuthor(\FindMeBundle\Entity\Player $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \FindMeBundle\Entity\Player
     */
    public function getAuthor()
    {
        return $this->author;
    }

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
