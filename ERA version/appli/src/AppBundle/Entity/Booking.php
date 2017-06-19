<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Booking
 *
 * @ORM\Table(name="booking")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BookingRepository")
 */
class Booking
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(nullable=true, type="string")
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $user_nom;

    /**
     * @ORM\Column(unique=true)
     * @Assert\NotNull()
     * @Assert\Email()
     */
    private $email;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Sitter")
     * @ORM\JoinColumn(nullable=true)
     */
    private $sitter;


    /**
     * @ORM\Column(type="string")
     * @Assert\Type("string")
     * @Assert\Length(min=5, max=255)
     * @Assert\NotNull()
     */
    private $adresse;


    /**
     * @ORM\Column(name="date_booking", type="datetime")
     */
    private $dateBooking;

    /**
     * @Assert\Type("integer")
     * @Assert\NotNull()
     * @ORM\Column(type="integer")
     * @Assert\Length(min=1, max=2)
     */
    private $duree;

    /**
     * @ORM\Column(name="date_arrived", type="date")
     * @Assert\Type("datetime")
     */
    private $dateArrived;

    /**
     * @ORM\Column(nullable=true, type="integer")
     * @Assert\Type("integer")
     * @Assert\Length(min=5, max=5)
     */
    private $cp;

    /**
     * @ORM\Column(type="string",nullable=true)
     * @Assert\Type("string")
     */
    private $ville;


    public function __construct()
    {
        $this->setDateBooking(new \DateTime());
    }

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
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


    /**
     * Set dateBooking
     *
     * @param string $dateBooking
     * @return Booking
     */
    public function setDateBooking($dateBooking)
    {
        $this->dateBooking = $dateBooking;

        return $this;
    }

    /**
     * Get dateBooking
     *
     * @return string 
     */
    public function getDateBooking()
    {
        return $this->dateBooking;
    }

    /**
     * Set dateDepart
     *
     * @param string $dateDepart
     * @return Booking
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return string 
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateArrivedS
     *
     * @param string $dateArrived
     * @return Booking
     */
    public function setDateArrived($dateArrived)
    {
        $this->dateArrived = $dateArrived;

        return $this;
    }

    /**
     * Get dateArrived
     *
     * @return string 
     */
    public function getDateArrived()
    {
        return $this->dateArrived;
    }

    /**
     * @return mixed
     */
    public function getUserNom()
    {
        return $this->user_nom;
    }

    /**
     * @param mixed $user_nom
     */
    public function setUserNom($user_nom)
    {
        $this->user_nom = $user_nom;
    }

    /**
     * @return mixed
     */
    public function getSitter()
    {
        return $this->sitter;
    }

    /**
     * @param mixed $sitter
     */
    public function setSitter($sitter)
    {
        $this->sitter = $sitter;
    }



    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }



    /**
     * @return mixed
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param mixed $duree
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    /**
     * @return mixed
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param mixed $hour
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

}
