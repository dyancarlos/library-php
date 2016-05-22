<?php
class Login extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('user');
  }

  function index(){
    $this->template->load('login', 'login/form');
  }

  function authenticate(){
    $email    = $this->input->post('email');
    $password = $this->input->post('password');
        
    if($this->user->verify($email,$password)): 
      $this->session->set_userdata('logged', array('email'=>$email));
      redirect('/books');
    else:
      $data['message'] = "Usuário ou senha incorretos";
      $this->template->load('login', 'login/form', $data);
    endif;
  }

  function logout(){
    $this->session->sess_destroy();
    $this->index();
  }
}
?>
