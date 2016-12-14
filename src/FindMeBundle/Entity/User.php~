<?php

namespace FindMeBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;


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
     * @var integer
     */
    private $points;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $winners;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $authors;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $clusters;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->winners = new \Doctrine\Common\Collections\ArrayCollection();
        $this->authors = new \Doctrine\Common\Collections\ArrayCollection();
        $this->clusters = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set points
     *
     * @param integer $points
     *
     * @return User
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Add winner
     *
     * @param \FindMeBundle\Entity\Game $winner
     *
     * @return User
     */
    public function addWinner(\FindMeBundle\Entity\Game $winner)
    {
        $this->winners[] = $winner;

        return $this;
    }

    /**
     * Remove winner
     *
     * @param \FindMeBundle\Entity\Game $winner
     */
    public function removeWinner(\FindMeBundle\Entity\Game $winner)
    {
        $this->winners->removeElement($winner);
    }

    /**
     * Get winners
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWinners()
    {
        return $this->winners;
    }

    /**
     * Add author
     *
     * @param \FindMeBundle\Entity\Game $author
     *
     * @return User
     */
    public function addAuthor(\FindMeBundle\Entity\Game $author)
    {
        $this->authors[] = $author;

        return $this;
    }

    /**
     * Remove author
     *
     * @param \FindMeBundle\Entity\Game $author
     */
    public function removeAuthor(\FindMeBundle\Entity\Game $author)
    {
        $this->authors->removeElement($author);
    }

    /**
     * Get authors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Add cluster
     *
     * @param \FindMeBundle\Entity\Cluster $cluster
     *
     * @return User
     */
    public function addCluster(\FindMeBundle\Entity\Cluster $cluster)
    {
        $this->clusters[] = $cluster;

        return $this;
    }

    /**
     * Remove cluster
     *
     * @param \FindMeBundle\Entity\Cluster $cluster
     */
    public function removeCluster(\FindMeBundle\Entity\Cluster $cluster)
    {
        $this->clusters->removeElement($cluster);
    }

    /**
     * Get clusters
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClusters()
    {
        return $this->clusters;
    }
}
