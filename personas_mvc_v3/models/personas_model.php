<?php
class personas_model{
    private $db;
    private $personas;

    private $id;
    private $nombre;
    private $edad;

    public function __construct(){
        $this->db=Conectar::conexion();
        $this->personas=array();
    }

/* GETTERS & SETTERS */

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getNombre() {
      return $this->nombre;
    }

    public function setNombre($nombre) {
      $this->nombre = $nombre;
    }

    public function getEdad() {
      return $this->edad;
    }

    public function setEdad($edad) {
      $this->edad = $edad;
    }


    public function get_personas(){
        $consulta=$this->db->query("select * from personas;");
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        }
        return $this->personas;
    }

}
?>
