<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 03/05/2017
 * Time: 11:43
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Booking;
use AppBundle\Form\BookingType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/booking")
 */
class BookingController extends Controller
{

    /**
     * @Route("/step_1")
     */
    public function step1Action(Request $request)
    {
        $id = $request->query->get('ids');
        $cp = $request->query->get('cp');

        $form = $this->createForm(BookingType::class, $booking = new Booking());
        if($form->handleRequest($request)->isValid()) {



            $em = $this->getDoctrine()->getManager();
            $em->persist($booking);
            $em->flush();

            $this->addFlash('success', 'votre réservation a été effectée avec succès');

            return $this->redirectToRoute('app_booking_step2');
            //return $this->redirectToRoute('app_booking_step2',['id' => $booking.$this->get()]);

        }

        
        return $this->render('booking/step_1.html.twig', [
            'form' => $form->createView(),
            'cp'   => $cp
        ]);
    }

    /**
     * @Route("/step_2")
     */
    public function step2Action()
    {
        return $this->render('booking/step_2.html.twig');
    }





}