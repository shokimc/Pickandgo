<?php

namespace Pickandgo\AppBundle\Controller;

use Pickandgo\AppBundle\Entity\Buyer;
use Pickandgo\AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="dashboard")
     */
    public function indexAction()
    {
        return $this->render('PickandgoAppBundle:Default:index.html.twig');
    }

    /**
     * @Route("/product", name="dashboard_product")
     */
    public function productAction()
    {
        return $this->render('PickandgoAppBundle:Default:product.html.twig');
    }

    /**
     * @Route("/save", name="save_buyer")
     */
    public function saveBuyerAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $buyer = new Buyer();
        $buyer->setName($request->get('first_name'));
        $buyer->setLastname($request->get('last_name'));
        $buyer->setEmail($request->get('email'));
        $buyer->setCard($request->get('card'));
        $buyer->setDate($request->get('date'));
        $buyer->setCvv($request->get('cvv'));
        $buyer->setCoin($request->get('coin'));

        $em->persist($buyer);
        $em->flush();

        $this->get('session')->getFlashBag()->add(
            'success',
            'Registrado con éxito'
        );

        return $this->redirect($this->generateUrl('dashboard'));
    }

    /**
     * @Route("/save_product", name="save_product")
     */
    public function saveProductAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setName($request->get('name'));
        $product->setPrice($request->get('price'));
        $product->setTag($request->get('tag'));

        $em->persist($product);
        $em->flush();

        $this->get('session')->getFlashBag()->add(
            'success',
            'Registrado producto con éxito'
        );

        return $this->redirect($this->generateUrl('dashboard_product'));
    }
}
