<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 08/05/2017
 * Time: 00:26
 */

namespace AppBundle\Controller\User;


use AppBundle\Entity\User;
use AppBundle\Entity\UserPasswordType;
use AppBundle\Form\UserDetailsType;
use AppBundle\Form\UserPhotoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/compte-user")
 */
class DefaultController extends Controller
{

    /**
     * @Route()
     */
    public function indexAction(Request $request)
    {
        /**
         * @var User $user
         */
        $user = $this->getUser();

        $formPhoto = $this->createForm(UserPhotoType::class, $user);
        if ($formPhoto->handleRequest($request)->isValid()) {
            $user
                ->setPhoto($this->get('')->upload($user->getPhoto(), $user->getPhoto()))
                ->setPhoto(null);

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_user_default_index');
        }

        $formDetails = $this->createForm(UserDetailsType::class, $user);
        if ($formPhoto->handleRequest($request)->isValid()) {
            return $this->redirectToRoute('app_user_default_index');
        }

        $formPassword = $this->createForm(UserPasswordType::class, $user);
        if ($formPhoto->handleRequest($request)->isValid()) {
            return $this->redirectToRoute('app_user_default_index');
        }


        return $this->render('user/default/view.html.twig', [
            'formPhoto'   => $formPhoto->createView(),
            'formDetails'  => $formDetails->createView(),
            'formPassword' => $formPassword->createView(),
        ]);


    }


}