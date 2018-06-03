<?php
/**
* Gui yeu cau den CSDL thong qua DPO
*/
class supplierEmplModel extends Model
{

  function __construct()
  {
    parent::__construct();
  }
  public function getList()
  {
      $query = "SELECT * FROM supplier";
      $result = $this->db->select($query);
      return $result;
  }

}
