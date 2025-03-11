<?php

require_once("config.php");

//CARREGA UM USUARIO 
// $root = new Usuario();
// $root->loadById(4); 
//echo $root;

//CARREGA UMA LISTA DE USUARIOS
// $lista = Usuario::getList();
// echo json_encode($lista);

//CARREGA UMA LISTA DE USUARIO BUSCANDO PELO LOGIN
// $search = Usuario::search("Camila");
// echo json_encode($search);

//CARREGA UM USUARIO USANDO LOGIN E SENHA
$usuario = new Usuario();
$usuario->login("Camila", "123456");

echo $usuario;

?>