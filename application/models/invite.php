<?php
class Invite extends CI_Model {
  function __construct() {
    $this->load->database();
  }

  function all(){
    $user_id = $this->session->userdata('logged')['id'];
    $query   = $this->db->get_where("invites", array('user_id'=>$user_id));
    return $query->result();
  }
    
  function save(){
    $data            = $this->input->post();
    $data['user_id'] = $this->session->userdata('logged')['id'];
    return $this->db->insert('invites', $data); 
  }

  function destroy($id){
    $user_id = $this->session->userdata('logged')['id'];
    return $this->db->where('id', $id)->where('user_id', $user_id)->delete('invites');
  }
}
?>
