<?php
require_once __DIR__."/../models/categoria.php";
session_start();

$nome = $_POST['nome'];


$categoria = New Categoria();
$categoria->inserir($nome);

$_SESSION['aviso'] = "categoria inserida com sucesso";
header('Location: /biblioteca/views/categoria/gerenciar_categorias.php');
exit();