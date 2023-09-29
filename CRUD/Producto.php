<?php 

class producto{
    private int $id;
    private string $nombre;
    private float $precio;

    //constructor

    public function __construct(int $id, string $nombre, float $precio)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;

    }

    //getters

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    //setters

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }


}

?>