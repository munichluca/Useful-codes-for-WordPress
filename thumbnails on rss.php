/* functions.php */
function wpfme_feed_post_thumbnail($content) {
global $post;
if(has_post_thumbnail($post->ID)) {
$content = '' . $content;
}
return $content;
}
add_filter('the_excerpt_rss', 'wpfme_feed_post_thumbnail');
add_filter('the_content_feed', 'wpfme_feed_post_thumbnail');
