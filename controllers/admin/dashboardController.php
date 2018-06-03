<?php

/**
 *
 */
class dashboardEmplController extends Controller
{

  function __construct()
  {
    	parent::__construct();
  }
  public function index()
  {
    if (Session::get('nameEpl')) {
        header('location: '.URL.'dashboard');
    }else if (isset($_POST['emailAd']) && isset($_POST['passwordAd'])) {
        $data = $this->model->run();
        $this->view->RenderAdmin('dashboard/login',$data);
    }else {
        $this->view->RenderAdmin('dashboard/login');
    }
  }
}
