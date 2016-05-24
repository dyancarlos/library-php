<?php
class Users extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('user');
  }

  function create(){
    if($this->user->save()):
      redirect('/login');
    else:
      echo "error";
    endif;
  }
}
?>
