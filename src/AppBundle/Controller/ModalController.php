<?php


namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ModalController extends Controller
{
    /**
     * @Route("/", name="modal_login")
     */
    public function loginAction()
    {
        return $this->render('modal/login.html.twig');
    }

    /**
     * @Route("/reset", name="modal_reset")
     */
    public function resetAction()
    {
        return $this->render('modal/reset.html.twig');
    }

    /**
     * @Route("/register", name="modal_register")
     */
    public function registerAction()
    {
        return $this->render('modal/register.html.twig');
    }
}