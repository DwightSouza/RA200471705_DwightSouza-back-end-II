<section id="conteudo">
	<header class="column">
		<h1>Cadastrar Alunos(as)</h1>
	</header>

	<form method="post" action="alunos.php?acao=inserir_alunos">
		<div class="campos">
			<div style="width:30%;">
				<label>Nome</label>
				<input name="nome" type="text" />
			</div>
			
			<div style="width:40%;">
				<label>E-mail</label>
				<input name="email" type="text" />
			</div>

			<div style="width:20%;">
				<label>Senha</label>
				<input name="password" type="text" />
			</div>

			<div style="width:30%;">
				<label>Telefone</label>
				<input name="phone" type="text" />
			</div>

			<div style="width:30%;">
				<label>Curso</label>
				<input name="course" type="text" />
			</div>

		</div>

		<div class="ferramentas borda cima">
			<input class="botao" type="submit" value="Salvar!" />
			<a href="alunos.php" class="botao cinza">Voltar</a>
		</div>
	</form>
</section>