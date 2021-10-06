<section id="conteudo">
	<header class="column">
		<h1>Alunos(as)</h1>
		
		<div class="ferramentas">
			<a href="alunos.php?acao=cadastro" class="botao">Cadastrar novo aluno(a)</a>
		</div>
	</header>

		<ul class="lista">
			<?php
			foreach($alunos as $aluno){
			?>
			<a href="alunos.php?acao=detalhes&id=<?=$aluno["Id"];?>">
				<li>
					<div>

						<h1><?=$aluno["name"];?></h1>

					</div>
				</li>
			</a>
			<?php
		}
		?>

	</ul>
</section>