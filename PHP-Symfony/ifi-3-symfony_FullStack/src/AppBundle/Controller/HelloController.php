<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController
{
  /**
   * @Route("/hello/{nom}", defaults={"nom"="Un nom?"})
   */
   public function helloAction(Request $request){
     return new Response(
        htmlspecialchars($request->get('nom'))
     );
   }
}
