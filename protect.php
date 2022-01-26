<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['nome'])){
    die("você nao esta logado <p><a href=\"Address where the login is located\"> entrar </a></p>");
}


?>