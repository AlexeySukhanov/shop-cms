<?php
/*
 * Файл настроек
 *
 */

header( 'Content-type: text/html; charset=utf-8' );
error_reporting(E_ALL);

//> Константы для обращения к контроллерам
define( 'CONTROLLER_PATH_PREFIX', '../controllers/' );
define( 'CONTROLLER_PATH_POSTFIX', 'Controller.php' );
//<

// Используемый шаблон
$template = 'default';

// Пути к файлам шаблонов (*.tpl)
define('TEMPLATE_PREFIX', "../views/{$template}/");
define('TEMPLATE_POSTFIX', '.tpl');

// Путь к файлам шаблонов в веб-пространстве
define('TEMPLATE_WEB_PATH', "/templates/{$template}/");

//> Инициализация шаблонизатора Smarty и его настройка
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TEMPLATE_PREFIX);
$smarty->setCompileDir('../tmp/smarty/templates_c/');
$smarty->setCacheDir('../tmp/smarty/cache/');
$smarty->setConfigDir('__DIR__');

// Указываем Smarty  где будут находиться вспомогательные переменные
$smarty->assign('templateWebPath', TEMPLATE_WEB_PATH);
//<


