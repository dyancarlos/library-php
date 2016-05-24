<?php
class User extends CI_Model {
  function __construct() {
    $this->load->database();
  }
    
  function verify($email, $password) {
    $query = $this->db->get_where('users', array('email'=>$email, 'password'=>md5($password)));
    if($query->num_rows()==1) return true;
    else return false;
  }

  function get_id_from_email($email){
    $query = $this->db->get_where('users', array('email'=>$email));
    return $query->row_array()['id'];
  }

  function save(){
    $data             = $this->input->post();
    $data['password'] = md5($data['password']); 
    return $this->db->insert('users', $data); 
  }
}
?>
