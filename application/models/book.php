<?php
class Book extends CI_Model {
  function __construct(){
    parent::__construct();
    $this->load->database();
  }

  function all(){
    $query = $this->db->get("books");
    return $query->result();
  }

  function find($id){
    $query = $this->db->get_where("books", array('id'=>$id));
    return $query->row();
  }

  function find_by_user(){
    $user_id = $this->session->userdata('logged')['id'];
    $query   = $this->db->get_where("books", array('user_id'=>$user_id));
    return $query->result();
  }

  function find_by_isbn($isbn){
    $book = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=isbn:".$isbn);
    return json_decode($book);
  }

  function save(){
    $data            = $this->input->post();
    $data['user_id'] = $this->session->userdata('logged')['id'];
    return $this->db->insert('books', $data);  
  }

  function bookAttributes($obj){
    if($obj->totalItems > 0):
      $shortPath = $obj->items[0]->volumeInfo;
      return array(
        'title'       => isset($shortPath->title)       ? $shortPath->title       : "",
        'authors'     => isset($shortPath->authors)     ? $shortPath->authors[0]  : "",
        'pageCount'   => isset($shortPath->pageCount)   ? $shortPath->pageCount   : "",
        'publisher'   => isset($shortPath->publisher)   ? $shortPath->publisher   : "",
        'description' => isset($shortPath->description) ? $shortPath->description : "",
        'cover' => isset($shortPath->imageLinks->thumbnail) ? $shortPath->imageLinks->thumbnail : ""
      );
    endif;
  }

  function destroy($id){
    $user_id = $this->session->userdata('logged')['id'];
    return $this->db->where('id', $id)->where('user_id', $user_id)->delete('books');
  }
}
?>
