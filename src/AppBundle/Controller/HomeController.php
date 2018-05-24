<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use AppBundle\Entity\Product;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')
            ->findProductByLimit(6);

        return $this->render('default/index.html.twig',
            array('products' => $products)
            );
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logOut()
    {
        $session = $this->get('session');
        $session->clear();

        return $this->redirectToRoute('homepage');
    }
}
