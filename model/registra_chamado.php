<?php
session_start();
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

if($_POST['titulo'] == "" || $_POST['descricao'] == ""){
     
}else{
//Abrindo aquivo
$arquivo = fopen('../../../app_help_desk/model/arquivo.dd', 'a');
//Escrevendo no arquivo
fwrite($arquivo, $texto);
//Fechando arquivo
fclose($arquivo);

}
header('Location: ../view/abrir_chamado.php');

?>