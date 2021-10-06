<section id="conteudo">
	<header class="column">
		<h1>Cursos</h1>
		
		<div class="ferramentas">
			<a href="cursos.php?acao=cadastro" class="botao">Cadastrar novo curso</a>
		</div>
	</header>

	<ul class="lista">
		<?php
		foreach($cursos as $curso){
			?>
			<a href="cursos.php?acao=detalhes&id=<?=$curso["Id"];?>">
				<li>
					<div>

						<h1><?=$curso["nameCurso"];?></h1>

					</div>
				</li>
			</a>
			<?php
		}
		?>
	</ul>
</section>