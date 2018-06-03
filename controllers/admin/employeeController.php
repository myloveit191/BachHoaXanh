<?php

/**
 *
 */
class employeeEmplController extends Controller
{

  function __construct()
  {
    	parent::__construct();
  }
  public function index()
  {
    $data = $this->model->getList();
    $this->view->RenderAdmin('dashboard/employee',$data);
  }
  public function getById($id)
  {
    $data = $this->model->getById($id);
    echo json_encode($data);
  }
  public function deleteByID($id)
  {
    $this->model->deleteById($id);
    header('location: '.URL . 'dashboard/employee');
  }
}
