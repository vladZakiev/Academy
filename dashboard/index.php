<?php
    include('../db_conectio.php');
    session_start();
    if (isset($_POST['publish'])){
        $title = $_POST['title'];
        $content = $_POST['content'];

        if($title && $content){
            $query = "INSERT INTO `posts` (`id`,`post_title`, `post_content`) VALUES (NULL, '$title', '$content');";
            mysqli_query($db_connect , $query);
        }
    }
?>
<?php require_once ('../header.php') ?>
<body>
    <div class="dashboard_post_wrapper">
    <form class="dashboard_post_form" method="POST">
            <h3>Post Title:</h3>
            <input class="post_title" type="text" name="title" placeholder="title">
            <h3>Post Content:</h3>
            <div class="dashboard_post_content">
            <textarea class="post_content" name="content" placeholder="content"></textarea>
            <input class="publish_btn" type="submit" name="publish" value="Publish">
            </div>
    </form>
    </div>
</body>
<?php require_once ('../footer.php') ?>