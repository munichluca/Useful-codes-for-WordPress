/* functions.php */
function content_twitter_mention($content) {
return preg_replace('/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/', "$1<a href=\"http://twitter.com/$2\" target=\"_blank\" rel=\"nofollow\">@$2</a>", $content);
}
add_filter('the_content', 'content_twitter_mention');   
add_filter('comment_text', 'content_twitter_mention');
