<?php
/**
* Gui yeu cau den CSDL thong qua DPO
*/
class productEmplModel extends Model
{

  function __construct()
  {
    parent::__construct();
  }
  public function getList()
  {
      $query = "SELECT * FROM products";
      $result = $this->db->select($query);
      return $result;
  }

}
