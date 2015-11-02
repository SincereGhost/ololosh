<?php
session_start();
require_once 'config.php';
require_once 'Model.php';


$login = new Model();

$res = $login->login($_POST);
print_r($res);
