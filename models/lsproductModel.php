<?php
/**
 * Gui yeu cau den CSDL thong qua DPO
 */
class lsproductModel extends Model
{

  function __construct()
  {
    parent::__construct();
  }
  public function getlsProduct($id)
  {
    $query = "SELECT * FROM products WHERE category_id = :id ";
    $array = array(':id' => $id);
    $result = $this->db->select($query, $array);
    return $result;
  }
  public function getProductById($id)
  {
    $query = "SELECT * FROM products WHERE id = :id ";
    $array = array(':id' => $id);
    $result = $this->db->select($query, $array);
    return $result;
  }
}
