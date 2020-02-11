<?php
/*
 * Контроллер главной страницы
 *
 */

/**
 * Тестовый экшн контроллера IndexController
 */
function testAction() {
    echo 'IndexController.php > testAction <br />';
}

/**
 * Определяет список переменных для страницы index и вызывает функцию для отображения шаблона loadTemplate()
 *
 * @param object $smarty объект класса шаблонизатора Smarty
 */
function indexAction( $smarty ) {
    $smarty->assign( 'pageTitle', 'Название главной страницы сайта' );
    loadTemplate( $smarty, 'index' );
}
