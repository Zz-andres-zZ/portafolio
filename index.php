<?php
require_once "view/layout/head.php";
require_once "app/model/Database.php";
?>

<header class="sticky-top">
    <?php require_once "view/layout/include/header.php"; ?>
</header>

<main>
    <?php require_once "app/controller/view_controller.php"; ?>
    <div class="d-flex">
        <div class="elfsight-app-f7ac2c53-2a85-4f84-b559-13648b15a775"></div>
        <button type="button" class="btn btn-dark btn-floating btn-sm rounded-circle" id="scroll-top">
            <i class="bi bi-chevron-up text-white"></i>
        </button>
    </div>
</main>

<footer>
    <?php require_once "view/layout/footer.php"; ?>