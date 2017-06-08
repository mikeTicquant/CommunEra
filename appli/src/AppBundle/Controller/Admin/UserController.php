<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 08/05/2017
 * Time: 00:10
 */

namespace AppBundle\Controller\Admin;


use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * @Route("/admin/user")
 */

class UserController extends Controller
{
    /**
     * @Route()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository(User::class)->findBy(
            [],
            ['id' => 'ASC'] // DESC
        );

        return $this->render("admin/user/index.html.twig",[
                'users' => $users,
        ]);
    }


    /**
     * @Route("/add")
     */
    public function createAction(Request $request)
    {
        $form = $this->createForm(UserType::class, $user = new User());
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Utilisateur créée avec succès.');

            return $this->redirectToRoute('app_admin_user_index');
        }

        return $this->render("admin/user/create.html.twig", [
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/{id}", requirements={"id":"\d+"})
     */
    public function updateAction(Request $request, User $user)
    {
        $form = $this->createForm(UserType::class, $user);
        if ($form->handleRequest($request)->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Utilisateur modifié avec succès.');

            return $this->redirectToRoute('app_admin_user_index');
        }

        return $this->render('admin/user/update.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}/supprimer", requirements={"id":"\d+"})
     */
    public function deleteAction(Request $request, User $user)
    {
        $token = $request->query->get('_token');
        if (!$this->isCsrfTokenValid('USER_DELETE', $token)) {
            throw $this->createAccessDeniedException();
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        $this->addFlash('success', 'Utilisateur supprimée avec succès.');

        return $this->redirectToRoute('app_admin_user_index');
    }




}