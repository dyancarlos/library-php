<div class="books">
  <div class="books-in">
    <?php foreach($books as $book): ?>

      <div class="book">
        <img src="<?= $book->cover ?>" />
      </div>

    <?php endforeach; ?>
  </div>
</div>
