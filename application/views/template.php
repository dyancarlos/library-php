<?php
  if(!$this->session->userdata('logged'))
    redirect ('/login');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8" />
    <title>Books</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/application.css') ?>" />
  </head>
  <body>
    <div class="main">
      <?= $contents; ?>
    </div>
    
    <div class="footer">
      <div class="footer-left">
        <ul>
          <li><img src="<?= base_url('assets/imgs/add.png') ?>" /><a href="<?= base_url("/books/form") ?>" class="add-book">Adicionar Livro</a></li>
          <li><a href="<?= base_url("/books") ?>" class="add-book">Início</a></li>
        </ul>
      </div>

      <div class="footer-right">
        <h3><?= $this->session->userdata('logged')['email'] ?></h3>
        <ul>
          <li><a href="<?= base_url('/login/logout') ?>">Meus Livros</a></li> <small>ou</small>
          <li><a href="<?= base_url('/login/logout') ?>">Sair</a></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
  </body>
</html>
