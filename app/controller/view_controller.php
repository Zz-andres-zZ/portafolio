<?php

/**
 * * ENRUTADOR DEL SITE
 * * LAS VISTAS SE CARGARAN DESDE EL CONTROLADOR
 */

require "app/controller/Page_controller.php";

$page_controller = Page_controller::class;

if (isset($_GET['url'])) {
    $path = $_GET['url'];

    switch ($path) {
        case 'home':
            $section_active = 'home';
            $page_controller::home();
            break;

        case 'about':
            $section_active = 'about';
            $page_controller::about();
            break;

        case 'services':
            $section_active = 'services';
            $page_controller::services();
            break;

        case 'portafolio':
            $section_active = 'portafolio';
            $page_controller::portafolio();
            break;

        case 'contact':
            $section_active = 'contact';
            $page_controller::contact();
            break;

        default:
            $section_active = '';
            $page_controller::not_found();
            break;
    }
} else {
    $section_active = 'home';
    require "./view/welcome.php";
}
