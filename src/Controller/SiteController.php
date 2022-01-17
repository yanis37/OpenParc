<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/site", name="site")
     */
    public function index(): Response
    {
        return $this->render('site/index.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('site/home.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/boutique", name="boutique")
     */
    public function boutique(): Response
    {
        return $this->render('site/boutique.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/joueurs", name="joueurs")
     */
    public function players(): Response
    {
        return $this->render('site/players.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/informations", name="infos")
     */
    public function info(): Response
    {
        return $this->render('site/info.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('site/contact.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/associations", name="asso")
     */
    public function asso(): Response
    {
        return $this->render('site/asso.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

}
