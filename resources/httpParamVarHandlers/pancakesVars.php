<?php
$currentPage = 'pancakes.php';
if($loggedIn){
    if(!empty($_POST['comment'])){
        $commentToAdd = htmlentities($_POST['comment'], ENT_QUOTES);
        $contr->addComment($commentToAdd, 'pancakes');
    } else if (!empty($_POST['timestamp'])) {
        $contr->deleteComment($_POST['timestamp'], 'pancakes');
    }
}
$comments = $contr->getComments('pancakes');