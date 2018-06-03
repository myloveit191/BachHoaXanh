<?php

/**
 *
 */
class indexEmplController extends Controller
{

  function __construct()
  {
    	parent::__construct();
  }
  public function index()
  {
    $this->view->RenderAdmin('dashboard/index');
  }
}
