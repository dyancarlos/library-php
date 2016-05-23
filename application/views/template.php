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
      <a href="<?= base_url("/books/form") ?>" class="add-book">Adicionar</a>
      <a href="<?= base_url('/login/logout') ?>">Sair</a>
    </div>
  </body>
</html>
