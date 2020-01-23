<?php
/*
 * Основные функции
 *
 */

/**
 * Формирование запрашиваемой страницы
 *
 * @param string $controllerName название подключаемого контроллера
 * @param string $actionName название функции формирующей страницу
 */
function loadPage($controllerName, $actionName ) {

    // Подключаем контроллер
    $controllerPath = CONTROLLER_PATH_PREFIX . $controllerName . CONTROLLER_PATH_POSTFIX;
    include_once $controllerPath;

    // Вызываем указанный экшн
    $currentAction = $actionName . 'Action';
    if ( function_exists( $currentAction ) ) {
        call_user_func( $currentAction );
    }
}
