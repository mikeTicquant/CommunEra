<?php
/**
 * Created by PhpStorm.
 * User: Rabi
 * Date: 08/05/2017
 * Time: 00:32
 */

namespace AppBundle\Controller\User;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("compte_user/booking")
 */
class BookingController extends Controller
{
    /**
     * @Route()
     */
    public function indexAction()
    {
        $this->render("user/booking/index.html");
    }
}