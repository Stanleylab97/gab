<?php

namespace App\Controller;

use App\Entity\Declaration;
use Symfony\Component\Form\FormBuilder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
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

class Test extends AbstractController
{
    /**
     * @Route("/declaration/create", name="createdeclaration", methods={"GET","POST"})
     */
    public function create(Request $request, EntityManagerInterface $em):Response 
    {

       $form= $this->createFormBuilder()
        ->add('civility',ChoiceType::class,
            [
                'choices'  => [
                    'Homme' => 'H',
                    'Femme' => 'F',
                   
                ],
            ])
        ->add("nom",TextType::class)
        ->add("prenoms",TextType::class)
        ->add("tel",TelType::class)
        ->add("email",EmailType::class)
        ->add("numContrat",TextType::class)
        ->add("numClient",TextType::class)
        ->add("dateSin",DateType::class)
        ->add("heureSin",TimeType::class)
        ->add("agence",ChoiceType::class,[
                'choices'  => [
                    'Siège' => 'Siege',
                    'OKASSUR' => 'OKASSUR',

                   
                ],
            ])
        ->add("typeContrat",ChoiceType::class,[
                'choices'  => [
                    'Automobile' => 'Auto',
                    'AsTrim' => 'Astrim',
                   
                ],
            ])
        ->add("chocked",CheckboxType::class, [
                'label'    => 'Y a t-il des blessés?',
                'required' => true,
            ])
        ->add("circonstances",TextareaType::class)
        ->add("dommages",TextAreaType::class)
        ->add("submit",SubmitType::class,['label'=>'Enregistrer  le sinistre'])
        ->getForm();
        
        $form->handleRequest($request);

        
        if ($request->isMethod('POST')) { 
            $data=$request->request->all();

            if($this->isCsrfTokenValid('pin_create',$data['_token'])){
            $declaration=new Declaration;
            
            $declaration->setCivility($data['civility']);
            $declaration->setNom($data['nom']);
            $declaration->setPrenoms($data['prenoms']);
            $declaration->setTel($data['tel']);
            $declaration->setEmail($data['email']);
            $declaration->setNumContrat($data['numContrat']);
            $declaration->setNumClient($data['numClient']);
            $declaration->setDateSin($data['dateSin']);
            $declaration->setHeureSin($data['heureSin']);
            $declaration->setAgence($data['agence']);
            $declaration->setTypeContrat($data['typeContrat']);
            $declaration->setChocked($data['chocked']);
            $declaration->setCirconstances($data['circonstances']);
            $declaration->setDommages($data['dommages']);
            $declaration->setPhoto('link');
            $em->persist($declaration);
            $em->flush();   

            return $this->redirectToRoute('accueil');
            
        }

        return $this->render('pages/declaration.html.twig', [
            'controller_name' => 'DeclarationController',
            'maDeclaration'=>$form->createView(),
        ]);
    }
}
}