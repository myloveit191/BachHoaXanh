<?php

/**
 *
 */
class cartController extends Controller
{

  function __construct()
  {
    	parent::__construct(); // Tao doi tuong view
  }
  function index() {
      $this->view->RenderCustomer('cart/index');
	}
  public function addCart($id = null, $count = 1)
  {
    if (!$id) {
      header('Location: '.URL);
    }else {
      // Tim kiem id trong csdl
      $this->model->checkId($id, $count);
      header('Location: '.URL.'cart');
    }
  }
  public function delete($id = null)
  {
    if (!$id) {
      header('Location: '.URL);
    }else {
      // Tim kiem id trong csdl
      $this->model->deleteById($id);
      header('Location: '.URL.'cart');
    }
  }
  public function update()
  {
    if (isset($_POST['count']) && isset($_POST['id'])) {
      $id = $_POST['id'];
      $count = $_POST['count'];
      $this->model->updateCart($id,$count);
    }
  }
  public function pay()
  {
    if (Session::get('cart')) {
      if (Session::get('name')) {
        if (isset($_POST['tenNN'])&&isset($_POST['diachiNN'])&&isset($_POST['shipOption'])) {
          $arrayName = array(
            'tenNN' => $_POST['tenNN'],
            'diachiNN' => $_POST['diachiNN'],
            'shipOption' => $_POST['shipOption'] );
          $data  =$this->model->payCart($arrayName);
          $this->view->RenderCustomer('order/index',$data);
        }else {
          $this->view->RenderCustomer('ship/index');
        }
      }else {
        echo "<script>alert('Vui long dang nhap de thanh toan');</script>";
        $this->view->RenderCustomer('cart/index');
      }
    }else {
      header('Location: '.URL);
    }
  }
}
