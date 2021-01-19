<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Plat;
use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PlatController extends AbstractController
{
    /**
     * @Route("/plat", name="plat")
     */
    public function plat(Request $request)
    {

    	// Création de mes catégories de plat
    	$cat1 = new Categorie();
    	$cat1->setName('Entrée');

    	$cat2 = new Categorie();
    	$cat2->setName('Plat Principal');

    	$cat3 = new Categorie();
    	$cat3->setName('Dessert');


    	// Création de mes plats
    	$plat1 = new plat();

		$plat1->setName('Salade César');
		$plat1->setDescription('Une bonne salade');
		$plat1->setPrix('6.50');
		$plat1->setCategorie($cat1);

		$plat2 = new plat();

		$plat2->setName('Boeuf Bourguignon');
		$plat2->setDescription('Carottes, patates, boeuf et enfin beaucoup de vin');
		$plat2->setPrix('13');
		$plat2->setCategorie($cat2);

		$plat3 = new plat();

		$plat3->setName('Crème glacé');
		$plat3->setDescription('Un mélange de vanille et de pistache');
		$plat3->setPrix('7');
		$plat3->setCategorie($cat3);

		// On envoie tout ça dans la base de donnée
		$em = $this->getDoctrine()->getManager();

		$em->persist($plat1);
		$em->persist($plat2);
		$em->persist($plat3);

		$em->flush();

		return new Response('Plat créer avec id :'.$plat->getId());
	}

		public function showPlat(Request $request)
		{
			$plat1 = $this->getDoctrine()->getRepository(AppBundle::Plat)->findAll();

			$plat2 = $this->getDoctrine()->getRepository(AppBundle::Plat)->findAll();

        return $this->render('plat/index.html.twig', [
            'controller_name' => 'PlatController',
            'plats' => '$PlatRepository',
            'categorie' => '$CategorieRepository'
        ]);
	}
}
