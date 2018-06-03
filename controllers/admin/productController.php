<?php

/**
 *
 */
class productEmplController extends Controller
{

  function __construct()
  {
    	parent::__construct();
  }
  public function index()
  {
    $data = $this->model->getList();
    $this->view->RenderAdmin('dashboard/product',$data);
  }
}
