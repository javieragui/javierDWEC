 <?php

  class product_model{
    private $db;
    private $product;
    private $promotion;

    private $id;
    private $name;
    private $stock;
    private $price;
    private $sponcered;
    private $shortdescription;
    private $longdescription;
    private $brand;
    private $category;



  public function __construct(){
    $this->db=Conectar::conexion();
    $this->productos=array();
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

  public function getStock(){
    return $this->stock;
  }
  public function setStock($stock){
    $this->stock = $stock;
  }

  public function getPrice(){
    return $this->price;
  }
  public function setPrice($price){
    $this->price = $price;
  }

  public function getSponcered(){
    return $this->sponcered;
  }
  public function setSponcered($sponcered){
    $this->sponcered = $sponcered;
  }

  public function getShortdescription(){
    return $this->shortdescription;
  }
  public function setShortdescription($shortdescription){
    $this->shortdescription = $shortdescription;
  }

  public function getLongdescription(){
    return $this->longdescription;
  }
  public function setLongdescription($longdescription){
    $this->longdescription = $longdescription;
  }

  public function getBrand(){
    return $this->brand;
  }
  public function setBrand($brand){
    $this->brand = $brand;
  }

  public function getCategory(){
    return $this->category;
  }
  public function setCategory($category){
    $this->category = $category;
  }

  public function get_product(){
    $consulta=$this->db->query("select * from PRODUCT where SPONSORED = 'Y';");
    while($filas=$consulta->fetch_assoc()){
      $this->productos[]=$filas;
    }
    return $this->productos;
  }

  public function get_Promotion(){
    $consulta=$this->db->query("select * from PRODUCT join PROMOTION where PRODUCT.ID = PROMOTION.PRODUCT;");
    while($filas=$consulta->fetch_assoc()){
      $this->productos[]=$filas;
    }
    return $this->productos;
  }

  public function getBuscador($id){

    $consulta=$this->db->query("select * from PRODUCT where SHORTDESCRIPTION
    LIKE '%$id%';");
    while($filas=$consulta->fetch_assoc()){
      $this->productos[]=$filas;
    }
    return $this->productos;
  }
  public function ordCategoria(){
      $consulta=$this->db->query("select * from PRODUCT where CATEGORY = '{$this->name}';");

      while($filas=$consulta->fetch_assoc()){
          $this->productos[]=$filas;
      }
      return $this->productos;
    }

}
 ?>
