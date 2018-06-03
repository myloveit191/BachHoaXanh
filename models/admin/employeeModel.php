<?php
/**
* Gui yeu cau den CSDL thong qua DPO
*/
class employeeEmplModel extends Model
{

  function __construct()
  {
    parent::__construct();
  }
  public function getList()
  {
      $query = "SELECT * FROM employees";
      $result = $this->db->select($query);
      return $result;
  }
  public function getById($id)
  {
    $query = "SELECT * FROM employees WHERE id = :id";
    $array = array(':id' => $id);
    $result = $this->db->select($query,$array);
    $result = array_shift($result);
    return $result;
  }
  public function deleteByID($id)
  {
    $query = "DELETE FROM employees WHERE id = :id";
    $array = array(':id' => $id);
    $result = $this->db->delete($query,$array);
  }

}
