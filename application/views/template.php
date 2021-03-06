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
    <link rel="stylesheet" href="<?= base_url('assets/css/button.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.datetimepicker.css') ?>" />
    <script type="text/javascript" charset="utf-8" src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script type="text/javascript" charset="utf-8" src="<?= base_url('assets/js/jquery.datetimepicker.js') ?>"></script>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
        $('.date').datetimepicker({
          minDate: 0,
          timepicker: false,
          closeOnDateSelect: true,
          format:'d/m/Y',
          lang:'pt-BR'
        });      
      });
    </script>
  </head>
  <body>
    <!-- content -->
    <div class="main">
      <?= $contents; ?>
    </div>

    <!-- footer -->
    <div class="footer">
      <!-- footer left -->
      <div class="footer-left">
        <ul>
          <li><a href="<?= base_url("/books") ?>" class="ui basic grey mini button">Todos os Livros</a></li>
        </ul>
      </div>

      <!-- book form -->
      <div class="new-book-form">
        <form action="<?= base_url('/books/confirm') ?>" method="post">
          <input type="text" name="isbn" placeholder="Adicionar um Livro (ISBN)" class="input" />
          <input type="submit" value="Continuar &#10142;" class="ui button blue"/>
        </form>
      </div>

      <!-- footer right -->
      <div class="footer-right">
        <h3><?= $this->session->userdata('logged')['email'] ?></h3>
        <ul>
          <li><a href="<?= base_url('/books/my') ?>">Meus Livros</a></li><small>,</small>
          <li><a href="<?= base_url('/invites') ?>">Convites</a></li> <small>ou</small>
          <li><a href="<?= base_url('/login/logout') ?>">Sair</a></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
  </body>
</html>
