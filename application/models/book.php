<?php
class Book extends CI_Model {
  function __construct(){
    parent::__construct();
    $this->load->database();
  }

  function all(){
    $query = $this->db->get("books", 10);
    return $query->result();
  }

  function find(){}

  function save(){}

  function update(){}

  function destroy(){}
}
?>
