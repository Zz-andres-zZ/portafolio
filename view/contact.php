<?php
$fname = "";
$lname = "";
$direction = "";
$postal = "";
$email = "";
$telephone = "";
$asunto = "";

if (isset($_POST)) {
    $fname = (isset($_POST['fname']) ? $_GET['fname'] : "");
    $lname = (isset($_POST['lname']) ? $_GET['lname'] : "");
    $direction = (isset($_POST['direction']) ? $_GET['direction'] : "");
    $postal =  (isset($_POST['postal']) ? $_GET['postal'] : "");
    $email = (isset($_POST['email']) ? $_GET['email'] : "");
    $telephone = (isset($_POST['telephone']) ? $_GET['telephone'] : "");
    $asunto = (isset($_POST['asunto']) ? $_GET['asunto'] : "");

    $data = array();

    ($fname === "" ? array_push($data, "Debe ingresar su nombre") : "");
    ($lname === "" ? array_push($data, "Debe ingresar su apellido") : "");
    ($direction === "" ? array_push($data, "Debe ingresar su dirección") : "");
    ($postal === "" ? array_push($data, "Debe ingresar su codigo postal") : "");
    ($email === "" || strpos($fname, "@" === false) ? array_push($data, "Ingresa un correo electronico valido") : "");
    ($telephone === "" ? array_push($data, "Debe ingresar su telefono") : "");
    ($asunto === "" ? array_push($data, "Debes seleccionar al menos un asunto") : "");
}

?>
<section id="contact">
    <div class="container">
        <p class="display-1 mb-5 text-center">¡Contactame!</p>
        <div class="border mb-4">
            <?php if (isset($data)) { ?>
                <?php if (count($data) > 0) { ?>
                    <?php for ($i = 0; $i < count($data); $i++) { ?>
                        <div class='bg-danger border text-white p-1 text-center'>
                            <ul class="navbar-nav">
                                <li class="nav-item"><?= $data[$i] ?></li>
                            </ul>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <div class='bg-success border text-white p-3 text-center'>Su mensaje se ha enviado con exito</div>
                    <?php header("location:/") ?>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="row m-0">
            <div class="col-12 col-lg-6">
                <div class="box-service">
                    <div class="card border">
                        <div class="card-body">
                            <i class="bi bi-envelope-plus icon-mail"></i>
                            <h5 class="card-title">Correo electrónico</h5>
                            <p>andresjhm.2440gmail.com</p>
                            <a href="mailto:andresjhm.2440@gmail.com" target="_blank" class="nav-link a">
                                Contactame
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-service">
                    <div class="card border">
                        <div class="card-body">
                            <i class="bi bi-whatsapp icon-whatsap"></i>
                            <h5 class="card-title">Whatsapp</h5>
                            <p>+58 412 4722123</p>
                            <a href="https://wa.me/584124722123?text=Hola%20saludos%20%F0%9F%91%8B%0A%0AGracias%20por%20tu%20interes%0Aen%20que%20puedo%20ayudarte.?" target="_blank" class="nav-link b">
                                Escribeme
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-service">
                    <div class="card border">
                        <div class="card-body">
                            <i class="bi bi-discord icon-discor"></i>
                            <h5 class="card-title">Discord</h5>
                            <a href="https://discord.gg/midudev" target="_blank" class="nav-link c">
                                Conectate
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="contact-title">Escríbeme tu proyecto</h3>
                <div class="text-center">
                    <form class="form-control" method="POST">

                        <!-- Name / Lasname -->
                        <div class="row row-cols-2 mb-3">
                            <div class="box">
                                <i class="bi bi-person-fill"></i>
                                <input name="fname" type="text" placeholder="Nombre" class="form-control " require>
                            </div>
                            <div class="box">
                                <i class="bi bi-person-fill"></i>
                                <input name="lname" type="text" placeholder="Apellido" class="form-control " require>
                            </div>
                        </div>

                        <!-- Direction / Codepostal -->
                        <div class="row row-cols-2 mb-3">
                            <div class="box">
                                <i class="bi bi-pin-map-fill"></i>
                                <input name="direction" type="text" placeholder="Direccion" class="form-control" require>
                            </div>
                            <div class="box">
                                <i class="bi bi-postcard-fill"></i>
                                <input name="postal" type="number" placeholder="Postal code" class="form-control" require>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="row mb-3">
                            <div class="box">
                                <i class="bi bi-envelope-at"></i>
                                <input name="email" type="email" placeholder="Correo electrónico" class="form-control" require>
                            </div>
                        </div>

                        <!-- Asunto / Telephone -->
                        <div class="row row-cols-2 mb-3">
                            <div class="box">
                                <i class="bi bi-telephone"></i>
                                <input name="telephone" type="tel" placeholder="+58 412 12345678" class="form-control">
                            </div>
                            <div class="box">
                                <div class="w-100 d-flex">
                                    <i class="bi bi-exclamation"></i>
                                    <select class="form-select" name="asunto" id="">
                                        <option>Motivo de contacto</option>
                                        <option value="newProyect">Nuevo proyecto</option>
                                        <option value="greetingThanks">Saludo & Agradecimientos</option>
                                        <option value="QuestionDoubts">Pregunta & dudas</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Information -->
                        <div class="row mb-3">
                            <div class="col">
                                <textarea class="form-control" id="message" name="message" placeholder="Introduzca su masaje para nosotros aquí. Nos pondremos en contacto con usted dentro de 2 días hábiles." rows="6" require></textarea>
                            </div>
                        </div>

                        <!-- Button / svg -->
                        <div class="row m-0">
                            <div class="col">
                                <input type="submit" name="enviar" value="Enviar mensage" class="btn btn-dark">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="block">
                                    <path d="M14.2199 21.9352C13.0399 21.9352 11.3699 21.1052 10.0499 17.1352L9.32988 14.9752L7.16988 14.2552C3.20988 12.9352 2.37988 11.2652 2.37988 10.0852C2.37988 8.91525 3.20988 7.23525 7.16988 5.90525L15.6599 3.07525C17.7799 2.36525 19.5499 2.57525 20.6399 3.65525C21.7299 4.73525 21.9399 6.51525 21.2299 8.63525L18.3999 17.1252C17.0699 21.1052 15.3999 21.9352 14.2199 21.9352ZM7.63988 7.33525C4.85988 8.26525 3.86988 9.36525 3.86988 10.0852C3.86988 10.8052 4.85988 11.9052 7.63988 12.8252L10.1599 13.6652C10.3799 13.7352 10.5599 13.9152 10.6299 14.1352L11.4699 16.6552C12.3899 19.4352 13.4999 20.4252 14.2199 20.4252C14.9399 20.4252 16.0399 19.4352 16.9699 16.6552L19.7999 8.16525C20.3099 6.62525 20.2199 5.36525 19.5699 4.71525C18.9199 4.06525 17.6599 3.98525 16.1299 4.49525L7.63988 7.33525Z" fill="var(--container-color)"></path>
                                    <path d="M10.11 14.7052C9.92005 14.7052 9.73005 14.6352 9.58005 14.4852C9.29005 14.1952 9.29005 13.7152 9.58005 13.4252L13.16 9.83518C13.45 9.54518 13.93 9.54518 14.22 9.83518C14.51 10.1252 14.51 10.6052 14.22 10.8952L10.64 14.4852C10.5 14.6352 10.3 14.7052 10.11 14.7052Z" fill="var(--container-color)"></path>
                                </svg>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>