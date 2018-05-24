<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Product;

class ProductController extends Controller
{
    /**
     * @Route("/product/{id}", name="product-detail")
     */
    public function productDetail($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AppBundle:Product')
            ->findProductById($id);

        //var_dump($product);
        $itineraries = $product->getItinerary();
        //var_dump($itinerary);

        // Processing itinerary
        $itineraryArray = array();
        foreach ($itineraries as $itinerary) {
            $day = $itinerary->getDay();
            $activity = explode(", ", $itinerary->getActivity());

            $itinerariesArray[$day]['location'] = $itinerary->getLocation();
            $itinerariesArray[$day]['activity'] = $activity;
            $itinerariesArray[$day]['meal'] = $itinerary->getMeal();
        }
        ksort($itinerariesArray);

        return $this->render('default/product.html.twig',
            array('product' => $product,
                  'itineraries' => $itineraries,
                  'itinerariesArray' => $itinerariesArray));
    }
}
