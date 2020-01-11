<?php

// Определяем какой контроллер будет использоваться
$controllerName = isset( $_GET['controller'] ) ? ucfirst( $_GET['controller'] ) : 'Index';
echo 'Подключаемый php файл (Контроллер): ' . $controllerName . '<br />';

// Определяем какой экшн будет использоваться
$actionName = isset( $_GET['action'] ) ? $_GET['action'] : 'index';
echo 'Функция формирующая страницу (Экшн): ' . $actionName . '<br />';

// Подключаем файл с указанным контроллером
include_once '../controllers/' . $controllerName . 'Controller.php';

testAction();