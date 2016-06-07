<?php $this->load->view('commons/cabecalho'); ?>

<div class="container">
	<div class="page-header">
		<h1>Paginação de Resultados com CodeIgniter e Bootstrap</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php if($usuarios): ?>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
          </thead>
          <tbody>
            <?php foreach($usuarios as $usuario): ?>
            <tr>
              <td><?=$usuario->id?></td>
              <td><?=$usuario->nome?></td>
              <td><?=$usuario->email?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
			<?php echo $pagination; ?>
    <?php endif; ?>
		</div>
	</div>
</div>

<?php $this->load->view('commons/rodape'); ?>
