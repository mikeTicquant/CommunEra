<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route()
     */
    public function indexAction()
    {
        return $this->render('booking/index.html.twig');
    }


    /**
     * @Route("/inscription")
     */
    public function signupAction(Request $request)
    {

        $user = new User();
        $user->setRole('ROLE_USER');

        $form = $this->createForm(UserType::class, $user);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'user créé avec succès.');

            return $this->redirectToRoute('app_default_index');
        }

        return $this->render('users/inscription.html.twig', [
            'form' => $form->createView(),
        ]);


    }


}
