<?php
/**
 * Gui yeu cau den CSDL thong qua DPO
 */
class indexModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }
  public function getHotProduct()
  {
    $query = "SELECT * FROM products ORDER BY stock ASC LIMIT 2";
    $result = $this->db->select($query);
    return $result;
  }
  public function getNewProduct()
  {
    $query = "SELECT * FROM products ORDER BY stock DESC LIMIT 4";
    $result = $this->db->select($query);
    return $result;
  }
  public function getAllProduct()
  {
    $query = "SELECT * FROM products LIMIT 8";
    $result = $this->db->select($query);
    return $result;
  }
}
