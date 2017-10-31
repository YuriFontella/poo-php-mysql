<?php

require_once('./lib/db.php');
require_once('./lib/query.php');

if($_GET['action'] == "registro")
{
  $query = Query::registro();

  if ($query) {
    header('location: index.php?page=lista');

  } else {

    $id = $_POST['id'];

    if($id) {
      header('location: index.php?page=editar&status=true&id=' . $id);

    } else {
      header('location: index.php?page=registro&status=true');

    }
  }
}

elseif($_GET['action'] == "deletar") 
{

  $query = Query::deletar();
  if ($query) {
    header('location: index.php?page=lista');
  }

}
