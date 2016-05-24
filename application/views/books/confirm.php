<? if(!$size == 0): ?>
  <form action="<?= $action ?>" method="post">
    <input type="hidden" name="cover" value="<?= $book['cover'] ?>" />
    <input type="hidden" name="title" value="<?= $book['title'] ?>" />
    <input type="hidden" name="authors" value="<?= $book['authors'] ?>" />
    <input type="hidden" name="pages" value="<?= $book['pageCount'] ?>" />
    <input type="hidden" name="publisher" value="<?= $book['publisher'] ?>" />
    <input type="hidden" name="description" value="<?= $book['description'] ?>" />

    <div class="book-confirm">
      <div class="cover">
        <? if(empty($book['book'])): ?>
          <div class="alternative-cover">
            <img src="<?= base_url('assets/imgs/cover.png') ?>" />
            <p><?= $book['title'] ?></p>
          </div>          
        <? else: ?>
          <img src="<?= $book['cover'] ?>" />
        <? endif; ?>
      </div>
      
      <h2><?= $book['title'] ?></h2>
      <p><small><?= $book['authors'] ?></small></p>
      <p><small><?= $book['publisher'] ?></small></p>
      <p><small><?= $book['pageCount'] ?> páginas</small></p><br />
      <p class="description"><?= $book['description'] ?></p>

      <br />

      <input type="submit" value="Adicionar" class="ui button green small" />
      <a href="<?= base_url('/books') ?>" class="ui button basic red small">Cancelar</a>
    </div>
  </form>
<? else: ?>
  <div class="book-confirm">
    <h2>Livro não Encontrado!</h2><br />
    <a href="<?= base_url('/books') ?>" class="ui button small basic green">Voltar</a>
  </div>
<? endif; ?>
