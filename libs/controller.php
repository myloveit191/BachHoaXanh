<?php


/**
* Class controller khoi tao mot View va Model
*/
class Controller
{

  function __construct()
  {
    $this->view = new View();
  }
  public function loadModel($name,$dashboard = false) {
    if ($dashboard) {
      $path = 'models/admin/'.$name.'Model.php';
      if (file_exists($path)) {
        require 'models/admin/'.$name.'Model.php';
        $modelName = $name . 'EmplModel';
        $this->model = new $modelName();
      }
    }
    else {
      $path = 'models/'.$name.'Model.php';
      if (file_exists($path)) {
        require 'models/'.$name.'Model.php';
        $modelName = $name . 'Model';
        $this->model = new $modelName();
      }
    }
  }
}
