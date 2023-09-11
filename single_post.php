<!-- // link function -->
<?php
include("admin/class/function.php");
$obj = new adminBlog();
$getcat = $obj->display_category();
if (isset($_GET["view"])) {
    if ($_GET["view"] = "postview") {
        $id = $_GET['id'];
        $single = $obj->get_post_info($id);
    }
}
?>
<?php include_once("includes/head.php") ?>
<?php include_once("includes/preloader.php") ?>
<?php include_once("includes/header.php") ?>
<?php include_once("includes/banner.php") ?>
<?php include_once("includes/cta.php") ?>
<section class="blog-posts">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <img width="700px" src="upload/<?php echo $single['post_img'] ?>" alt="" class="img-fuid">
                <h1 class="mt-4">
                    <?php echo $single["post_title"] ?>
                </h1>
                <p>
                    <?php echo $single["post_content"] ?>
                </p>
            </div>

            <?php include_once("includes/sidebar.php") ?>
        </div>
    </div>
</section>
<!-- Footer -->
<?php include_once("includes/footer.php") ?>
<!--Script  -->
<?php include_once("includes/script.php") ?>