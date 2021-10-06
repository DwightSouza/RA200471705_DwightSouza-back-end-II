<?php

class alunos {
	private function listarAlunos(){
		include("../model/conexao.php");

		$dados = array();

		$query = $conn->query("SELECT * FROM alunos");
		while($registo = $query->fetch_assoc()){
			$dados[] = $registo;
		}

		return $dados;
	}

	private function getdetalhes(){
		include("../model/conexao.php");

		$id = $_GET["id"];

		$query = $conn->query("SELECT * FROM alunos Where id = $id");

		$dados = $query->fetch_assoc();

		return $dados;
	}


	private function inserirAlunos(){
		include("../model/conexao.php");

		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$course = $_POST["course"];
		$phone = $_POST["phone"];

{
			$query = $conn->query("INSERT INTO alunos(name,email,password,course,phone) values('$nome','$email','$password','$course','$phone')");
			
			if(!$query){
				return "Houve um erro SQL na inserção dos dados";
			}else{
				return "Aluno cadastrado com sucesso!";
			}
		}
	}

	public function exibirView(){
		if(isset($_GET["acao"])){

			switch($_GET["acao"]){
				case "cadastro":
					$conteudo = "../view/alunos/cadastro.php";
					break;

				case "detalhes":
					$alunos = $this->getdetalhes();
					$conteudo = "../view/alunos/detalhes.php";
					break;

				case "inserir_alunos":
					$mensagem = $this->inserirAlunos();
					$redirecionar = "alunos.php";
					$conteudo = "../view/mensagem.php";
			}
		} else {
			$alunos = $this->listarAlunos();
			$conteudo = "../view/alunos/lista.php";
		}

		include("../view/view.php");
	}
}

$alunos = new alunos;
$alunos->exibirView();