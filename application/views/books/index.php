<div class="books">
  <div class="books-in">
    <?php foreach($books as $book): ?>

      <div class="book">
        <? if(empty($book->cover)): ?>
          <div class="book-cover">
            <img src="<?= base_url('assets/imgs/cover.png') ?>" />
            <p><?= $book->title ?></p>
          </div>          
        <? else: ?>
          <img src="<?= $book->cover ?>" />
        <? endif; ?>
      </div>

    <?php endforeach; ?>
  </div>
</div>
