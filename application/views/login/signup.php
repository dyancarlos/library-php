<form action="<?= base_url('/users/create') ?>" method="post">
  <h1>novo usuário</h1>

  <br /><br />

  <div class="field">
    <input type="text" name="name" placeholder="Nome" />
  </div>

  <div class="field">
    <input type="text" name="email" placeholder="E-mail" />
  </div>

  <div class="field">
    <input type="password" name="password" placeholder="Senha" />
  </div>

  <div class="field">
    <input type="password" name="password_confirmation" placeholder="Repita a Senha" />
  </div>

  <br />
  
  <input type="submit" value="Criar minha Conta" class="ui button blue full-size" /><br /><br />
  <a href="<?= base_url('/login') ?>" class="ui button green full-size">Voltar para Login</a>
</form>

