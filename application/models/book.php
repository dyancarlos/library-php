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

  function find_by_isbn($isbn){
    $book = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=isbn:".$isbn);
    return json_decode($book);
  }

  function save(){
    $data = $this->input->post();
    return $this->db->insert('books', $data);  
  }

  // object is not null, but he comes empty
  // with a 'totalItems' value of 0
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
}
?>