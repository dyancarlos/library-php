<?php
class Invites extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('invite');
  }

  function index(){
    $data['invites'] = $this->invite->all();
    $this->template->load('template', 'invites/index', $data);
  }

  function form(){
    $this->template->load('template', 'invites/form');
  }

  function create(){
    if($this->invite->save()):
      redirect("/invites");
    else:
      redirect("/invites");
    endif;
  }

  public function destroy($id) {
    if($this->invite->destroy($id)):
      redirect("/invites");
    else:
      redirect("/invites");
    endif;
  }
}
?>
