<style type="text/css" media="all">
table { width: 100%; border-collapse: collapse; }
table tr { border-bottom: 1px solid #ddd; }
table th {
  padding: 10px;
  text-align: left;
  font-variant: small-caps;
  font-size: 17px;
  background: #f5f5f5;
  border-top: 1px solid #DDD;
  font-weight: normal;
}
table td { padding: 10px; }
</style>

<div class="page">
  <div class="page-in">

    <div class="admin">
      <h1>Livros</h1><br />

      <table class="table">
        <tr>
          <th>título</th>
          <th>autor</th>
          <th>páginas</th>
          <th>editora</th>
        </tr>
        <? foreach($books as $book): ?>
          <tr>
            <td><?= $book->title ?></td>
            <td><?= $book->authors ?></td>
            <td><?= $book->pages ?></td>
            <td><?= $book->publisher ?></td>
          </tr>
        <? endforeach; ?>
      </table>
    </div>

  </div>
</div>

