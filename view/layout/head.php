<!DOCTYPE html>
<html lang="es">
<?php $url = (isset($_GET['url']) ? $_GET['url'] : "");?>
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#160b37">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content= "width=device-width, user-scalable=no">
    <title>Mi portafolio</title>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                document.querySelector('.loadPage').style.display = "none";
                document.querySelector('#main').style.display = "block";
            }, 500);
        });
    </script>
    <base href="./">
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="asset/css/header.css">
    <link rel="stylesheet" href="asset/css/services.css">
    <link rel="stylesheet" href="asset/css/about.css">
    <link rel="stylesheet" href="asset/css/portafolio.css">
    <link rel="stylesheet" href="asset/css/contact.css">
    <link rel="stylesheet" href="asset/css/error.css">
    <link rel="stylesheet" href="asset/css/footer.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- STYLES BOOTSTRAP 5.3 -->
    <link rel="stylesheet" href="asset/vendor/bs/css/bootstrap.min.css">

    <!-- ICONS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body id="main">
    <div class="loadPage">
        <img src="asset/img/load/onload.gif">
    </div>