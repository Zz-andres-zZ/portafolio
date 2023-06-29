<?php
require_once "view/layout/head.php";
require_once "app/model/Database.php";
?>

<header class="sticky-top">
    <?php require_once "view/layout/include/header.php"; ?>
</header>

<main>
    <?php require_once "app/controller/view_controller.php"; ?>
    <div class="d-flex" style="z-index:0;position: relative;">
        
        <button type="button" class="btn btn-dark btn-floating btn-sm rounded-circle" id="scroll-top">
            <i class="bi bi-chevron-up text-white"></i>
        </button>
    </div>
</main>
<footer>
    <?php require_once "view/layout/footer.php"; ?>