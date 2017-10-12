<!DOCTYPE html>
<html>

<head>
	<title>Cadastro de Produtos</title>
	
	<meta charset="utf-8">

	<link rel="stylesheet" href="assets/bootstrap.css"></link>
	<link rel="stylesheet" href="assets/style.css"></link>
</head>

<body>
	<main class="principal">
		<section class="logo">
			<img src="img/home.png">
			<h3><a href="?">Produtos</a></h3>
		</section>
		<section class="conteudo">
			<div class="lista-menu">
				<ul>
					<li>
						<a href="?page=lista">
							Lista de Produtos
						</a>
					</li>
					<li>
						<a href="?page=cadastrar">
							Cadastrar um Produto
						</a>
					</li>
				</ul>
			</div>

			<div class="modulo">
				<?php 
					if (isset($_GET['page'])):
					 require_once('./sections/' . $_GET['page'] . '.php');
				?>

				<?php else: ?>

					<div class="carregar center">
						<h3>Seja bem-vindo!</h3>
						<img src="img/product.png">
						<p>Listar ou cadastrar um produto</p>
					</div>
				
				<?php endif ?>
			</div>
		</section>
		<section class="rodape">
			<a href="#">Contato</a>
			<a href="#">Suporte</a>
			<a href="#">Sobre</a>
		</section>
	</main>
</body>

</html>