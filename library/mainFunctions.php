<?php
/*
 * Основные функции
 *
 */

/**
 * Делает обращение к нужному контроллеру и вызывает указанный экшн
 *
 * @param object $smarty объект класса шаблонизатора Smarty
 * @param string $controllerName название подключаемого контроллера
 * @param string $actionName название функции формирующей страницу
 */
function loadPage( $smarty, $controllerName, $actionName ) {

    // Подключаем контроллер
    $controllerPath = CONTROLLER_PATH_PREFIX . $controllerName . CONTROLLER_PATH_POSTFIX;
    include_once $controllerPath;

    // Вызываем указанный экшн
    $currentAction = $actionName . 'Action';
    if ( function_exists( $currentAction ) ) {
        call_user_func( $currentAction, $smarty );
    }
}

/**
 * Формирует страницу используя указанный шаблон $templateName
 *
 * @param object $smarty объект класса шаблонизатора Smarty
 * @param string $templateName имя вызываемого шаблона
 */
function loadTemplate($smarty, $templateName ) {
    $smarty->display( $templateName . TEMPLATE_POSTFIX );
}
