<?php
/**
* Gui yeu cau den CSDL thong qua DPO
*/
class dashboardEmplModel extends Model
{

  function __construct()
  {
    parent::__construct();
  }
  public function run()
  {
      $email = $_POST['emailAd'];
      $password = $_POST['passwordAd'];
      $query = "SELECT id, fullname, email FROM employees WHERE email = :email AND password = :password";
      $arrayQuery = array(':email' =>$email , ':password'=> Hash::create('sha256',$password, HASH_PASSWORD_KEY));
      $result = $this->db->select($query, $arrayQuery);
      if (count($result)) {
          $data = array_shift($result);
          $arrayFullname = explode(' ', $data['fullname']);
          $name = array_pop($arrayFullname);
          Session::set('idAd', $data['id']);
          Session::set('nameAd', $name);
          header('Location: ' . URL. 'dashboard/index');
      }else {
          $data = "Email hoac password khong dung";
          return $data;

      }
  }
}
