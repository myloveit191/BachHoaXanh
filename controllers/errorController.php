<?php

/**
 *
 */
class errorController extends Controller
{

  function __construct()
  {
    	parent::__construct(); // Tao doi tuong view
  }
  function index() {
    echo "Error";
		//$this->view->render('error/index');
	}
}
