<?php
class User extends CI_Model {
  function __construct() {
    $this->load->database();
  }
    
  public function verify($email, $password) {
    $query = $this->db->get_where('users', array('email'=>$email, 'password'=>md5($password)));
    if($query->num_rows()==1) return true;
    else return false;
  }
}
?>
