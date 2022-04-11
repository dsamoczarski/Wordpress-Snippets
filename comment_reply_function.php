<?php 
    // muss in der functions.php hinterlegt werden

    function load_reply_script()
    {
      // lädt das Reply-Script nur, wenn verschachtelte Kommentare unter Diskussionen aktiviert ist  
      if (get_option('thread_comments')) {
          // und lädt das Script nur, wenn es eine single.php (Blogbeitrag) ist und die Kommentare noch nicht geschlossen sind
        if (is_single() && comments_open()) {
          wp_enqueue_script('comment-reply');
        }
      }
    }
    add_action('comment_form_before', 'load_reply_script');