<?php

class cursos {
	private function listarCursos(){
		include("../model/conexao.php");

		$dados = array();

		$query = $conn->query("SELECT * FROM cursos");
		while($registo = $query->fetch_assoc()){
			$dados[] = $registo;
		}

		return $dados;
	}

	private function getdetalhes(){
		include("../model/conexao.php");

		$id = $_GET["id"];

		$query = $conn->query("SELECT * FROM cursos Where id = $id");

		$dados = $query->fetch_assoc();

		return $dados;
	}

	private function inserirCurso(){
		include("../model/conexao.php");

		$curso = $_POST["curso"];
		$descricao = $_POST["descricao"];
		$inicio = $_POST["inicio"];
		$conclusao = $_POST["conclusao"];

{
		$query = $conn->query("INSERT INTO cursos(nameCurso,description,dataStart,dataFinish)values('$curso','$descricao','$inicio','$conclusao')");

			if(!$query){
				return "Houve um erro SQL durante a inserção dos dados";
			}else{
				return "Curso cadastrado com sucesso!";
			}
		}
	}

	public function exibirView(){
		if(isset($_GET["acao"])){

			switch($_GET["acao"]){
				case "cadastro":
					$conteudo = "../view/cursos/cadastro.php";
					break;

				case "detalhes":
					$cursos = $this->getdetalhes();
					$conteudo = "../view/cursos/detalhes.php";
					break;

				case "inserir_curso":
					$mensagem = $this->inserirCurso();
					$redirecionar = "cursos.php";
					$conteudo = "../view/mensagem.php";
			}
		} else {
			$cursos = $this->listarcursos();
			$conteudo = "../view/cursos/lista.php";
		}

		include("../view/view.php");
	}
}

$cursos = new cursos;
$cursos->exibirView();