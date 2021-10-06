<section id="conteudo">
	<header class="column">
		<h1>Detalhes do(a) aluno(a)</h1>
	</header>

	<div class="detalhes">

		<ul>
			<li><b>Nome: </b><?=$alunos["name"];?></li>
			<li><b>E-mail: </b><?=$alunos["email"];?></li>
			<li><b>Formação: </b><?=$alunos["course"];?></li>
		</ul>
	</div>

	<div class="ferramentas">
		<a href="apagar_aluno.php?" class="botao">Apagar</a>
		<a href="alunos.php" class="botao">Voltar</a>
	</div>
</section>

