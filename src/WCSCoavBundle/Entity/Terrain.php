<?php

namespace WCSCoavBundle\Entity;

/**
 * Terrain
 */
class Terrain
{
    // YAML CODE PERSO

    public function __toString (){

        return $this->name;
    }


    // YAML GENERATED CODE
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $icao;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;


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
     * @return Terrain
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
     * Set icao
     *
     * @param string $icao
     *
     * @return Terrain
     */
    public function setIcao($icao)
    {
        $this->icao = $icao;

        return $this;
    }

    /**
     * Get icao
     *
     * @return string
     */
    public function getIcao()
    {
        return $this->icao;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Terrain
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Terrain
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Terrain
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Terrain
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $departures;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add departure
     *
     * @param \WCSCoavBundle\Entity\Flight $departure
     *
     * @return Terrain
     */
    public function addDeparture(\WCSCoavBundle\Entity\Flight $departure)
    {
        $this->departures[] = $departure;

        return $this;
    }

    /**
     * Remove departure
     *
     * @param \WCSCoavBundle\Entity\Flight $departure
     */
    public function removeDeparture(\WCSCoavBundle\Entity\Flight $departure)
    {
        $this->departures->removeElement($departure);
    }

    /**
     * Get departures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartures()
    {
        return $this->departures;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $flights;


    /**
     * Add flight
     *
     * @param \WCSCoavBundle\Entity\Flight $flight
     *
     * @return Terrain
     */
    public function addFlight(\WCSCoavBundle\Entity\Flight $flight)
    {
        $this->flights[] = $flight;

        return $this;
    }

    /**
     * Remove flight
     *
     * @param \WCSCoavBundle\Entity\Flight $flight
     */
    public function removeFlight(\WCSCoavBundle\Entity\Flight $flight)
    {
        $this->flights->removeElement($flight);
    }

    /**
     * Get flights
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFlights()
    {
        return $this->flights;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $flight;


    /**
     * Get flight
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFlight()
    {
        return $this->flight;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $terrain;


    /**
     * Add terrain
     *
     * @param \WCSCoavBundle\Entity\Flight $terrain
     *
     * @return Terrain
     */
    public function addTerrain(\WCSCoavBundle\Entity\Flight $terrain)
    {
        $this->terrain[] = $terrain;

        return $this;
    }

    /**
     * Remove terrain
     *
     * @param \WCSCoavBundle\Entity\Flight $terrain
     */
    public function removeTerrain(\WCSCoavBundle\Entity\Flight $terrain)
    {
        $this->terrain->removeElement($terrain);
    }

    /**
     * Get terrain
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTerrain()
    {
        return $this->terrain;
    }
}
