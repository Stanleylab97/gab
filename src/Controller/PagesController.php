<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
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
     * @Route("/emploi", name="emploi")
     */
    public function emploi()
    {
        return $this->render('pages/emploi.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    /**
     * @Route("/testimonials", name="testimonials")
     */
    public function testimoniales()
    {
        return $this->render('pages/testimonials.html.twig', [
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
     * @Route("/org_pro", name="org_pro")
     */
    public function org_pro()
    {
        return $this->render('pages/organisation_products.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

      /**
     * @Route("/part_pro", name="part_pro")
     */
    public function part_pro()
    {
        return $this->render('pages/particular_products.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }


    /**
     * @Route("/quiz_rc_sco", name="quiz_rc_sco")
     */
    public function quiz_rc_sco()
    {
        return $this->render('pages/quiz/rc_scolaire.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

        /**
     * @Route("/quiz_sante", name="quiz_sante")
     */
    public function quiz_sante()
    {
        return $this->render('pages/quiz/sante.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

      /**
     * @Route("/quiz_transport", name="quiz_transport")
     */
    public function quiz_transport()
    {
        return $this->render('pages/quiz/transport.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

       /**
     * @Route("/quiz_rcet", name="quiz_rcet")
     */
    public function quiz_rcet()
    {
        return $this->render('pages/quiz/rcet.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

  /**
     * @Route("/quiz_auto", name="quiz_auto")
     */
    public function quiz_auto()
    {
        return $this->render('pages/quiz/automobile.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

     /**
     * @Route("/quiz_ia", name="quiz_ia")
     */
    public function quiz_ia()
    {
        return $this->render('pages/quiz/ind_accident.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

      /**
     * @Route("/quiz_astrim", name="quiz_astrim")
     */
    public function quiz_astrim()
    {
        return $this->render('pages/quiz/astrim.html.twig', [
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
     * @Route("/test", name="test")
     */
    public function test()
    {
        return $this->render('test.html.twig', [
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
