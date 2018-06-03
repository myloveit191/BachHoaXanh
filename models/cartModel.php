<?php

class cartModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }
  public function checkId($id,$count)
  {
    $query = "SELECT * FROM products WHERE id =:id";
    $array = array(':id' => $id);
    $result = $this->db->select($query,$array);
    if (empty($result)) {
      header("Location: " .URL);
    }else {
        $result = array_shift($result);
        $total = (int)$result['unit_price']*(int)$count;
        $totalPrice = $total;
        $arrayCart = array(
        'id' => $result['id'],
        'product_name' => $result['product_name'],
        'picture' => $result['picture'],
        'unit_price' => $result['unit_price'],
        'count' => $count,
        'total' => $total
      );
      if (!Session::get('cart')) {
        Session::set('cart',array($arrayCart['id'].'Cart'=>$arrayCart));
        Session::set('totalPrice',$totalPrice);
      }else {
        $flag = true;
        $data = Session::get('cart');
        $totalPrice = Session::get('totalPrice') + $total;
        foreach ($data as &$value) {
          if ($value['id'] == $arrayCart['id']) {
            $value['count'] += (int)$arrayCart['count'];
            $value['total'] += (int)$arrayCart['total'];
            $flag = false;
          }
        }
        if ($flag) {
          Session::set('cart',array_merge(Session::get('cart'),array($arrayCart['id'].'Cart'=>$arrayCart)));
          Session::set('totalPrice',$totalPrice);
        }else {
          Session::set('cart',$data);
          Session::set('totalPrice',$totalPrice);
        }
      }
    }
  }
  public function deleteById($id)
  {

    $data = Session::get('cart');
    unset($data[$id.'Cart']);
    Session::set('cart',$data);
  }
  public function updateCart($id,$count)
  {
    $data = Session::get('cart');
    $totalPrice = 0;
    $data[$id.'Cart']['count'] = $count;
    $data[$id.'Cart']['total'] = (int)$count * (int)$data[$id.'Cart']['unit_price'];
    foreach ($data as $value) {
      $totalPrice += (int)$value['total'];
    }
    // print_r($data);
    Session::set('cart',$data);
    Session::set('totalPrice',$totalPrice);
  }
  public function payCart($arrayNN)
  {
    $sessionUser = Session::get('id');
    $sessionCart = Session::get('cart');
    $requied = mktime(0, 0, 0, date("m"), date("d")+1, date("Y"));
    $query  = $this->db->prepare("INSERT INTO oders (oder_date, requied_data, type_ship_id, ship_name, ship_address ,employee_id, customer_id) VALUES (:oder_date, :requied_data, :type_ship_id, :ship_name, :ship_address,:employee_id, :customer_id)");
    $query->execute(array(
      'oder_date' => date('d/m/Y') ,
      'requied_data' => date('d/m/Y',$requied) ,
      'type_ship_id' => $arrayNN['shipOption'] ,
      'ship_name' => $arrayNN['tenNN'],
      'ship_address' => $arrayNN['diachiNN'],
      'employee_id' => 3,
      'customer_id' => $sessionUser));
    $last_id = $this->db->lastInsertId();
    $data = array(
      'id' => $last_id,
      'oder_date' => date('d/m/Y') ,
      'requied_data' => date('d/m/Y',$requied) ,
      'type_ship_id' => $arrayNN['shipOption'] ,
      'ship_name' => $arrayNN['tenNN'],
      'ship_address' => $arrayNN['diachiNN'],
      'customer_name' => Session::get('name')
      );
      return $data;
  }
}
