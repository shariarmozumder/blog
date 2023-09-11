<?php
$posts = $obj->display_post();

?>
<h1>Manage Post Views</h1>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Thumb</th>
                <th>Author</th>
                <th>Date</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($postdata = mysqli_fetch_assoc($posts)) {
                ?>
                <tr>
                    <td>
                        <?php echo $postdata['post_id'] ?>
                    </td>
                    <td>
                        <?php echo $postdata['post_title'] ?>
                    </td>
                    <td>
                        <?php echo $postdata['post_content'] ?>
                    </td>
                    <td><img height="100px" width="100px" src="../upload/<?php echo $postdata['post_img'] ?>" alt="">
                        <br>
                        <a href="edit_img.php?status=editimg&&id=<?php echo $postdata['post_id'] ?>">Change</a>
                    </td>
                    <td>
                        <?php echo $postdata['post_author'] ?>
                    </td>
                    <td>
                        <?php echo $postdata['post_date'] ?>
                    </td>
                    <td>
                        <?php echo $postdata['cat_name'] ?>
                    </td>
                    <td>
                        <?php if ($postdata['post_status'] == 1) {
                            echo "Published";
                        } else {
                            echo "UnPublished";
                        }
                        ?>
                    </td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-primary mr-2"
                                href="edit_post.php?status=editpost&&id=<?php echo $postdata['post_id'] ?>">Edit</a>
                            <a class="btn btn-danger" href="#">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>