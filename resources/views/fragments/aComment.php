<div class="postedcomment">
    <p class="commentauthor">
        At <?php echo $dateAndTime . " " . $author;?> wrote:
    </p>
    <p class="comment">
        <?php echo $comment;?>
    </p>
    <?php
        if($loggedIn){
            if($contr->getUser() == $author){
                include 'deleteform.php';
            }
        }
    ?>
</div>