<?php
/**
 * Comments File.
 *
 * @package ByteBunch
*/
?>

    <div class="web_boxp commentform p-3" style="background: #fff;">	
        <div id="respond" class="comment-respond">
            <h3 id="reply-title" class="comment-reply-title">Leave a Reply 
                <small>
                    <a rel="nofollow" id="cancel-comment-reply-link" href="" style="display:none;">Cancel reply</a>
                </small>
            </h3>
            <form action="" method="post" id="commentform" class="comment-form">
                <p class="comment-notes">We're glad you have chosen to leave a comment. Please keep in mind 
                    that all comments are moderated according to our comment policy, and all links are nofollow. 
                    Let's have a personal and meaningful conversation.
                </p>
                <p class="comment-form-comment">
                    <label for="comment">Comment</label>
                    <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                </p>
                <div class="row">
                    <div class="col-sm-4">
                        <p class="comment-form-author">
                            <input id="author" name="author" type="text" value="" placeholder="Name" required="required">
                        </p>
                    </div><!--col-sm-4-->
                    <div class="col-sm-4">
                        <p class="comment-form-email">
                            <input id="email" name="email" type="text" value="" placeholder="Email" required="required">
                        </p>
                    </div><!--col-sm-4-->
                    <div class="col-sm-4">
                        <p class="comment-form-url">
                            <input id="url" name="url" type="text" value="" placeholder="Website">
                        </p>
                    </div><!--col-sm-4-->
                </div><!--row-->
                <p class="form-submit">
                    <input name="submit" type="submit" id="submit" class="submit" value="Post Comment" style="width:30% !important;"> 
                    <input type="hidden" name="comment_post_ID" value="<?php get_the_ID(); ?>" id="comment_post_ID">
                </p>
            </form>	
        </div><!-- #respond -->
    </div><!--web_boxp-->
    
