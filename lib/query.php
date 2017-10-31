<?php

class Query {

	private $connection;

	private function __construct() {
		$this->connection = Database::getInstance()->getConnection(); // don't work :(
	}

	public function lista () {
		$connection = self::getConnection();
		$result = $connection->query("SELECT * FROM produtos");

		if ($result) {
			return $result;

		} else {

			echo "Nenhum produto cadastrado!";
		}
	}

	public function registro () {

		if($_POST['nome'] == null || $_POST['descricao'] == null) {
			return false;
		}

    $id = $_POST['id'];

		$nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

		$connection = self::getConnection();

    if($id) {

      $result = $connection->query("UPDATE produtos SET nome = '$nome', descricao = '$descricao' WHERE id = '$id'");

    } else {

		  $result = $connection->query("INSERT INTO produtos (nome, descricao) VALUES ('$nome', '$descricao')");
    }

		if ($result) {
			return true;

		} else {

			return false;
		}

  }

  public function deletar () {

    $id = $_GET['id'];

    $connection = self::getConnection();
    $result = $connection->query("DELETE FROM produtos WHERE id = '$id'");

		if ($result) {
			return true;
		}
  }

  public function editar() {
    $id = $_GET['id'];

    $connection = self::getConnection();
    $result = $connection->query("SELECT * FROM produtos WHERE id = '$id'");

    return mysqli_fetch_assoc($result);
  }

  private function getConnection () {
    return Database::getInstance()->getConnection();
  }

}
