<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 03/05/2017
 * Time: 11:41
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Sitter;
use AppBundle\Form\SitterType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/sitter")
 */
class SitterController extends Controller
{
    /**
     * @Route()
     */
    public function indexAction(Request $request)
    {
        /*
        $sitter = new Sitter();
        $sitter->setRole('ROLE_USER');
        */

        $form = $this->createForm(SitterType::class, $sitter = new Sitter());
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sitter);
            $em->flush();

            $this->addFlash('success', 'Sitter créé avec succès.');

            return $this->redirectToRoute('app_sitter_index');
        }

        return $this->render('sitter/index.html.twig', [
            'sitterForm' => $form->createView(),
        ]);

    }

    /**
     * @Route("/list")
     */

    public function viewAction(Request $request)
    {
        $cp = $request->query->get('postcode');



        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(Sitter::class);

        $listSitter = $repository->findBy(
            ['cp' => $cp],
            [],
            6,
            0
        );

        return $this->render("sitter/view.html.twig",[
            'cp' => $cp,
            'sitters' => $listSitter
        ]);

    }
}
