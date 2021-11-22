<?php

// Conexão 
include_once './php_action/db_connect.php';
// Header
include_once './includes/header.php';
// Mensagem
include_once './includes/message.php';
?>


<div class="row">
	<div class="col s12 m6 push-m3 ">
		<h3 class="light"> Clientes </h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome </th>
					<th>Sobrenome </th>
					<th>Email </th>
					<th>Idade </th>
					<th>Ações </th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM clientes";
				$resultado = mysqli_query($connect, $sql);
				while ($dados = mysqli_fetch_array($resultado)) :
				?>
					<tr>
						<td><?php echo $dados['nome'] ?></td>
						<td><?php echo $dados['sobrenome'] ?></td>
						<td><?php echo $dados['email'] ?></td>
						<td><?php echo $dados['idade'] ?></td>
						<td>
							<a href="editar.php?id=<?php echo $dados['id'] ?>" class="btn-floating orange"><i class="material-icons">edit</i></a>
							<a href="#modal<?php echo $dados['id'] ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a>
						</td>

						<!-- Modal Structure -->
						<div id="modal<?php echo $dados['id'] ?>" class="modal">
							<div class="modal-content">
								<h4>Atenção!</h4>
								<h6>Após a confirmação o cliente será excluido permanentemente, deseja prosseguir com a ação?</h6>
							</div>
							<div class="modal-footer">
								<form action="./php_action/delete.php" method="post">
									<input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
									<button type="submit" name="btn-deletar" class="btn green">Confirmar</button>
									<a href="#!" class="modal-close btn red">Cancelar</a>
								</form>
							</div>
						</div>

					</tr>
				<?php endwhile; ?>

			</tbody>
		</table>
		<br>
		<a href="adicionar.php" class="btn"> Adicionar Cliente </a>
	</div>
</div>

<?php
// Footer
include_once './includes/footer.php';

?>