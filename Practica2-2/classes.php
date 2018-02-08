<?php
  class componente{

    protected $numSerie;
    protected $marca ;
    protected $precio;

    function __construct($numSerie, $marca, $precio){
      $this->numSerie = $numSerie;
      $this->marca = $marca;
      $this->precio = $precio;
    }

  public function getSerie(){
      return $this->numSerie;
    }
    function setSerie($newSerie) {
      $this->numSerie = $newSerie;
    }

    function getMarca(){
      return $this->marca;
    }
    function setMarca($newMarca) {
      $this->numMarca = $newMarca;
    }

    function getPrecio(){
      return $this->precio;
    }
    function setPrecio($newPrecio) {
      $this->numPrecio = $newPrecio;
    }

    function describir(){
      echo  $this->numSerie;
      echo  $this->marca;
      echo  $this->precio;
    }
  }

    class procesador extends componente{
      protected $nombre;

      function __construct($numSerie,$marca,$precio,$nombre){
        parent::__construct($numSerie,$marca,$precio);
        $this->nombre = $nombre;
      }
      function getNombre(){
        return $this->nombre;
      }
      function setNombre($newNombre) {
        $this->nombre = $newNombre;
      }

      function describir(){
        echo  $this->nombre."<br>";

      }

    }

    class memoriaRAM extends componente{
        private $memoria;

      function __construct($numSerie, $marca, $precio, $memoria){
        parent:: __construct($numSerie, $marca, $precio);

        $this->memoria = $memoria;
      }

      function getMemoria(){
        return $this->memoria;
      }
      function setMemoria($newMemoria) {
        $this->memoria = $newMemoria;
      }

      function describir(){
        echo $this->memoria ."<br>";
      }

    }

    class discosDuros extends componente{
        private $capacidad = "1Tera";

      function __construct($numSerie, $marca, $precio, $capacidad){
        parent:: __construct($numSerie, $marca, $precio);

        $this ->capacidad = $capacidad;
      }

      function getCapacidad(){
        return $this ->capacidad;
      }
      function setCapacidad($newCapacidad) {
        $this->capacidad = $newCapacidad;
      }
      function describir(){
        echo  $this->capacidad ."<br>";      }
    }

    class placasBases extends componente{
      private $modelo ;

      function __construct($numSerie, $marca, $precio, $modelo){
        parent:: __construct($numSerie, $marca, $precio);

        $this ->modelo = $modelo;
      }

      function getModelo(){
        return $this ->modelo;
      }
      function setModelo($newModelo) {
        $this->modelo = $newModelo;
      }
      function describir(){
        echo $this->modelo ."<br>";       }
    }
 ?>
