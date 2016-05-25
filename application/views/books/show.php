<p><?= $book->title ?></p>
<p><?= $book->authors ?></p>
<p><?= $book->pages ?></p>
<p><?= $book->name ?></p>

<br /><br />

<hr />

<br />

<? if($book->available): ?>
  <form action="<?= base_url('/rents/create') ?>" method="post">
    <input type="hidden" name="book_id" value="<?= $book->id ?>" />
    <input type="text" name="due_date" placeholder="Data de Devolução" class="input"/>
    <input type="submit" value="Retirar" class="ui button" />
  </form>
<? else: ?>
  <a href="<?= base_url('/rents/give_back/'.$book->id)?>" class="ui button">Devolver</a>
<? endif; ?>

<br /><br />

<hr />

<h1>Histórico de Retiradas</h1>
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
