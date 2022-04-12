<?php
    include('../db_conectio.php');
    session_start();
    if (isset($_POST['publish'])){
        $title = $_POST['title'];
        $content = $_POST['content'];

        if($title && $content){
            $query = "INSERT INTO `posts` (`id`,`post_title`, `post_content`) VALUES (NULL, '$title', '$content');";
            mysqli_query($db_connect , $query);
            echo $query;
        }
    }
    ?>
<?php require_once ('../header.php') ?>
<body>
<form method="POST">
            <input type="text" name="title" placeholder="title">
            <textarea name="content" placeholder="content"></textarea>
            <input type="submit" name="publish" value="Publish">
    </form>
</body>
<?php require_once ('../footer.php') ?>