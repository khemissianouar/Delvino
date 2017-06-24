<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Form\RechercheType;
use Ecommerce\EcommerceBundle\Entity\type;

class ProduitsController extends Controller
{
  public function produitsAction(Type $type = null)
  {
    $session = $this->getRequest()->getSession();
  $em = $this->getDoctrine()->getManager();

  if ($type != null)
      $findProduits = $em->getRepository('EcommerceBundle:Produits')->bytype($type);
  else
      $findProduits = $em->getRepository('EcommerceBundle:Produits')->findBy(array('disponible' => 1));

  if ($session->has('panier'))
      $panier = $session->get('panier');
  else
      $panier = false;

  $produits = $this->get('knp_paginator')->paginate($findProduits,$this->get('request')->query->get('page', 1),3);

  return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits,
                                                                                           'panier' => $panier));
}
  public function typeAction($type)
 {
     $em = $this->getDoctrine()->getManager();
     $produits = $em->getRepository('EcommerceBundle:Produits')->bytype($type);

     return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits));
 }
 public function regionAction($region)
{
    $em = $this->getDoctrine()->getManager();
    $produits = $em->getRepository('EcommerceBundle:Produits')->byregion($region);

    return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits));
}
public function alcoolAction($alcool)
{
   $em = $this->getDoctrine()->getManager();
   $produits = $em->getRepository('EcommerceBundle:Produits')->byalcool($alcool);

   return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits));
}
public function goutAction($gout)
{
   $em = $this->getDoctrine()->getManager();
   $produits = $em->getRepository('EcommerceBundle:Produits')->bygout($gout);

   return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits));
}
public function couleurAction($couleur)
{
   $em = $this->getDoctrine()->getManager();
   $produits = $em->getRepository('EcommerceBundle:Produits')->bycouleur($couleur);

   return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits));
}


/*  public function pageAction($id)
  {
      $em = $this->getDoctrine()->getManager();
      $page = $em->getRepository('ProduitsBundle:Pages')->find($id);

      if (!$page) throw $this->createNotFoundException('La page n\'existe pas.');

      return $this->render('ProduitsBundle:Default:pages/layout/produits.html.twig', array('produit' => $produit));
  }*/



      public function presentationAction($id)
      {
          $session = $this->getRequest()->getSession();
          $em = $this->getDoctrine()->getManager();
          $produit = $em->getRepository('EcommerceBundle:Produits')->find($id);

          if (!$produit) throw $this->createNotFoundException('La page n\'existe pas.');

          if ($session->has('panier'))
              $panier = $session->get('panier');
          else
              $panier = false;

          return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig', array('produit' => $produit,
                                                                                                       'panier' => $panier));
      }public function rechercheAction()
    {
        $form = $this->createForm(new RechercheType());
        return $this->render('EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig', array('form' => $form->createView()));
    }

    public function rechercheTraitementAction()
    {
        $form = $this->createForm(new RechercheType());

        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            $produits = $em->getRepository('EcommerceBundle:Produits')->recherche($form['recherche']->getData());
        } else {
            throw $this->createNotFoundException('La page n\'existe pas.');
        }

        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits));
    }
}
