<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\gout;

class goutController extends Controller
{

      public function menuAction()
      {
          $em = $this->getDoctrine()->getManager();
          $gouts = $em->getRepository('EcommerceBundle:gout')->findAll();

          return $this->render('EcommerceBundle:Default:gout/modulesUsed/menu.html.twig', array('gouts' => $gouts));
      }



}
