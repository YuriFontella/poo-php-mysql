<section class="carregar">
	<table class="table">

		<thead>
			<tr>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Opções</th>
			</tr>
		</thead>

		<tbody>
			<?php
				$query = Query::lista();
				while ($row = mysqli_fetch_assoc($query)):
			?>

			<tr>
				<td><b><?php echo $row['nome'] ?></b></td>
				<td><i><?php echo $row['descricao'] ?></i></td>
				<td><a href="produto.php?action=deletar&id=<?php echo $row['id'] ?>" onclick="return confirm('Você tem certeza?');">Deletar</a></td>
			</tr>

			<?php endwhile ?>
		</tbody>
	</table>
</section>
