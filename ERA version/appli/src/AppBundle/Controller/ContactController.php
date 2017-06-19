<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 03/05/2017
 * Time: 11:42
 */

namespace AppBundle\Controller;


use AppBundle\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/contact")
 */

class ContactController extends Controller
{
    /**
     * @Route()
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(ContactType::class);
        if ($form->handleRequest($request)->isValid()) {

            $contact = $form->getData();

            $this->get('app.contact.contact_mailer')->send($contact);
            $this->addFlash('success', 'Message envoyé avec succès !');

            return $this->redirectToRoute('app_contact_index');
        }

        return $this->render('contact/address.html.twig', [
            'contactForm' => $form->createView(),
        ]);


    }
}