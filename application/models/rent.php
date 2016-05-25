<?php
class Rent extends CI_Model {
  function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('book');
  }

  function find_by_book_id($book_id){
    $this->db->select('*');
    $this->db->from('rents');
    $this->db->join('users', 'users.id = rents.user_id');
    $this->db->where('rents.book_id', $book_id);
    $this->db->order_by('date', 'desc');
    return $this->db->get()->result();
  }

  function save(){
    $data['date']     = "2016-05-26";
    $data['due_date'] = $this->input->post('due_date');
    $data['book_id']  = $this->input->post('book_id');
    $data['user_id']  = $this->session->userdata('logged')['id'];
    $this->book->availability_to_false($data['book_id']);
    return $this->db->insert('rents', $data);  
  }
}
?>
