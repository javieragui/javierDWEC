<?php
  class category_model{

    private $id;
    private $name;
    private $parentcategory;

    public function __construct(){
      $this->db=Conectar::conexion();
      $this->categorias=array();

    }
    //GETTERS & SETTERS
    public function getId(){
      return $this->id;
    }
    public function setId($id){
      $this->id = $id;
    }
    public function getName(){
      return $this->name;
    }
    public function setName($name){
      $this->name = $name;
    }
    public function getParentCategory(){
      return $this->parentCategory;
    }
    public function setParentCategory($parentCategory){
      $this->parentCategory = $parentCategory;
    }

    //Metodos
    //Sacar categorias
    public function get_ViewCategory(){
      $consulta=$this->db->query("select * from CATEGORY where PARENTCATEGORY is null;");
      while($filas=$consulta->fetch_assoc()){
        $this->categorias[]=$filas;
      }
      return $this->categorias;
    }
    //Sacar subcategorias
    public function get_ViewSubcategory(){
      $consulta=$this->db->query("select * from CATEGORY WHERE PARENTCATEGORY IS NOT NULL;");
      while($filas=$consulta->fetch_assoc()){
        $this->categorias[]=$filas;
      }
      return $this->categorias;
    }


  }
 ?>
