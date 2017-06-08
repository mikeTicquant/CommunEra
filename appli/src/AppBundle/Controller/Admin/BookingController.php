<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 08/05/2017
 * Time: 03:11
 */

namespace AppBundle\Controller\Admin;


use AppBundle\Entity\Booking;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin/booking")
 */
class BookingController extends Controller
{

    /**
     * @Route()
     */
    public function indexAction()

    {
        $em = $this->getDoctrine()->getManager();
        $booking = $em->getRepository(Booking::class)->findBy(
            [],
            ['id' => 'ASC'] // DESC
        );

        return $this->render("admin/booking/index.html.twig",[
            'bookings' => $booking,
        ]);

    }


    /**
     * @Route("/add")
     */
    public function createAction(Request $request)
    {
        $form = $this->createForm(SitterType::class, $sitter = new Sitter());
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sitter);
            $em->flush();

            $this->addFlash('success', 'Sitter créée avec succès.');

            return $this->redirectToRoute('app_admin_sitter_index');
        }

        return $this->render("admin/sitter/create.html.twig", [
            'form' => $form->createView(),
        ]);
    }







    /**
     * @Route("/{id}", requirements={"id":"\d+"})
     */
    public function updateAction(Request $request, Sitter $sitter)
    {
        $form = $this->createForm(SitterType::class, $sitter);
        if ($form->handleRequest($request)->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Sitter modifié avec succès.');

            return $this->redirectToRoute('app_admin_sitter_index');
        }

        return $this->render('admin/sitter/update.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}/supprimer", requirements={"id":"\d+"})
     */
    public function deleteAction(Request $request, SitterType $siter)
    {
        $token = $request->query->get('_token');
        if (!$this->isCsrfTokenValid('SITTER_DELETE', $token)) {
            throw $this->createAccessDeniedException();
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($siter);
        $em->flush();

        $this->addFlash('success', 'Sitter supprimée avec succès.');

        return $this->redirectToRoute('app_admin_sitter_index');
    }





}