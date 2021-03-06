<?php

namespace WCSCoavBundle\Entity;

/**
 * Flight
 */
class Flight
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $departure;

    /**
     * @var string
     */
    private $arrival;

    /**
     * @var string
     */
    private $pilot;

    /**
     * @var int
     */
    private $freeSeats;

    /**
     * @var \DateTime
     */
    private $takeofTime;


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
     * Set departure
     *
     * @param string $departure
     *
     * @return Flight
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return string
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param string $arrival
     *
     * @return Flight
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return string
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set pilot
     *
     * @param string $pilot
     *
     * @return Flight
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return string
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Set freeSeats
     *
     * @param integer $freeSeats
     *
     * @return Flight
     */
    public function setFreeSeats($freeSeats)
    {
        $this->freeSeats = $freeSeats;

        return $this;
    }

    /**
     * Get freeSeats
     *
     * @return int
     */
    public function getFreeSeats()
    {
        return $this->freeSeats;
    }

    /**
     * Set takeofTime
     *
     * @param \DateTime $takeofTime
     *
     * @return Flight
     */
    public function setTakeofTime($takeofTime)
    {
        $this->takeofTime = $takeofTime;

        return $this;
    }

    /**
     * Get takeofTime
     *
     * @return \DateTime
     */
    public function getTakeofTime()
    {
        return $this->takeofTime;
    }
    /**
     * @var \WCSCoavBundle\Entity\Terrain
     */
    private $terrain;


    /**
     * Set terrain
     *
     * @param \WCSCoavBundle\Entity\Terrain $terrain
     *
     * @return Flight
     */
    public function setTerrain(\WCSCoavBundle\Entity\Terrain $terrain = null)
    {
        $this->terrain = $terrain;

        return $this;
    }

    /**
     * Get terrain
     *
     * @return \WCSCoavBundle\Entity\Terrain
     */
    public function getTerrain()
    {
        return $this->terrain;
    }
    /**
     * @var \WCSCoavBundle\Entity\Terrain
     */
    private $departures;


    /**
     * Set departures
     *
     * @param \WCSCoavBundle\Entity\Terrain $departures
     *
     * @return Flight
     */
    public function setDepartures(\WCSCoavBundle\Entity\Terrain $departures = null)
    {
        $this->departures = $departures;

        return $this;
    }

    /**
     * Get departures
     *
     * @return \WCSCoavBundle\Entity\Terrain
     */
    public function getDepartures()
    {
        return $this->departures;
    }
    /**
     * @var \WCSCoavBundle\Entity\PlaneModel
     */
    private $planes;


    /**
     * Set planes
     *
     * @param \WCSCoavBundle\Entity\PlaneModel $planes
     *
     * @return Flight
     */
    public function setPlanes(\WCSCoavBundle\Entity\PlaneModel $planes = null)
    {
        $this->planes = $planes;

        return $this;
    }

    /**
     * Get planes
     *
     * @return \WCSCoavBundle\Entity\PlaneModel
     */
    public function getPlanes()
    {
        return $this->planes;
    }
    /**
     * @var \WCSCoavBundle\Entity\PlaneModel
     */
    private $plane;


    /**
     * Set plane
     *
     * @param \WCSCoavBundle\Entity\PlaneModel $plane
     *
     * @return Flight
     */
    public function setPlane(\WCSCoavBundle\Entity\PlaneModel $plane = null)
    {
        $this->plane = $plane;

        return $this;
    }

    /**
     * Get plane
     *
     * @return \WCSCoavBundle\Entity\PlaneModel
     */
    public function getPlane()
    {
        return $this->plane;
    }
    /**
     * @var \WCWCSCoavBundle\Entity\Terrain
     */
    private $arrivals;


    /**
     * Set arrivals
     *
     * @param \WCWCSCoavBundle\Entity\Terrain $arrivals
     *
     * @return Flight
     */
    public function setArrivals(\WCWCSCoavBundle\Entity\Terrain $arrivals = null)
    {
        $this->arrivals = $arrivals;

        return $this;
    }

    /**
     * Get arrivals
     *
     * @return \WCWCSCoavBundle\Entity\Terrain
     */
    public function getArrivals()
    {
        return $this->arrivals;
    }
}
