<?php

/**
 * Phan khoi dong cua server
 * Phan nay bat cac URL va gui den cac Controller trong MVC xu ly
 */
class Bootstrap
{
  private $_url = null;
  private $_lenghtUrl = null;
  private $_controller = null;
  /**
  *
  * Cac truong hop cua url:
  * - (1) url[0] khong co: -> Chuyen toi trang chu
  * - (2) url[0] = dashboard (url = dashboard/controller/medthod/params).
  * - (3) url[0] !(1) va !(2) : url[0] : controller/medthod/params
  **/
  function __construct()
  {
    $this->getUrl();
    if (empty($this->_url[0])) {
      $this->loadIndex();
      return false;
    }
    if ($this->_url[0] == "dashboard") {
      $this->loadManagerController();
    } else {
      $this->loadCustomerController();
    }
  }
  //Xu lu url tu client
  public function getUrl()
  {
    $url = isset($_GET['url']) ? $_GET['url'] : null;
    $url = filter_var(rtrim($url,'/'), FILTER_SANITIZE_URL);
    $this->_url = explode('/',$url);
  }
  //Dua vao indexController xu ly (module: Controller)
  public function loadIndex()
  {
    require 'controllers/indexController.php';
    $this->_controller = new indexController();
    $this->_controller->loadModel("index");
    $this->_controller->index();
  }
  //Url cua trang admin: dashboard/controller/medthod/params
  public function loadManagerController()
  {
    if (count($this->_url) > 1) {
      array_shift($this->_url); // Bo dashboard
      $this->_lenghtUrl = count($this->_url); // Lay lai do dai url
      // Kiem tra ton tai cua controller
      $file = 'controllers/admin/' .$this->_url[0]. 'Controller.php';
        if (file_exists($file)) {
          require $file;
          $newController = $this->_url[0] . 'EmplController';
          $this->_controller = new $newController;
          $this->_controller->loadModel($this->_url[0],true);
          $this->callMedthod();

        }else {
            $this->error();
            return false;
        }
    }else {
      require 'controllers/admin/dashboardController.php';
      $this->_controller = new dashboardEmplController();
      $this->_controller->loadModel($this->_url[0],true);
      $this->_controller->Index();
    }
  }
  public function loadCustomerController()
  {
    if (count($this->_url) > 0) {

      $this->_lenghtUrl = count($this->_url);
      // Kiem tra ton tai cua controller
      $file = 'controllers/' .$this->_url[0]. 'Controller.php';
        if (file_exists($file)) {
          require $file;
          $newController = $this->_url[0] . 'Controller';
          $this->_controller = new $newController;
          $this->_controller->loadModel($this->_url[0]);
          $this->callMedthod();

        }else {
            $this->error();
            return false;
        }
    }else {
      require 'controllers/indexController.php';
      $this->_controller = new indexController();
      $this->_controller->index();
    }
  }
  public function callMedthod()
  {
    if ($this->_lenghtUrl > 1) {
            if (!method_exists($this->_controller, $this->_url[1])) {
                $this->error();
                return false;
            }
    }
    switch ($this->_lenghtUrl) {

      case 1:
        $this->_controller->index();
        break;
      case 2:
        $this->_controller->{$this->_url[1]}();
        break;
      case 3:
        $this->_controller->{$this->_url[1]}($this->_url[2]);
        break;
      case 3:
        $this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[2]);
        break;
      default:
        $_controller->index();
        break;
    }
  }
  //
  function error() {
		require 'controllers/errorController.php';
		$this->_controller = new errorController();
		$this->_controller->index();
		return false;
	}
}
