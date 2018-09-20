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

		$c1 = new Camiseta('camiseta 666','s','negra',15);
		$c2 = new Camiseta('camiseta batman','m','negra',25);
		$c3 = new Camiseta('camiseta hulk','l','negra',14);
		$c4 = new Camiseta('camiseta wonderwoman','xl','negra',11);
		$c5 = new Camiseta('camiseta greenlantern','s','negra',18);

		$listaCamisetas = array($c1,$c2,$c3,$c4,$c5);

		//usort($listaCamisetas, array('AppBundle\Entity\Camiseta', "cmp_obj"));

		$carrito = new Carrito();
		$carrito->setListaCamisetas($listaCamisetas);
		$listaCamisetas= $carrito->sortCamisetas();
		$carrito->actualizarCostes();

		return $this->render('transvinilo/showCarrito.html.twig', array(
			'listaCamisetas' => $listaCamisetas,
			'carrito' => $carrito
		));
	}

}