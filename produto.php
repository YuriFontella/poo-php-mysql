<?php

require_once('./lib/db.php');
require_once('./lib/query.php');

if($_GET['action'] == "cadastrar")
{
  $query = Query::cadastrar();

  if ($query) {
    header('location: index.php?page=lista');
  } else {
    header('location: index.php?page=cadastrar&status=true');
  }
}

elseif($_GET['action'] == "deletar") {

  $query = Query::deletar();
  if ($query) {
    header('location: index.php?page=lista');
  }
}
