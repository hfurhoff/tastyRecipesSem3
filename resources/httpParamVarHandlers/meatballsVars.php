<?php
$currentPage = 'meatballs.php';
if($loggedIn){
    if(!empty($_POST['comment'])){
        $commentToAdd = htmlentities($_POST['comment'], ENT_QUOTES);
        $contr->addComment($commentToAdd, 'meatballs');
    } else if (!empty($_POST['timestamp'])) {
        $contr->deleteComment($_POST['timestamp'], 'meatballs');
    }
}
$comments = $contr->getComments('meatballs');