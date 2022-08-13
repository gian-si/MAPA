<?php
	include("arrays.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Restaurante Dona Rita</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<header class="menu-header" id="home">
			<a href="index.php">
				<img src="imagens/logo.png" alt="logotipo do restaurante">
			</a>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#sobre">Sobre</a></li>
					<li><a href="#contato">Contato</a></li>
				</ul>
			</nav>
		</header>
		<main>
			<article>
				<div class="banner">
					<a href="#sobre" class="botao">SAIBA MAIS</a>
				</div>
			</article>
			<section class="main-pratos">
				<header class="main-pratos-header">
					<h1>Comida caseira, com tempero de Mãe!</h1>
					<p>Alimentação saudável, onde você estiver.</p>
				</header>
				<?php
					foreach($pratos as $key => $value){
				?>
				<article>
					<a href="pratos.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
					<h2><?=$value['nome'];?></h2>
					<p>Tamanho: <?=$value['tamanho'];?></p>
					<p>Preço: <?=$value['preco'];?></p>
					<p>Ingredientes: <?=substr($value['ingredientes'], 0, 20);?>...</p>
				</article>
				<?php
					}
				?>
			</section>
		</main>
		<footer>
			<div class="nav_footer">
				<p>Nossas páginas:</p>
				<a href="#home">Home</a>
				<a href="#sobre">Sobre</a>
				<a href="#contato">Contato</a>
			</div>
			<div class="nav_footer">
				<p>Links Úteis:</p>
				<a href="#">Politica de Privacidade</a>
				<a href="#">Termos de uso</a>
			</div>
			<div class="nav_footer">
				<p>Sobre o projeto:</p>
				<a href="#">Divulgação Restaurante Dona Rita.</a>
			</div>
		</footer>
			<div class="assinatura">
				<p>Criado por Gian Carlos Pereira F&eacute;lis &reg RA:21077308-5</p>
			</div>
	</body>

</html>