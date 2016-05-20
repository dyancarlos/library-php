<?php
class Books extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('book');
  }

  function index(){
    $this->template->load('template', 'books/index');
  }
}
?>
