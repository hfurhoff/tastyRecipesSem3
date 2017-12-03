                <p>
                    You can submit a comment with the form below as user: <?php echo $contr->getUser();?>
                </p>
                <br>
                <form name="commentform" action="<?php echo $currentPage;?>" method="post">
                    <textarea
                        name="comment"
                        rows="2"
                        cols="25"
                        placeholder="Feel free to submit a comment...">
                    </textarea>
                    <input type="submit" value="Submit comment"/>
                </form>'
