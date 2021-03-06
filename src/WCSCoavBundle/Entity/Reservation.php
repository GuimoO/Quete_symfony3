<?php

namespace WCSCoavBundle\Entity;

/**
 * Reservation
 */
class Reservation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $nbSeats;


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
     * Set name
     *
     * @param string $name
     *
     * @return Reservation
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
     * Set nbSeats
     *
     * @param integer $nbSeats
     *
     * @return Reservation
     */
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    /**
     * Get nbSeats
     *
     * @return int
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }
    /**
     * @var \WCSCoavBundle\Entity\Flight
     */
    private $flight;


    /**
     * Set flight
     *
     * @param \WCSCoavBundle\Entity\Flight $flight
     *
     * @return Reservation
     */
    public function setFlight(\WCSCoavBundle\Entity\Flight $flight = null)
    {
        $this->flight = $flight;

        return $this;
    }

    /**
     * Get flight
     *
     * @return \WCSCoavBundle\Entity\Flight
     */
    public function getFlight()
    {
        return $this->flight;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $User;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->User = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \WCSCoavBundle\Entity\User $user
     *
     * @return Reservation
     */
    public function addUser(\WCSCoavBundle\Entity\User $user)
    {
        $this->User[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \WCSCoavBundle\Entity\User $user
     */
    public function removeUser(\WCSCoavBundle\Entity\User $user)
    {
        $this->User->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->User;
    }
}
