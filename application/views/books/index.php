<a href="<?= base_url("/books/form") ?>">Adicionar</a>

<br />

<?php foreach($books as $book): ?>
  <?= $book->title ?><br />
<?php endforeach; ?>
