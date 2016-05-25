<div class="page">
  <div class="page-in">

    <div class="cover">
      <? if(empty($book->cover)): ?>
        <div class="alternative-cover">
          <img src="<?= base_url('assets/imgs/cover.png') ?>" />
          <p><?= $book->title ?></p>
        </div>          
      <? else: ?>
        <img src="<?= $book->cover ?>" />
      <? endif; ?>
    </div>

    <div class="book-infos">
      <h2><?= $book->title ?></h2>
      <p><?= $book->authors ?></p>
      <p><?= $book->pages ?> páginas</p>
      <p>Por: <b><?= $book->name ?></b></p>
    </div>

    <fieldset>
      <legend>Retirar esse Livro</legend>
      <? if($book->available): ?>
        <form action="<?= base_url('/rents/create') ?>" method="post">
          <input type="hidden" name="book_id" value="<?= $book->id ?>" />
          <input type="text" name="due_date" placeholder="Data de Devolução" class="input"/>
          <input type="submit" value="Retirar" class="ui button green" />
        </form>
      <? else: ?>
        <? if($last->user_id == $this->session->userdata('logged')['id']): ?>
          <a href="<?= base_url('/rents/give_back/'.$book->id)?>" class="ui button">Devolver</a>
        <? else: ?>
          <p><b>Já retirado por:</b> <?= $last->name ?></p>
        <? endif; ?>
      <? endif; ?>
    </fieldset>

    <div class="rent-history">
      <h2>Histórico de Retiradas</h2>
      <br />

      <table class="table">
        <tr>
          <th>retirada</th>
          <th>devolução</th>
          <th>usuário</th>
        </tr>
        <? foreach($rents as $rent): ?>
          <tr>
            <td><?= $rent->date ?></td>
            <td><?= $rent->due_date ?></td>
            <td><?= $rent->name ?></td>
          </tr>
        <? endforeach; ?>
      </table>
    </div>

  </div>
</div>
