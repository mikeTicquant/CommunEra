<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 03/05/2017
 * Time: 11:46
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Services;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * @Route("/services")
 */

class ServicesController extends Controller
{

    /**
     * @Route(name="services_index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository(Services::class);

        $services = $repository->findBy([], ['id' => 'ASC']);

        return $this->render('services/index.html.twig', array('services' => $services));
    }

    /**
     * @Route("/{id}")
     */
    public function viewAction()
    {

        return $this->render('services/view.html.twig', array());
    }

}