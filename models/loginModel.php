<?php
/**
* Gui yeu cau den CSDL thong qua DPO
*/
class loginModel extends Model
{

  function __construct()
  {
    parent::__construct();
  }
  public function run()
  {
    if (isset($_POST['email']) && isset($_POST['password'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $query = "SELECT id, fullname, email FROM customers WHERE email = :email AND password = :password";
      $arrayQuery = array(':email' =>$email , ':password'=> Hash::create('sha256',$password, HASH_PASSWORD_KEY));
      $result = $this->db->select($query, $arrayQuery);
      if (count($result)) {
          $data = array_shift($result);
          $arrayFullname = explode(' ', $data['fullname']);
          $name = array_pop($arrayFullname);
          Session::set('id', $data['id']);
          Session::set('name', $name);
          header('Location: ' . URL);
      }else {
          $data = "Email hoac password khong dung";
          return $data;

      }
    }
  }
}
