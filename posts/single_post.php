<?php 
    require_once ('../db_conectio.php');
?>
<?php 
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($db_connect, $_GET['id']);
        $sql = "SELECT * FROM posts WHERE id = $id";
        $result = mysqli_query($db_connect,$sql);
        $post = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($db_connect);
    }
?>
<?php require_once ('../header.php') ?>
    <body>
        <div class="single_post">
            <div class="container">
                <div class="single_post_wrapper">
                <?php if(!isset($post)){
                $post_error = "No such a Post!";
            }?>
            <img class="single_post_img" src="http://<?php echo($_SERVER["HTTP_HOST"]) ;?>/dashboard/upload/<?php echo $post['post_file']; ?>?>" alt="">
            <h3 class="single_post_title">
                <?php if (isset($post)){
                    echo $post['post_title'];
                }
                ?>    
                </h3>
                <h2 class="post_error"><?php if(isset($post_error)){
                    echo $post_error;}?>
                </h2>
                <a href="posts"><?php if(isset($post_error)){
                    echo "go back";
                }?></a>
            <p class="single_post_content"><?php if (isset($post)){
                    echo $post['post_content'];
                }?></p>
                </div>
                <button class="go_back"><a href="/posts">Go back</a></button>
            </div>
        </div> 
    </body>
<?php require_once ('../footer.php') ?>
