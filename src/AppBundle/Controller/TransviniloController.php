<?php
/**
 * Created by PhpStorm.
 * User: erethilclaw
 * Date: 19/09/18
 * Time: 10:49
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Camiseta;
use AppBundle\Entity\Carrito;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TransviniloController extends Controller {

	/**
	 * @Route("/showCarrito")
	 */
	public function showCarrito(){

		$c1 = new Camiseta('camiseta 666','s','negra',15,2);
		$c2 = new Camiseta('camiseta batman','m','negra',25,3);
		$c3 = new Camiseta('camiseta hulk','l','negra',14,1);
		$c4 = new Camiseta('camiseta wonderwoman','xl','negra',11,1);
		$c5 = new Camiseta('camiseta greenlantern','s','negra',18,1);

		$listaCamisetas = array($c1,$c2,$c3,$c4,$c5);

		$carrito = new Carrito();
		$carrito->setListaCamisetas($listaCamisetas);
		$carrito->sortCamisetas();
		$carrito->actualizarCostes();

		return $this->render('transvinilo/showCarrito.html.twig', array(
			'carrito' => $carrito
		));
	}

}