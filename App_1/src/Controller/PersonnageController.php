<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('personnage/index.html.twig');
    }
    /**
     * @Route("/persos", name="personnages")
     */
    public function persos()
    {
        $j1 = [
            "pseudo" => "Marc",
            "age"    => 25,
            "sexe"   => true,
            "carac" => [
                "force" => 3,
                "agi"   => 2,
                "intelligence" => 3
        ]
            ];

        $j2 = [
            "pseudo" => "Milo",
            "age"    => 30,
            "sexe"   => true,
            "carac" => [
                "force" => 5,
                "agi"   => 1,
                "intelligence" => 2
        ]
            ];

        $j3 = [
            "pseudo" => "Tya",
            "age"    => 22,
            "sexe"   => false,
            "carac" => [
                "force" => 1,
                "agi"   => 2,
                "intelligence" => 5
        ]
            ];
        $players = [
            "j1" => $j1,
            "j2" => $j2,
            "j3" => $j3
        ];
        return $this->render('personnage/persos.html.twig', [
            "players" => $players
        ]);
    }
}