<!-- // link function -->
<?php
include("admin/class/function.php");
$obj = new adminBlog();
$getcat = $obj->display_category();
?>
<?php include_once("includes/head.php") ?>
<?php include_once("includes/preloader.php") ?>
<?php include_once("includes/header.php") ?>
<?php include_once("includes/banner.php") ?>
<?php include_once("includes/cta.php") ?>
<section class="blog-posts">
    <div class="container">
        <div class="row">
            <?php include_once("includes/blogpost.php") ?>
            <?php include_once("includes/sidebar.php") ?>
        </div>
    </div>
</section>
<!-- Footer -->
<?php include_once("includes/footer.php") ?>
<!--Script  -->
<?php include_once("includes/script.php") ?>