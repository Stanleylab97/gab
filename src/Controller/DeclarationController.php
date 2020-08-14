<?php

namespace App\Controller;

use App\Entity\Declaration;
use Symfony\Component\Form\FormBuilder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use \DateTime;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\Time;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DeclarationController extends AbstractController
{
    /**
     * @Route("/declaration/create", name="createdeclaration", methods={"GET","POST"})
     */
    public function create(Request $request, EntityManagerInterface $em, \Swift_Mailer $mailer):Response 
    {

       
        if ($request->isMethod('POST')) { 
            $data=$request->request->all();

            if($this->isCsrfTokenValid('declaration_create',$data['_token'])){
            $declaration=new Declaration;
            
            $declaration->setCivility($data['civility']);
            $declaration->setNom($data['nom']);
            $declaration->setPrenoms($data['prenoms']);
            $declaration->setTel($data['tel']);
            $declaration->setEmail($data['email']);
            $declaration->setNumContrat($data['numContrat']);
            $declaration->setNumClient($data['numClient']);
            $declaration->setDateSin(new \DateTime($data['dateSin']));
            $declaration->setHeureSin(\DateTime::createFromFormat('H:i',$data['heureSin']));
            $declaration->setAgence($data['agence']);
            $declaration->setTypeContrat($data['typeContrat']);
            $declaration->setChocked($data['chocked']);
            $declaration->setCirconstances($data['circonstances']);
            $declaration->setDommages($data['dommages']);
            $declaration->setPhoto('link');
            $em->persist($declaration);
            $em->flush();   

            $message=(new \Swift_Message('Nouvelle déclaration de sinistre'))
                    ->setFrom($data['email'])
                    ->setTo('stanislasazanmassou@gmail.com')
                    ->setBody(
                        $this->renderView(
                            'emails/declaration.html.twig',
                            compact('data')
                        ),
                        'text/html'
                    )
            ;

            $mailer->send($message);

            $this->addFlash('success', 'Votre déclaration a été enregistrée!');

            return $this->redirectToRoute('accueil');
            }
        }

        return $this->render('pages/declaration.html.twig', [
            'controller_name' => 'DeclarationController',
        ]);
    }
}