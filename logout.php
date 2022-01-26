<?php
if(!isset($_SESSION)){
    session_start();
}

session_destroy();
header("location: Address where the login is located");