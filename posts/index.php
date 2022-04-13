<?php 
    require_once ('../db_conectio.php');
    require_once ('../auth_session.php');
    $sql = "SELECT * FROM posts";
    $result = mysqli_query($db_conectio, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //echo $posts['post_title'];
    //print_r($posts);
    echo ('title     |      Content <br>');
    foreach($posts as $post){
        echo  ($post['post_title'] . ' ' . $post['post_content'] . ' link -> ' . $post['post_id'] . '<br>');
    }
    return $posts;
    
?>
<a href="['post_id']"></a>
