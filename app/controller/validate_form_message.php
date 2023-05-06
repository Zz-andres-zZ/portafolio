<?php
$fname = "";
$email = "";
$asunto = "";
$message = "";

if (isset($_POST['enviar'])) {
    $fname = (isset($_POST['fname']) ? $_POST['fname'] : "");
    $email = (isset($_POST['email']) ? $_POST['email'] : "");
    $asunto = (isset($_POST['asunto']) ? $_POST['asunto'] : "");
    $message = (isset($_POST['message']) ? $_POST['message'] : "");

    $data = array();

    ($fname === "" ? array_push($data, "Debe ingresar su nombre") : "");
    ($email === "" || strpos($fname, "@" === false) ? array_push($data, "Ingresa un correo electronico valido") : "");
    ($asunto === "" ? array_push($data, "Debes seleccionar al menos un asunto") : "");
    ($message === "" ? array_push($data, "Debes ingresar un message") : ""); 
}
