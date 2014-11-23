<?php
/**
 * Created by PhpStorm.
 * User: luismi
 * Date: 22/11/14
 * Time: 11:24
 */

namespace Pickandgo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;

/**
 * @ORM\Entity()
 * @ORM\Table(name="buyer")
 * @DoctrineAssert\UniqueEntity("id")
 */
class Buyer
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="name", type="string", length=50)
     */
    protected $name;

    /**
     * @ORM\Column(name="lastname", type="string", length=50)
     */
    protected $lastname;

    /**
     * @ORM\Column(name="email", type="string", length=50)
     */
    protected $email;

    /**
     * @ORM\Column(name="card", type="string", length=20)
     */
    protected $card;

    /**
     * @ORM\Column(name="date", type="string", length=20)
     */
    protected $date;

    /**
     * @ORM\Column(name="cvv", type="string", length=20)
     */
    protected $cvv;

    /**
     * @ORM\Column(name="coin", type="string", length=20)
     */
    protected $coin;

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
     * @return Buyer
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
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Buyer
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
     * Set card
     *
     * @param string $card
     *
     * @return Buyer
     */
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get card
     *
     * @return string
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set cvv
     *
     * @param string $cvv
     *
     * @return Buyer
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get cvv
     *
     * @return string
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set coin
     *
     * @param string $coin
     *
     * @return Buyer
     */
    public function setCoin($coin)
    {
        $this->coin = $coin;

        return $this;
    }

    /**
     * Get coin
     *
     * @return string
     */
    public function getCoin()
    {
        return $this->coin;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Buyer
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Buyer
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
}
