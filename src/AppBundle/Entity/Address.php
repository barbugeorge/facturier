<?php
 
namespace AppBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
 
/**
 * Partner
 *
 * @ORM\Table(name="address")
 * @ORM\Entity
 * @UniqueEntity("nume")
 *  
 */ 
class Address
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    private $id; 
    
    /**
     * @var string
     *
     * @ORM\Column(name="nume", type="string")
     * 
     */
    private $alias;
    
    
private $street;
private $no;
private $city;
private $country;
private $phone;
private $email;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Partner", inversedBy="address")
     * 
     */
    private $partner;


private $datUpd;
private $datCre;









}