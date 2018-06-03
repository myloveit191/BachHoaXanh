<?php
class categoryEmplModel extends Model
{

  function __construct()
  {
    parent::__construct();
  }
  public function getList()
  {
      $query = "SELECT * FROM category";
      $result = $this->db->select($query);
      return $result;
  }

}
