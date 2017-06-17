<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\region;

class RegionController extends Controller
{

      public function menuAction()
      {
          $em = $this->getDoctrine()->getManager();
          $regions = $em->getRepository('EcommerceBundle:region')->findAll();

          return $this->render('EcommerceBundle:Default:region/modulesUsed/menu.html.twig', array('regions' => $regions));
      }



}
