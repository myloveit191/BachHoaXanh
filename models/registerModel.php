<?php
/**
 * Gui yeu cau den CSDL thong qua DPO
 */
class registerModel extends Model
{

  function __construct()
  {
    parent::__construct();
  }
  public function run()
  {
    $query  = $this->db->prepare("INSERT INTO users (firstname, lastname, email, password ) VALUES (:firstname, :lastname, :email, :password)");
    $query->execute(array(
      'firstname' =>$_POST['firstname'],
      'lastname' =>$_POST['lastname'],
      'email' =>$_POST['email'],
      'password' => Hash::create('sha256', $_POST['password'],HASH_PASSWORD_KEY)
      ));
    Session::set('name', $_POST['lastname']);
    Session::set('role','default');
    header('location: '.URL);
  }
}
