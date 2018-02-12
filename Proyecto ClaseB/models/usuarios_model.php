<?php
class usuarios_model {
  private $db;
  private $username;
  private $password;


  public function __construct(){
      $this->db=Conectar::conexion();
  }


  /* GETTERS & SETTERS */
  public function getUsername() {
    return $this->username;
  }
  public function setUsername($username) {
    $this->username = $username;
  }
  public function getPassword() {
    return $this->password;
  }
  public function setPassword($password) {
    $this->password = $password;
  }
  public function getPassword2() {
    return $this->password2;
  }
  public function setPassword2($password2) {
    $this->password2 = $password2;
  }
  public function getNameCompleto() {
    return $this->nameCompleto;
  }
  public function setNameCompleto($nameCompleto) {
    $this->nameCompleto = $nameCompleto;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getDireccion() {
    return $this->direccion;
  }
  public function setDireccion($direccion) {
    $this->direccion = $direccion;
  }
  public function getPostal() {
    return $this->postal;
  }
  public function setPostal($postal) {
    $this->postal = $postal;
  }

  /**
  * Comprobar si el usuario ha hecho bien el login
  * @return [true]  si lo encuentra
  *         [false] si no lo encuentra
  */
  public function validar_usuario() {

    $sql = "SELECT * FROM USER WHERE USERNAME = '{$this->username}' AND PASSWORD = '{$this->password}'";
    $resultado = $this->db->query($sql) or trigger_error(mysqli_error($this->db)." ".$sql);

    if ($resultado->num_rows > 0) {
      while($row=$resultado->fetch_assoc()){
        return true;
      }
    }else{
      return false;
    }
  }

  public function add_user(){
    $sql = "INSERT INTO USER (USERNAME, PASSWORD, NAME, EMAIL, ADDRESS, POSTALCODE) VALUES ('{$this->username}','{$this->password}','{$this->nameCompleto}','{$this->email}','{$this->direccion}','{$this->postal}')";
    $result = $this->db->query($sql);
    if ($this->db->error)
      return "$sql<br>{$this->db->error}";
     else {
      return false;
     }
  }
}
?>
