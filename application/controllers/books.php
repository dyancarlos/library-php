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
}
?>
