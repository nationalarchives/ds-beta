<?php $title = "Collection explorer" ?>
<?php $mobile_only = true ?>
<?php require_once '../../includes/head.php' ?>
<?php require_once './functions.php' ?>
<main class="explorer">
    <?php require_once '../../includes/header-and-nav-bar.php' ?>
    <div class="container">
        <?php require_once('../../includes/explorer/v2/home-page-cards.php'); ?>
        <?php require_once('../../includes/explorer/v2/popular-today.php'); ?>
        <?php require_once('../../includes/explorer/v2/featured.php'); ?>
    </div>
</main>
<?php require_once '../../includes/footer.php' ?>
