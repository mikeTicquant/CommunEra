<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 06/06/2017
 * Time: 14:52
 */

namespace AppBundle\Controller\User;


use AppBundle\Entity\Role;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/users")
 */
class UserController extends Controller
{

    /**
     * @Route("/user")
     */
   public function signupAction(Request $request)
   {

       $user = new User();

       $form = $this->createForm(UserType::class, $user);
       if ($form->handleRequest($request)->isValid()) {

           $this->addFlash('success', 'Message envoyé !');

           return $this->redirectToRoute('app_default_index');
       }

       return $this->render('user/signup.html.twig', [
           'userform' => $form->createView(),
       ]);

   }


}