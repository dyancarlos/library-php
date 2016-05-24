<div class="books">
  <div class="books-in">
    <?php foreach($books as $book): ?>

      <div class="book">
        <? if(empty($book->cover)): ?>
          <div class="book-cover">
            <a href="<?= base_url('/books/show/'.$book->id) ?>"><img src="<?= base_url('assets/imgs/cover.png') ?>" /></a>
            <p><a href="<?= base_url('/books/show/'.$book->id) ?>"><?= $book->title ?></a></p>
          </div>          
        <? else: ?>
          <a href="<?= base_url('/books/show/'.$book->id) ?>"><img src="<?= $book->cover ?>" /></a>
        <? endif; ?>
      </div>

    <?php endforeach; ?>
  </div>
</div>
