<div id="commentsection">
    <?php
    if($loggedIn){
        include 'commentform.php';
    } else {
        echo "<p>You need to login to submit a comment. <a href=\"login.php\">You can do that here</a>";
    }
    ?>
    <h3>Comments</h3>
    <?php
    if(count($comments) > 0){
        for($i = 0; $i < count($comments); $i++) {
            $author = $comments[$i]->getAuthor();
            $comment = $comments[$i]->getCommenttext();
            $timestamp = $comments[$i]->getTimestamp();
            $dateAndTime = $comments[$i]->getDateAndTime();
            include 'aComment.php';
        }
    } else {
        echo '<p>No comments have been made for this recipe yet. Feel free to be the first one!</p>';
    }

    ?>
</div>