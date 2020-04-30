/* functions.php */
function donate_shortcode( $atts, $content = null) {
global $post;extract(shortcode_atts(array(
'account' => 'your-paypal-email-address',
'for' => $post->post_title,
'onHover' => '',
), $atts));
if(empty($content)) $content='Make A Donation';
return '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business='.$account.'&item_name=Donation for '.$for.'" title="'.$onHover.'">'.$content.'</a>';
}
add_shortcode('donate', 'donate_shortcode');


/* shortcode */
[donate][/donate]
