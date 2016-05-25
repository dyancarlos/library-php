<?php
class Rents extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('rent');
  }
}
?>

