<div class="page">
  <div class="page-in">
    <div class="admin">
      <h1>Convites <a href="<?= base_url('/invites/form') ?>" class="ui button mini blue">Novo Convite</a></h1><br />

      <table class="table">
        <tr>
          <th>e-mail</th>
          <th>opções</th>
        </tr>
        <? foreach($invites as $invite): ?>
          <tr>
            <td><?= $invite->email ?></td>
            <td>
              <a href="<?= base_url('/invites/destroy/'.$invite->id) ?>" class="ui button mini">Excluir</a>
            </td>
          </tr>
        <? endforeach; ?>
      </table>

    </div>
  </div>
</div>
