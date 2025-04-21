<?php

function slug($text,$divider = '-')
{
  $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  $text = trim($text, $divider);
  $text = strtolower($text);
  if (empty($text)) {
    return 'n-a';
  }
  return $text;
}


function status($value)
{
  if($value==1)
  {
    $string = '<span class="btn btn-success">Show</span>';
  }

  else if($value==0)
  {
    $string = '<span class="btn btn-danger">Hide</span>';
  }

  return $string;
}
