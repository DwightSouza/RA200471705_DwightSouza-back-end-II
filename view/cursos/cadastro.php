<section id="conteudo">
	<header class="column">
		<h1>Cadastrar Cursos</h1>
	</header>

	<form method="post" action="cursos.php?acao=inserir_curso">
		<div class="campos">
			<div style="width:50%;">
				<label>Curso</label>
				<input name="curso" type="text" />
			</div>
		</div>

		<div class="campos">
			<div style="width:50%;">
				<label>Descrição</label>
				<input name="descricao" type="text" />
			</div>
			
		</div>
		
		<div class="campos">
			<div style="width:30%;">
				<label>Inicio</label>
				<input name="inicio" type="text" />
			</div>
			
			<div style="width:20%;">
				<label>Conclusão</label>
				<input name="conclusao" type="text" />
			</div>
		</div>
	
		<div class="ferramentas borda cima">
			<input class="botao" type="submit" value="Salvar!" />
			<a href="cursos.php" class="botao cinza">Voltar</a>
		</div>
	</form>
</section>