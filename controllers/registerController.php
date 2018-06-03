<?php
/**
 *
 */
class registerController extends Controller
{
  function __construct() {
		parent::__construct();
	}

	function index()
	{
    if (isset($_POST['fistname'])
      && isset($_POST['lastname'])
      && isset($_POST['email'])
      && isset($_POST['password']) ) {
      // code...
    }
		$this->view->RenderCustomer('register/index');
	}
}
