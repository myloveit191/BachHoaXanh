<?php

/**
 * Lop View nay dung de render du lieu cho nguoi dung
 */
class View
{

  function __construct()
  {

  }
  /*
  *
  */
  public function RenderCustomer($name, $data = false)
  {
      require_once 'views/header.php';
      require_once 'views/'. $name . '.php';
      require_once 'views/footer.php';
  }
  public function RenderAdmin($name, $data = false)
  {
      if ($name == "dashboard/login") {
        require 'views/'. $name . '.php';
      } else {
        require 'views/headerad.php';
        require 'views/'. $name . '.php';
        require 'views/footerad.php';
      }
  }
}
