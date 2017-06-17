<?php
namespace Pages\PagesBundle\DataFixtures\ORM;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Pages\PagesBundle\Entity\Pages;
class PagesData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $page1 = new Pages();
        $page1->setTitre('Service Client');
        $page1->setContenu('Un conseil ou une question sur votre commande, suivi de colis, problèmes de réception,
 litiges, remboursement ou autre ? Nous sommes là pour vous. Nous vous garantissons le traitement de votre demande dans les plus brefs délais :

Nos équipes vous répondent du lundi au vendredi de 09h00 à 12h30 et de 13h30 à 18h30 au :

+33(0)4 50 09 09 09
(coût d’un appel national depuis un poste fixe)

Vous pouvez également nous écrire par mail à l’adresse suivante :

sav@vinatis.com

  ');
        $manager->persist($page1);

        $page2 = new Pages();
        $page2->setTitre('Transport & Livraison');
        $page2->setContenu('<div class="row">
                <h4>Pour information :</h4>

                <p>Attention ces délais de livraison s appliquent à tous nos produits signalés Livraison 24H. Pour les produits signalés Livraison 10 Jrs, les modalités de livraison s appliquent à compter de ce délai d approvisionnement.

Les délais de livraison courent à partir de la réception de l e-mail confirmant l expédition de votre commande.

La commande est expédiée dès réception du paiement total de la commande et après accord de notre service de vérification (traitement immédiat des commandes). En cas de paiement par chèque ou virement, l envoi sera donc reporté jusqu à la réception du paiement. Vinatis n accepte pas de paiement en plusieurs fois ni de paiement à 30 jours. Les bouteilles sont envoyées par carton approuvé par les sociétés de transport afin d assurer la sécurité de l envoi. Tous nos colis sont remis contre signature.</p>
          ');
        $manager->persist($page2);

        $page3 = new Pages();
        $page3->setTitre('Paiement');
        $page3->setContenu('<div class="row">
                <h4>Paiement<h4>

                <p>Vinatis utilise un système de paiement sécurisé aux normes SSL, le protocole de cryptage le plus sûr et le plus répandu actuellement. Paiement par CB, EuroCard Mastercard, VISA, AMEX, PAYPAL. Paiement également possible par chèque et par virement.

Vos coordonnées bancaires sont directement cryptées et routées vers notre organisme bancaire de paiement, le CIC, sans passer par notre site.
Vinatis ne stocke donc aucune information bancaire.</p>
          ');
        $manager->persist($page3);

        $manager->flush();
    }
}
