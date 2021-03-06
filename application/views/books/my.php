<div class="page">
  <div class="page-in">

    <div class="admin">
      <h1>Meus Livros <a href="<?= base_url('/books/pdf') ?>" class="ui button mini blue">Gerar PDF</a></h1><br />

      <table class="table">
        <tr>
          <th>título</th>
          <th>autor</th>
          <th>páginas</th>
          <th>editora</th>
          <th>opções</th>
        </tr>
        <? foreach($books as $book): ?>
          <tr>
            <td><?= $book->title ?></td>
            <td><?= $book->authors ?></td>
            <td><?= $book->pages ?></td>
            <td><?= $book->publisher ?></td>
            <td>
              <a href="<?= base_url('/books/destroy/'.$book->id) ?>" class="ui button mini">Excluir</a>
            </td>
          </tr>
        <? endforeach; ?>
      </table>
    </div>

  </div>
</div>
