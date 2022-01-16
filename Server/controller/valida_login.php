<?php
session_start();

//Variável que verifica se a authenticação foi realizada
$user_auth = false;
$user_id = null;
$user_perfil_id = null;

$perfis = array(1 => 'adm', 2 => 'user');

//Usuários do sistema
$user_app = array(
    array('id' => '0', 'email' => 'adm@teste.com.br', 'password' => '123', 'perfil_id' => 1),
    array('id' => '1', 'email' => 'user@teste.com', 'password' => '123', 'perfil_id' => 2),
    array('id' => '2', 'email' => 'maria@teste.com', 'password' => '123', 'perfil_id' => 2),
);
foreach ($user_app as $user) {

    if ($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
        $user_auth = true;
       $user_id = $user['id'];
       $user_perfil_id = $user['perfil_id'];
    }
}
if ($user_auth) {
    $_SESSION['authenticated'] = 'Y';
    $_SESSION['id'] = $user_id;
    $_SESSION['perfil_id'] = $user_perfil_id;
    header('Location: ../view/home.php');
} else {
    $_SESSION['authenticated'] = 'N';
    header('Location: ../index.php?login=erro');
}
