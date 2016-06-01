<?php
class Users extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('user');
  }

  function create(){
    $this->form_validation->set_rules('name','name','required');
    $this->form_validation->set_rules('email','email','required');
    $this->form_validation->set_rules('password_confirmation','password_confirmation','required');
    $this->form_validation->set_rules('password','password','required|matches[password_confirmation]');

    if($this->form_validation->run()):
      if($this->user->save()):
        redirect('/login');
      else:
        redirect("/login");
      endif;
    else:
      redirect('/login/signup');
    endif;
  }
}
?>
