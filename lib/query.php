<?php

class Query {

	private $connection;

	private function __construct() {
		$this->connection = Database::getInstance()->getConnection();
	}

	public function lista () {
		$connection = Database::getInstance()->getConnection();
		$result = $connection->query("SELECT * FROM produtos");

		if ($result) {
			return $result;

		} else {

			echo "Nenhum produto cadastrado!";
		}
	}

	public function cadastrar () {

		if($_POST['nome'] == null || $_POST['descricao'] == null) {
			return false;
		}

		$nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

		$connection = Database::getInstance()->getConnection();
		$result = $connection->query("INSERT INTO produtos (nome, descricao) VALUES ('$nome', '$descricao')");

		if ($result) {
			return true;

		} else {

			return false;
		}

  }

  public function deletar () {

    $id = $_GET['id'];

    $connection = Database::getInstance()->getConnection();
    $result = $connection->query("DELETE FROM produtos WHERE id = '$id'");

		if ($result) {
			return true;
		}
  }

}
