<?php

/**
 *
 */
class indexController extends Controller
{

  function __construct()
  {
    	parent::__construct(); // Tao doi tuong view
  }
  function index() {
    $hotproduct = $this->model->getHotProduct();
    $newproduct = $this->model->getNewProduct();
    $allproduct = $this->model->getAllProduct();
    $data = array('hot' => $hotproduct, 'new' => $newproduct,
                  'all' => $allproduct );
                  // print_r($data);
		$this->view->RenderCustomer('index/index',$data);
	}
}
