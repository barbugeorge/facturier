<?php
 
namespace AppBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
 
/**
 * Partner
 *
 * @ORM\Table(name="partner")
 * @ORM\Entity
 * @UniqueEntity("nume")
 *  
 */ 
class Partner
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
     * @ORM\Column(name="name", type="string")
     * 
     */
    private $name;  

    /**
     * 
     * @ORM\OneToMany(targetEntity="Address", mappedBy="partner")
     * 
     */
    private $addresses;

    
    
private $bank;
private $iban;
private $datUpd;
private $datCre;









}