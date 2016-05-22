<? if(isset($message)): ?>
  <?= $message ?>
<? endif; ?>

<br />

<form action="<?= base_url('/login/authenticate') ?>" method="post">
  E-mail <br />
  <input type="text" name="email" />

  <br />
  
  Senha <br />
  <input type="password" name="password" />

  <br />
  
  <input type="submit" value="Fazer Login" />
</form>
