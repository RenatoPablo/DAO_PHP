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
// $usuario = new Usuario();
// $usuario->login("Camila", "123456");

// echo $usuario;

//CRIANDO UM NOVO USUARIO
// $aluno = new Usuario("Djhulia", "abc");
// $aluno->insert();
// echo $aluno;


//ALTERAR UM USUARIO
/*$usuario = new Usuario();

$usuario->loadById(1);

$usuario->update("Renato", "123");

echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(6);

$usuario->delete();

echo $usuario;

?>