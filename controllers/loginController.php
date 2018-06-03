<?php
/**
 *
 */
class loginController extends Controller
{
  function __construct() {
		parent::__construct();
	}

	function index()
	{
    if (Session::get('name')) {
        header('location: '.URL);
    }else if (isset($_POST['email']) && isset($_POST['password'])) {
        $data = $this->model->run();
        $this->view->RenderCustomer('login/index',$data);
    }else {
        $this->view->RenderCustomer('login/index');
    }
	}
}
