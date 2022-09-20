<?php

if( post_password_required() ) {
    return;
}

?>

<div id="comments" class="comments-area">

<?php 

    comments_form();
    wp_list_comments();
?>


</div><!-- .comments-area -->