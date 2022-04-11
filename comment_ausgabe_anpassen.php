<?php
// muss in der functions.php hinterlegt werden

function format_comment($comment, $args, $depth)
{
    $userdata = '';
    $GLOBALS['comment'] = $comment;
    $add_below = 'comment'; // relevant 
    $user_image = get_bloginfo('template_url') . '/images/comment-anonymus.jpg';
?>
    <div <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">

        <div class="comment-pic">
            <img src="<?php echo $user_image; ?>" alt="">
        </div>
        <div class="comment-txt">
            <h3><?php comment_author_link(); ?> schrieb am <?php echo date('d.m.Y', strtotime($comment->comment_date)); ?></h3>
            <?php if ($comment->comment_approved == '0') : ?>
                <em><strong><?php _e('Dein Kommentar muss noch freigeschaltet werden.') ?></strong></em><br />
            <?php endif; ?>
            <?php comment_text(); ?>

            <?php comment_reply_link(array_merge($args, array('reply_text' => 'Antworten', 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment); ?>
        </div>
    </div>



<?php }


// muss in der comments.php hinterlegt werden, an der Stelle, an der die Kommentare ausgegeben werden sollen

$args = array(
    'type'              => 'all',
    'callback'      => 'format_comment',
);
wp_list_comments($args);
