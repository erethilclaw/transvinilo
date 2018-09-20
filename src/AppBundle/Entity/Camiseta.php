<?php

namespace AppBundle\Entity;

/**
 * Camiseta
 */
class Camiseta
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $talla;

    /**
     * @var string
     */
    private $color;

    /**
     * @var float
     */
    private $preu;

	/**
	 * Camiseta constructor.
	 *
	 * @param string $nombre
	 * @param string $talla
	 * @param string $color
	 * @param float $preu
	 */
	public function __construct( $nombre, $talla, $color, $preu ) {
		$this->nombre = $nombre;
		$this->talla  = $talla;
		$this->color  = $color;
		$this->preu   = $preu;
	}

	/**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Camiseta
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set talla
     *
     * @param string $talla
     *
     * @return Camiseta
     */
    public function setTalla($talla)
    {
        $this->talla = $talla;

        return $this;
    }

    /**
     * Get talla
     *
     * @return string
     */
    public function getTalla()
    {
        return $this->talla;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Camiseta
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set preu
     *
     * @param float $preu
     *
     * @return Camiseta
     */
    public function setPreu($preu)
    {
        $this->preu = $preu;

        return $this;
    }

    /**
     * Get preu
     *
     * @return float
     */
    public function getPreu()
    {
        return $this->preu;
    }

	static function cmp_obj($a, $b)
	{
		$al = strtolower($a->talla);
		$bl = strtolower($b->talla);
		if ($al == $bl) {
			return 0;
		}
		return ($al > $bl) ? +1 : -1;
	}


}

