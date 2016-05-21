<a href="<?= base_url('/books/form') ?>">Refazer Consulta</a>

<br /><br />

<? if(!$size == 0): ?>
  <form action="<?= $action ?>" method="post">
    <input type="hidden" name="cover" value="<?= $book['cover'] ?>" />
    <input type="hidden" name="title" value="<?= $book['title'] ?>" />
    <input type="hidden" name="authors" value="<?= $book['authors'] ?>" />
    <input type="hidden" name="pages" value="<?= $book['pageCount'] ?>" />
    <input type="hidden" name="publisher" value="<?= $book['publisher'] ?>" />
    <input type="hidden" name="description" value="<?= $book['description'] ?>" />

    <img src="<?= $book['cover'] ?>" />
  
    <p>Titulo: <?= $book['title'] ?></p>
       
    <p>Autor: <?= $book['authors'] ?></p>
    
    <p>Paginas: <?= $book['pageCount'] ?></p>
          
    <p>Editora: <?= $book['publisher'] ?></p>

    <p>Descricao: <?= $book['description'] ?></p>
  
    <input type="submit" value="Confirmar & Salvar" />
  </form>
<? else: ?>
  <p>Livro Nao Encontrado</p>
<? endif; ?>
