<?php require_once "app/controller/validate_form_message.php"; ?>
<section id="contact">
    <?php if (isset($data)) { ?>
        <?php if (count($data) > 0) { ?>
            <?php for ($i = 0; $i < count($data); $i++) { ?>
                <div class="alert alert-danger rounded-0 border-0 p-1 m-0 text-center" role="alert">
                    <p class="alert-heading m-0"><?= $data[$i] ?></p>
                </div>
            <?php } ?>
        <?php } else { ?>
            <?php
            require_once "app/controller/message_controller.php";
            $send_message = new Mailto();
            $send_message->setMessage($fname, $email, $asunto, $message);
            ?>
            <div class="alert alert-primary rounded-0 border-0 py-3 px-4 m-0" role="alert">
                <p class="alert-heading text-center m-0">
                    Su message se ha enviado con exito
                    redireccionando ...
                </p>
            </div>
            <script>
                setTimeout(() => {
                    window.location.href = "home";
                }, 5000);
            </script>
        <?php } ?>
    <?php } ?>
    <div class="container">
        <h1 class="display-1">¡Contactame!</h1>
        <div class="row m-0">
            <!-- SECTION DE INF -->
            <div class="col-12 col-lg-6 order-1 order-lg-0">
                <p class="contact-title">...</p>
                <div class="content-box">

                    <div class="box-service">
                        <div class="card border">
                            <div class="card-body">
                                <div class="inf">
                                    <i class="bi bi-envelope-plus icon-mail"></i>
                                    <h5 class="card-title">Email</h5>
                                </div>
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
                                <div class="inf">
                                    <i class="bi bi-whatsapp icon-whatsap"></i>
                                    <h5 class="card-title">Whatsapp</h5>
                                </div>
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
                                <div class="inf">
                                    <i class="bi bi-github icon-git"></i>
                                    <h5 class="card-title">Github</h5>
                                </div>
                                <a href="https://github.com/Zz-andres-zZ" target="_blank" class="nav-link c">
                                    Conectate
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="iframe">
                    <div class="card border-0">
                        <div class="card-body pb-1">
                            
                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31369.884485749208!2d-71.61828903797607!3d10.638799515516336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8999ad6c3180c3%3A0xc20e77a97275b910!2sLibertador!5e0!3m2!1ses!2sve!4v1688048293132!5m2!1ses!2sve"  width="100%" frameborder="0" style="height:260px;border-radius:5px;" allowfullscreen="on" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION DE CONTACT -->
            <div class="col-12 col-lg-6">
                <p class="contact-title">Escríbeme tu proyecto</p>
                <div class="text-center">
                    <form class="form-control" method="POST" aria-autocomplete="true" autocomplete="on">

                        <!-- Name / Lasname -->
                        <div class="row row-cols-1 row-cols-sm-2 mb-2 mb-md-3">
                            <div class="box mb-2 mb-sm-0">
                                <i class="bi bi-person-fill"></i>
                                <input name="fname" type="text" placeholder="Nombre" autofocus class="form-control" require>
                            </div>
                            <div class="box">
                                <i class="bi bi-person-fill"></i>
                                <input name="lname" type="text" placeholder="Apellido" class="form-control" require>
                            </div>
                        </div>

                        <!-- Direction / Codepostal -->
                        <div class="row row-cols-1 row-cols-sm-2 mb-2 mb-md-3">
                            <div class="box mb-2">
                                <i class="bi bi-pin-map-fill"></i>
                                <input name="direction" type="text" placeholder="Direccion" class="form-control" require>
                            </div>
                            <div class="box">
                                <i class="bi bi-telephone"></i>
                                <input name="telephone" type="tel" placeholder="+58 412 12345678" class="form-control">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="row mb-2 mb-md-3">
                            <div class="box email-100">
                                <i class="bi bi-envelope-at"></i>
                                <input name="email" type="email" placeholder="Correo electrónico" class="form-control" require>
                            </div>
                        </div>

                        <!-- Asunto / Telephone -->
                        <div class="row row-cols-1 row-cols-sm-2 mb-2 mb-md-3">
                            <div class="box motivo-100">
                                <div class="w-100 d-flex">
                                    <i class="bi bi-exclamation"></i>
                                    <select class="form-select content-input" name="asunto" id="">
                                        <option>Motivo de contacto</option>
                                        <option value="newProyect">Nuevo proyecto</option>
                                        <option value="greetingThanks">Saludo & Agradecimientos</option>
                                        <option value="QuestionDoubts">Pregunta & dudas</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Information -->
                        <div class="row mb-0 mb-md-3">
                            <div class="col" style="padding:0">
                                <textarea class="form-control" id="message" name="message" placeholder="Introduzca su masaje aquí. Me pondre en contacto con usted dentro de 2 días hábiles." rows="4" require></textarea>
                            </div>
                        </div>

                        <!-- Button / svg -->
                        <div class="row m-0">
                            <div class="col">
                                <div class="position position-relative">
                                    <input type="submit" name="enviar" value="Enviar mensage" class="btn btn-dark">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="block">
                                        <path d="M14.2199 21.9352C13.0399 21.9352 11.3699 21.1052 10.0499 17.1352L9.32988 14.9752L7.16988 14.2552C3.20988 12.9352 2.37988 11.2652 2.37988 10.0852C2.37988 8.91525 3.20988 7.23525 7.16988 5.90525L15.6599 3.07525C17.7799 2.36525 19.5499 2.57525 20.6399 3.65525C21.7299 4.73525 21.9399 6.51525 21.2299 8.63525L18.3999 17.1252C17.0699 21.1052 15.3999 21.9352 14.2199 21.9352ZM7.63988 7.33525C4.85988 8.26525 3.86988 9.36525 3.86988 10.0852C3.86988 10.8052 4.85988 11.9052 7.63988 12.8252L10.1599 13.6652C10.3799 13.7352 10.5599 13.9152 10.6299 14.1352L11.4699 16.6552C12.3899 19.4352 13.4999 20.4252 14.2199 20.4252C14.9399 20.4252 16.0399 19.4352 16.9699 16.6552L19.7999 8.16525C20.3099 6.62525 20.2199 5.36525 19.5699 4.71525C18.9199 4.06525 17.6599 3.98525 16.1299 4.49525L7.63988 7.33525Z" fill="var(--color-white)"></path>
                                        <path d="M10.11 14.7052C9.92005 14.7052 9.73005 14.6352 9.58005 14.4852C9.29005 14.1952 9.29005 13.7152 9.58005 13.4252L13.16 9.83518C13.45 9.54518 13.93 9.54518 14.22 9.83518C14.51 10.1252 14.51 10.6052 14.22 10.8952L10.64 14.4852C10.5 14.6352 10.3 14.7052 10.11 14.7052Z" fill="var(--color-white)"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>