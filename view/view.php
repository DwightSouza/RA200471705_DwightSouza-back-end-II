<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Gerenciamento de Alunos e Cursos</title>	
		
		<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
		<link href="https://fonts.googleapis.com/css?family=Dosis|Source+Sans+Pro&display=swap" rel="stylesheet">
	</head>
	<body>
		<header id="header">
			<div class="logotipo">
				<img src="../imagens/logotipo.png" />
				<div>
					<h1>Gerenciamento de Alunos e Cursos</h1>
					<span><a href="https://www.unicesumar.edu.br/home/" target=blank>Unicesumar</span>
				</div>
			</div>
			<nav class="menu">
				<a href="alunos.php"><span>Alunos</span></a>
				<a href="cursos.php"><span>Cursos</span></a>
			</nav>
		</header>
		
		<div id="wrapper">
			<?php include($conteudo);?>
		</div>

		<footer>
			<ul>
				<li><b>Aluno: </b> Dwight Almeida de Souza</li>
				<li><b>RA: </b> 20047170-5</li>
				<li><b>Polo: </b> Itajaí - SC</li>
				<li><b><a href ="https://github.com/DwightSouza/Perfil" target=blanck></b>GitHub</li>
				<li><b></li><a href ="https://www.linkedin.com/in/dwight-souza-0112a474/" target=blanck></b>Linkedin</li>
			</ul>
		</footer>
	</body>
</html>