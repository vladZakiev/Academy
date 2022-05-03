<?php 
    require_once ('../db_conectio.php');
    require_once ('../auth_session.php');
    $sql = "SELECT * FROM posts";
    $result = mysqli_query($db_connect, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<?php require_once ('../header.php') ?>
    <body>
        <div class="posts">
            <div class="container">
                <div class="posts_wrapper">
                <?php foreach($posts as $post){?>
                    <div class="posts_wrapper_post">
                        <img class="posts_wrapper_post_img" src="http://<?php echo($_SERVER["HTTP_HOST"]) ;?>/dashboard/upload/<?php echo $post['post_file']; ?>">
                        <h3 class="posts_wrapper_post_title"><?php echo  ($post['post_title'])?></h3>
                        <p class="posts_wrapper_post_content"><?php echo substr($post['post_content'],0,80);?></p>
                        <a href="single_post.php?id=<?php echo $post['id']?>">Read</a>
                    </div>
                    <?php }?>
                </div>
                
            </div>
        </div> 
    </body>
<?php require_once ('../footer.php') ?>

