<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 07/05/2017
 * Time: 23:07
 */

namespace AppBundle\Controller\Admin;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin")
 */
class DefaultController extends Controller
{
    /**
     * @Route()
     */
    public function indexAction()
    {
        return $this->render("admin/default/index.html.twig");
    }
}