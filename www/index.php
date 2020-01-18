<?php

include_once( '../config/config.php' );             // Инициализация настроек
include_once( '../library/mainFunctions.php' );     // Подключение основных функций

// Определяем какой контроллер будет использоваться
$controllerName = isset( $_GET['controller'] ) ? ucfirst( $_GET['controller'] ) : 'Index';

// Определяем какой экшн будет использоваться
$actionName = isset( $_GET['action'] ) ? $_GET['action'] : 'index';

loadPage( $controllerName, $actionName );

