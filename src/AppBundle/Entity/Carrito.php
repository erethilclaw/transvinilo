<?php
/**
 * Created by PhpStorm.
 * User: erethilclaw
 * Date: 19/09/18
 * Time: 18:56
 */

namespace AppBundle\Entity;
use AppBundle\Entity\Camiseta;

class Carrito {

	private $listaCamisetas;
	private $precioTotal;
	private $precioTotalEnvio;

	/**
	 * Carrito constructor.
	 *
	 * @param $listaCamisetas
	 */
	public function __construct() {
		$this->listaCamisetas = array();
	}

	/**
	 * @return array
	 */
	public function getListaCamisetas() {
		return $this->listaCamisetas;
	}

	/**
	 * @param array $listaCamisetas
	 */
	public function setListaCamisetas( $camiseta ) {
		$listaCamisetas[] = $this->getListaCamisetas();
		$listaCamisetas[] = $camiseta;
		$this->listaCamisetas = $listaCamisetas;
	}



	public function sortCamisetas(){
		usort($this->listaCamisetas[1], array('AppBundle\Entity\Camiseta', "cmp_obj"));

		return $this->listaCamisetas[1];
	}

	/**
	 * @return mixed
	 */
	public function getPrecioTotal() {
		//$this->setPrecioTotal();
		return $this->precioTotal;
	}

	/**
	 * @param mixed $precioTotal
	 */
	public function setPrecioTotal() {
		foreach ($this->listaCamisetas[1] as $camiseta ){
			$this->precioTotal += $camiseta->getPreu();
		}
	}

	/**
	 * @return mixed
	 */
	public function getPrecioTotalEnvio() {
		//$this->setPrecioTotalEnvio();
		return $this->precioTotalEnvio;
	}

	/**
	 * @param mixed $precioTotalEnvio
	 */
	public function setPrecioTotalEnvio() {
		if ($this->precioTotal < 50){
			$this->precioTotalEnvio = $this->precioTotal + 5;
		}else{
			$this->precioTotalEnvio = $this->precioTotal;
		}
	}

	public function actualizarCostes (){
		$this->setPrecioTotal();
		$this->setPrecioTotalEnvio();
	}

}