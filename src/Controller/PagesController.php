<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

     /**
     * @Route("devis", name="devis")
     */
    public function devis()
    {
        return $this->render('pages/devis.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    /**
     * @Route("/reseau", name="reseau")
     */
    public function reseau()
    {
        return $this->render('pages/reseau.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

     /**
     * @Route("/offres", name="offres")
     */
    public function offres()
    {
        return $this->render('pages/offres.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    /**
     * @Route("/stageac", name="stageac")
     */
    public function stageac()
    {
        return $this->render('pages/stageac.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

     /**
     * @Route("/stagepro", name="stagepro")
     */
    public function stagepro()
    {
        return $this->render('pages/stageac.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    /**
     * @Route("/emploi", name="emploi")
     */
    public function emploi()
    {
        return $this->render('pages/stages.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
      /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('pages/contact.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }


      /**
     * @Route("/products", name="products")
     */
    public function produits()
    {
        return $this->render('pages/products.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    /**
     * @Route("/organisation", name="organisation")
     */
    public function organisation()
    {
        return $this->render('pages/organisation.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    /**
     * @Route("/historique", name="historique")
     */
    public function historique()
    {
        return $this->render('pages/historique.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
}
