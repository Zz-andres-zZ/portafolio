<?php 
require "view/layout/head.php"; 
require "app/model/Database.php";
?>

<header class="sticky-top">
    <?php require "view/layout/include/header.php"; ?>
</header>

<main>
    <?php require "app/controller/view_controller.php"; ?>
    <button type="button" class="btn btn-dark btn-floating btn-sm rounded-circle" id="scroll-top">
        <i class="bi bi-chevron-up text-white"></i>
    </button>
</main>

<footer>
    <?php require "view/layout/footer.php"; ?>