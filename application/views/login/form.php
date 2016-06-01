<? if(isset($message)): ?>
  <div class="message">
    <?= $message ?>
  </div>
<? endif; ?>

<br />

<form action="<?= base_url('/login/authenticate') ?>" method="post">
  <h1>login</h1>

  <br /><br />

  <div class="field">
    <input type="text" name="email" placeholder="E-mail" />
  </div>

  <div class="field">
    <input type="password" name="password" placeholder="Senha" />
  </div>

  <br />
  
  <input type="submit" value="Fazer Login" class="ui button blue full-size" /><br /><br />
  <a href="<?= base_url('/login/signup') ?>" class="ui button green full-size">Criar minha Conta</a>
</form>

