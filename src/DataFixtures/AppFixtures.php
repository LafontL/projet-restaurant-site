<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
	public function load(ObjectManager $manager)
    {

        $Categorie = new Categorie();
        $Categorie->setName('Entrée');

        $Categorie = new Categorie();
        $Categorie->setName('Plat Principal');

        $Categorie = new Categorie();
        $Categorie->setName('Dessert');

		$manager->persist($Categorie);
		$manager->flush();
    }
}
