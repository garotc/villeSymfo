<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VilleController extends AbstractController
{
    /**
     * @Route("/", name="page_accueil")
     */
    public function index(): Response //index peut être renommé
    {
        return $this->render('ville/accueil.html.twig'); //render affiche la page recherchée, il n'y a pas besoin de préciser le template/ avant le chemin
    }

        /**
     * @Route("/villes", name="page_villes")
     */
    public function villes(): Response
    {
        $villes = ["Tokyo", "Londres", "Paris"] ;
        return $this->render('ville/villes.html.twig', ["villes"=>$villes]); //["clef"=>$varquonveutmettre]
    }

        /**
     * @Route("/contact", name="page_contact")
     */
    public function contact(): Response //index peut être renommé
    {
        return $this->render('ville/contact.html.twig'); //render affiche la page recherchée, il n'y a pas besoin de préciser le template/ avant le chemin
    }
}
