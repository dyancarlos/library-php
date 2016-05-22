<?php
  if(!$this->session->userdata('logged'))
    redirect ('/login');
?>
<html>
<body>
  <div class="header">
    <h1>Header</h1>
    <a href="<?= base_url('/login/logout') ?>">Sair</a>
  </div>

  <br /><br />

  <div class="main">
    <?= $contents; ?>
  </div>
  
  <div class="footer">
    <h1>Footer</h1>
  </div>
</body>
</html>
