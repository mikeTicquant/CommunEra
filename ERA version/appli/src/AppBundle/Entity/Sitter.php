<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sitter
 *
 * @ORM\Table(name="sitter")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SitterRepository")
 *  @UniqueEntity(fields={"email"}, errorPath="email")
 */
class Sitter
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(length=255)
     * @Assert\NotNull()
     * @Assert\Type("string")
     */
    private $firstname;

    /**
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Assert\Length(min=2, max=255)
     * @ORM\Column()
     */
    private $lastname;

    /**
     * @Assert\NotNull()
     * @Assert\Type("integer")
     * @Assert\Length(min=5, max=5)
     * @ORM\Column(type="integer")
     */
    private $cp;

    /**
     * @ORM\Column(nullable=true)
     */
    private $birthdate;

    /**
     * @ORM\Column(nullable=true)
     * @Assert\Date()
     */
    private $adresse;


    /**
     * @ORM\Column(nullable=true)
     * @Assert\Type("string")
     * @Assert\Length(min=2, max=50)
     */
    private $ville;

    /**
     * @Assert\NotNull
     * @Assert\Email()
     * @ORM\Column(unique=true)
     */
    private $email;

    /**
     * @ORM\Column(name="tel", type="string")
     * @Assert\NotNull()
     * @Assert\Length(max=10)
     */
    private $tel;

    /**
     * @Assert\Image()
     * @ORM\Column(nullable=true, length=1000)
     */
    private $photo;

    /**
     * @ORM\Column(nullable=true, type="integer")
     * @Assert\Type("integer")
     */
    private $dispo = 1;

    /**
     * @ORM\Column(nullable=false, type="string")
     * @Assert\Type("string")
     * @Assert\NotNull()
     */
    private $password;

    /**
     * @ORM\Column(nullable=true, type="integer")
     * @Assert\Type("integer")
     * @Assert\Length(min=1 ,max=2)
     */
    private $mission = 0;

    /**
     * @ORM\Column(nullable=false, type="string")
     * @Assert\Type("string")
     * @Assert\Length(min=4, max=500)
     */
    private $description;

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
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * @param mixed $mission
     */
    public function setMission($mission)
    {
        $this->mission = $mission;
    }





    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
     * Set firstname
     *
     * @param string $firstname
     * @return Sitter
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Sitter
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set birthdate
     *
     * @param string $birthdate
     * @return Sitter
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return string 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Sitter
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Sitter
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Sitter
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Sitter
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Sitter
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
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Set dispo
     *
     * @param boolean $dispo
     * @return Sitter
     */
    public function setDispo($dispo)
    {
        $this->dispo = $dispo;

        return $this;
    }

    /**
     * Get dispo
     *
     * @return boolean 
     */
    public function getDispo()
    {
        return $this->dispo;
    }
}
