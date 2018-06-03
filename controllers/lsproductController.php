<?php

/**
 *
 */
class lsproductController extends Controller
{

  function __construct()
  {
    	parent::__construct(); // Tao doi tuong view
  }
  function index() {
    $data = $this->model->getlsProduct(1);
		$this->view->RenderCustomer('lsproduct/index',$data);
	}
  public function view($id = null)
  {
    if (!$id) {
      header('location: '.URL);
    }
    $data = $this->model->getlsProduct($id);
    $this->view->RenderCustomer('lsproduct/index',$data);
  }
  public function detail($id = null)
  {
    if (!$id) {
      header('location: '.URL);
    }
    $data = $this->model->getProductById($id);
    $data = array_shift($data);
    $this->view->RenderCustomer('detail/index',$data);
  }
}
