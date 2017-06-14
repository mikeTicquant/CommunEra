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
use AppBundle\Form\UserDetailsType;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/user")
 */
class UserController extends Controller
{


    /**
     * @Route()
     */
    public function indexAction()
    {
        return $this->render('user/index.html.twig');

    }


    /**
     * @Route("/add")
     */
   public function signupAction(Request $request)
   {

       $user = new User();


       $form = $this->createForm(UserType::class, $user);
       if ($form->handleRequest($request)->isValid()) {

           // On encode le mot de passe de l'utilisateur
           if (null !== $rawPassword = $user->getRawPassword()) {
               $passwordEncoder = $this->get('security.password_encoder');
               $encodedPassword = $passwordEncoder->encodePassword($user, $rawPassword);
               $user->setPassword($encodedPassword);
           }

           $user->setCreatedAt(new \DateTime());
           $user->setUpdateAt(new \DateTime());

           // On enregistre l'utilisateur en base de données
           $em = $this->getDoctrine()->getManager();
           $em->persist($user);
           $em->flush();

           $this->addFlash('success', 'Inscription effectuée avec succes !');
           return $this->redirectToRoute('app_user_default_index');
       }

       //return $this->render('user/signup.html.twig', [
       return $this->render('default/register.html.twig', [
           'userform' => $form->createView(),
       ]);

   }

}