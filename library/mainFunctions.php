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

/**
 * Останавливает выполнение программы и выводит значение переменной $value
 *
 * @param variant $value переменная значение которой будет выведено на страницу
 * @param boolean $run_program определяет будет ли продолжено выполнение программы после вывода $value
 */
function d( $value = null, $run_program = false ) {
    echo '<br>DEBUG..<br><pre>';
    print_r( $value );
    echo '</pre>';

    if ( !$run_program ) die('выполнение программы завершено( $run_program == false )');
}
