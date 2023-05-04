<?php
$fname = "";
$lname = "";
$direction = "";
$postal = "";
$email = "";
$telephone = "";
$asunto = "";

if (isset($_POST['enviar'])) {
    $fname = (isset($_POST['fname']) ? $_POST['fname'] : "");
    $lname = (isset($_POST['lname']) ? $_POST['lname'] : "");
    $direction = (isset($_POST['direction']) ? $_POST['direction'] : "");
    $postal =  (isset($_POST['postal']) ? $_POST['postal'] : "");
    $email = (isset($_POST['email']) ? $_POST['email'] : "");
    $telephone = (isset($_POST['telephone']) ? $_POST['telephone'] : "");
    $asunto = (isset($_POST['asunto']) ? $_POST['asunto'] : "");

    $data = array();

    ($fname === "" ? array_push($data, "Debe ingresar su nombre") : "");
    ($lname === "" ? array_push($data, "Debe ingresar su apellido") : "");
    ($direction === "" ? array_push($data, "Debe ingresar su dirección") : "");
    ($postal === "" ? array_push($data, "Debe ingresar su codigo postal") : "");
    ($email === "" || strpos($fname, "@" === false) ? array_push($data, "Ingresa un correo electronico valido") : "");
    ($telephone === "" ? array_push($data, "Debe ingresar su telefono") : "");
    ($asunto === "" ? array_push($data, "Debes seleccionar al menos un asunto") : "");
}
