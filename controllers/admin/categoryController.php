<?php

/**
 *
 */
class categoryEmplController extends Controller
{

  function __construct()
  {
    	parent::__construct();
  }
  public function index()
  {
    $data = $this->model->getList();
    $this->view->RenderAdmin('dashboard/category',$data);
  }
}
