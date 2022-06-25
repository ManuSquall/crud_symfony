<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Role;
use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends AbstractController
{

    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('login/index.html.twig');
    }

    #[Route('/accueil', name: 'app_accueil_index')]
    public function accueil(): Response
    {
        return $this->render('accueil.html.twig');
    }


    #[Route('/logins', name: 'app_login')]
    public function login(ManagerRegistry $doctrine): Response
    {
        // $em = $doctrine->getManager();

        // $u = new User();

        // $form = $this->createForm(LoginType::class,$u, array('action'=>$this->generateUrl('login_new')));

        // $data['form'] = $form->createView();

        // return $this->render('login/index.html.twig',$data);
        return $this->redirectToRoute('app_accueil_index');
    }

    // #[Route('/logins/new', name: 'logins_new')]
    // public function add(Request $request,ManagerRegistry $doctrine): Response
    // {
    //     $u = new User();

    //     $em = $doctrine->getManager();

    //     $form = $this->createForm(LoginType::class,$u);

    //     $form->handleRequest($request);

    //     if($form->isSubmitted() && $form->isValid())
    //     {
    //         $u = $form->getData();
            
    //         $e = $em->getRepository(User::class)->findOneBy(['email'=>$u->getEmail()]);
            
    //         if($u->getEmail() == $e->getEmail() && $u->getPassword() == $e->getPassword())
    //         {
                
    //             return $this->redirectToRoute('app_accueil_index');
    //         }
    //         else
    //         {
    //             return $this->redirectToRoute('logins_error');
    //         }
           
    //     }
        
    // }

    // #[Route('/logins/error', name: 'logins_error')]
    // public function error(): Response
    // {
    //     return $this->render('logins/error.html.twig');
    // }
}
