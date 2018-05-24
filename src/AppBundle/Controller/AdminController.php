<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use AppBundle\Entity\Users;

class AdminController extends Controller
{
    public function _construct()
    {
        echo "Constructed";
    }
    /**
     * @Route("/admin", name="admin-home-page")
     */
    public function indexAction(Request $request)
    {
        $session = $this->get('session');

        if(!empty($session->get('name'))) {
            $creditential['name'] = $session->get('name');
            $creditential['email'] = $session->get('email');
            // Render index page
            return $this->render('admin/index.html.twig',
                          array('creditential' => $creditential));
        } else {
            return $this->redirectToRoute('admin-login-page');
        }
    }

    /**
     * @Route("/admin/login", name="admin-login-page")
     */
    public function loginAction(Request $request)
    {
        $session = $this->get('session');
        //var_dump($session->get('name'));

        // GET _POST variable
        $creditential = $request->request->all();
        //$creditential['email'] = $request->request->get('email');
        //$creditential['password'] = $request->request->get('password');

        if($creditential) {
            //var_dump($creditential);
            $this->validateLogin($creditential);
        }

        // If already Logged In
        if(!empty($session->get('name'))) {
            return $this->redirectToRoute('admin-home-page');
        }

        //var_dump($_POST);
        return $this->render('admin/login.html.twig');
    }

    private function validateLogin($creditential)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:Users')
            ->findUsersByEmail($creditential['email']);

        //var_dump($user);
        //var_dump($creditential);

        // Error Validation
        $error = 0;
        empty($user) ? $error++ : '' ; // If no user is found
        $creditential['password'] != $user[0]['password'] ? $error++ : '' ; // If the password supplied is wrong
        $user[0]['role'] != 1 ? $error++ : '' ; // If not admin
        //var_dump($error);

        if($error == 0) {
            // Insert Creditential into Session
            //$_SESSION['email'] = $user[0]['email'];
            //$_SESSION['name'] = $user[0]['name'];
            $session = $this->get('session');
            $session->set('name', $user[0]['name']);
            $session->set('email', $user[0]['email']);
            //var_dump($session->get('name'));
            // Redirect Page
        } else {
            // Show Error Message
        }
    }
}
