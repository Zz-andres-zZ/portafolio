<?php

class Page_controller {
    public static function home() {
        require "view/welcome.php";
    }

    public static function about() {
        require "view/about.php";
    }

    public static function services() {
        require "view/services.php";
    }

    public static function portafolio() {
        require "view/portafolio.php";
    }

    public static function contact() {
        require "view/contact.php";
    }
    
    public static function not_found() {
        require "view/error.php";
    }
}