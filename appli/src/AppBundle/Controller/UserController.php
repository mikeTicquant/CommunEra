<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 03/05/2017
 * Time: 11:41
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



/**
 * @Route("/user")
 */
class UserController extends Controller
{

    /**
     * @Route(name="user_index")(
     */
    public function indexAction()
    {
        return $this->render('users/index.html.twig');
    }

    /**
     * @Route("/view")
     */
    public function viewAction()
    {
        return $this->render('users/view.html.twig');
    }





}