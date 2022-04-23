<?php
    include('../db_conectio.php');
    session_start();
    if (isset($_POST['publish'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $filename = $_FILES["fileToUpload"]["name"];
        $tempname = $_FILES["fileToUpload"]["tmp_name"];
        $location = "upload/";

        if(!is_dir($location)){
            mkdir($location, 0755);
        }
        $location .= $filename;
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $location);
        $allowed = array('png', 'jpg');
        $filename = $_FILES["fileToUpload"]["name"];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if (!in_array($ext, $allowed)) {
            $error_img = 'Please upload image in jpg or png';
        }
            else{
                if($title && $content){
                    $query = "INSERT INTO `posts` (`id`,`post_title`, `post_content`, `post_file`) VALUES (NULL, '$title', '$content', '$filename');";
                    mysqli_query($db_connect , $query);
                }
            }
        }
?>
<?php require_once ('../header.php') ?>
    <div class="dashboard_post_wrapper">
    <form class="dashboard_post_form" method="POST" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <h4 class="error"><?php if(isset ($error_img)){
                echo $error_img;   
            }
                ?></h4>
            <h3>Post Title:</h3>
            <input class="post_title" type="text" name="title" placeholder="title">
            <h3>Post Content:</h3>
            <div class="dashboard_post_content">
            <textarea class="post_content" name="content" placeholder="content"></textarea>
            <input class="publish_btn" type="submit" name="publish" value="Publish">
            <a class = "all_posts" href="/posts">See all posts >></a>
            </div>
    </form>
    </div>
<?php require_once ('../footer.php') ?>