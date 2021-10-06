<section id="conteudo">
	<header class="column">
		<h1>Detalhes do curso</h1>
	</header>

	<div class="detalhes">
		<ul>
			<li><b>Nome: </b><?=$cursos["nameCurso"];?></li>
			<li><b>Descrição: </b><?=$cursos["description"];?></li>
			<li><b>Site: </b><a href="https://www.unicesumar.edu.br/home/" target="_blank">Unicesumar</a></li>
			<li><b>Data de Inicio: </b><?=$cursos["dataStart"];?></li>
			<li><b>Data de Conclusão: </b><?=$cursos["dataFinish"];?></li>
		</ul>
	</div>

	<div class="ferramentas">
		<a href="apagar_curso.php" class="botao">Apagar</a>
		<a href="cursos.php" class="botao">Voltar</a>
	</div>
</section>