<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GlobalController extends Controller
{

    
    /**
     * @Route("/welcome/year", name="global_welcome_year")
     * 
     */
    public function welcomeYearAction()
    {
       
        $date = date("Y");
 
        $res = new Response(
            '<html><body>Anul curent: '.$date.'</body></html>'
        );
        
        return $res;
    }    
    
    /**
     * @Route("/welcome/date", name="global_welcome_date")
     * 
     */
    public function welcomeDateAction()
    {
       
        $date = date("D, M, Y");

         
        return $this->render(
            'Global/welcomedate.html.twig',
            array('fulldate' => $date)
        );

    }    
    
    /**
     * @Route("/welcome/array", name="global_array")
     * 
     */
    public function resAction()
    {
        $data = array();
        $numar1 = 10;
        $numar2 = 20;
         for($i = 1; $i <= $numar1; $i++) {
             for($j = 1; $j <= $numar1; $j++) { 
                 $res[$i][]='c'.$i.$j;
             }
         }
        
         $this->addFlash(
            'notice',
            'Sunt afisat numai in raspunul acesta!'
        ); 
         
        return $this->render(
            'Global/array.html.twig',
            array('res' => $res)
        );

    }    
    
    
    public function routingParametersAction($page, $p2)
    { 
        
        $res = new Response(
            '<html><body><p>Param1: '.$page.'</p><p>Param2: '.$p2.'</p></body></html>'
        );
        return $res;;
    }
   
}
