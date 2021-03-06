<?php
class Books extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('book');
    $this->load->model('rent');
  }

  function index(){
    $data['books'] = $this->book->all();
    $this->template->load('template', 'books/index', $data);
  }

  function show($id){
    $data['book']  = $this->book->find($id);
    $data['rents'] = $this->rent->find_by_book_id($id);
    $data['last']  = $this->rent->last_by_book_id($id);
    $this->template->load('template', 'books/show', $data);
  }

  function confirm(){
    $data['json']   = $this->book->find_by_isbn($_POST['isbn']);
    $data['size']   = $data['json']->totalItems; 
    $data['action'] = base_url('/books/create');
    $data['book']   = $this->book->bookAttributes($data['json']);
    $this->template->load('template', 'books/confirm', $data); 
  }

  function my(){
    $data['books'] = $this->book->find_by_user();
    $this->template->load('template', 'books/my', $data);
  }

  function pdf(){
    $data['books'] = $this->book->find_by_user();
    $html = $this->load->view('books/pdf', $data, true);
    $pdfFilePath = "books.pdf";
    $this->load->library('M_pdf');
    $this->m_pdf->pdf->WriteHTML($html);
    $this->m_pdf->pdf->Output($pdfFilePath, "D"); 
  }

  function create(){
    if($this->book->save()):
      redirect("/books");
    else:
      redirect("/books");
    endif;
  }

  public function destroy($id) {
    if($this->book->destroy($id)):
      redirect("/books/my");
    else:
      redirect("/books/my");
    endif;
  }
}
?>
