<?php
//si controller pas objet
//  header('Location: controller/controller.php');

//si controller objet

//chargement Config
require_once(__DIR__ . '/Config/config.php');

//chargement autoloader pour autochargement des classes
require_once(__DIR__ . '/Config/Autoload.php');
Autoload::charger();

$cont = new ControleurUser();


?>