<?php

if ( isset($_POST['botao']) ){
    
 include_once '../Model/crud.php' ;   

$nome= $_POST['nome'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
$senha = md5($_POST['senha']);

$inserir = new crud();

$inserir->inserir_Usuario($nome,$email,$telefone,$senha);
       

}