<?php
class Books extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('book');
  }

  function index(){
    $data['books'] = $this->book->all();
    $this->template->load('template', 'books/index', $data);
  }

  function form(){
    $data['action'] = base_url('/books/confirm');
    $this->template->load('template', 'books/form', $data);
  }

  function confirm(){
    $data['json']   = $this->book->find_by_isbn($_POST['isbn']);
    $data['size']   = $data['json']->totalItems; 
    $data['action'] = base_url('/books/create');
    $data['book']   = $this->book->bookAttributes($data['json']);
    $this->template->load('template', 'books/confirm', $data); 
  }

  function create(){
    if($this->book->save()):
      redirect("/books");
    else:
      echo "error";
    endif;
  }
}
?>
