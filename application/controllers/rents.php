<?php
class Rents extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('rent');
    $this->load->model('book');
  }

  function give_back($book_id){
    if($this->book->availability_to_true($book_id)):
      redirect("/books/show/".$book_id);
    else:
      echo "error";
    endif; 
  }

  function create(){
    $this->form_validation->set_rules('due_date','due_date','required');

    if($this->form_validation->run()):
      if($this->rent->save()):
        redirect("/books/show/".$this->input->post('book_id'));
      else:
        echo "error";
      endif;
    else:
      redirect("/books/show/".$this->input->post('book_id'));
    endif;
  }
}
?>
