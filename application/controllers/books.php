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

  function show($id){
    $data['book'] = $this->book->find($id);
    $this->template->load('template', 'books/show', $data);
  }

  function confirm(){
    $data['json']   = $this->book->find_by_isbn($_POST['isbn']);
    $data['size']   = $data['json']->totalItems; 
    $data['action'] = base_url('/books/create');
    $data['book']   = $this->book->bookAttributes($data['json']);
    $this->template->load('login', 'books/confirm', $data); 
  }

  function my(){
    $data['books'] = $this->book->find_by_user();
    $this->template->load('template', 'books/my', $data);
  }

  function create(){
    if($this->book->save()):
      redirect("/books");
    else:
      echo "error";
    endif;
  }

  public function destroy($id) {
    if($this->book->destroy($id)):
      redirect("/books/my");
    else:
      echo "Erro";
    endif;
  }
}
?>
