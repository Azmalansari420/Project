<?php
function create_slug($string)
{
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   return strtolower($slug);
}

function get_timeago($ptime)
{
    $estimate_time = time() - $ptime;
    if( $estimate_time < 1 )
    {
        return 'less than 1 second ago';
    }
    $condition = array( 
                12 * 30 * 24 * 60 * 60  =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );
    foreach( $condition as $secs => $str )
    {
        $d = $estimate_time / $secs;
        if( $d >= 1 )
        {
            $r = round( $d );
            //return 'about ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
			return  $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
        }
    }
}

function get_date_with_time($date)
{
	return date('d-m-Y h:i:A',strtotime($date));
}

function encode_url($str)
{
	return $str; //urlencode(base64_encode($str));
}

function decode_url($str)
{
	return $str; //urldecode(base64_decode($str));
}

function get_cat_id($str)
{
	$create_array = explode('_',$str);
	return $create_array[1];
}

function create_image_unique($file_name)
{
	$array = explode('.',$file_name);
	$file_extension = end($array);
	$new_file = substr(str_shuffle('12345678910'),0,1).str_shuffle(time()).substr(str_shuffle('12345678910'),0,1).'.'.$file_extension;
	return $new_file;
}

function image_extension($file_name)
{
	$array = explode('.',$file_name);
	$file_extension = end($array);
	return $file_extension;
}

function check_profile_pic($dir,$file)
{
	if(is_file($dir.$file))
	{
		return base_url($dir).$file;
	}
	else
	{
		return base_url("assets/front/images/")."default-avatar.png";
	}
}

function delete_file($dir,$file)
{
	if(is_file($dir.$file))
	{
		return unlink($dir.$file);
	}	
}

function admin_caregory_breadcrumbs($data)
{
	if($data=='Root')
	{
		echo '<strong>Root</strong>';
	}
	else
	{
		echo $data;
	}	
}

function home_slider_class($no)
{
	if($no%2==0)
	{
		return 'slide_style_left';
	}
	else
	{
		return 'slide_style_right';
	}
	//slide_style_center
}

function inclusions( $values = array() ) {
	$options = array(
		'validate' => array(
							array(
								'type' => 'header_js',
								'value' => 'assets/js/validator'
							),
						),
		'datepicker' => array(
							array(
								'type' => 'css',
								'value' => 'assets/datepicker/datetimepicker.min'
							),
							array(
								'type' => 'js',
								'value' => 'assets/datepicker/moment.min'
							),
							array(
								'type' => 'js',
								'value' => 'assets/datepicker/datetimepicker.min'
							)
						),
		'chart' => array(
							array(
								'type' => 'header_js',
								'value' => 'assets/chart/charts'
							),
							array(
								'type' => 'header_js',
								'value' => 'assets/chart/light'
							),
							array(
								'type' => 'header_js',
								'value' => 'assets/chart/serial'
							)
						),
		'jquery-ui' => array(
							array(
								'type' => 'js',
								'value' => 'assets/js/jquery-ui.min'
							),
						),
		'jquery-browser' => array(
							array(
								'type' => 'header_js',
								'value' => 'assets/js/jquery-browser'
							)
						),
		'fancybox' => array(
							array(
								'type' => 'js',
								'value' => 'assets/fancybox/jquery.fancybox'
							),
							array(
								'type' => 'js',
								'value' => 'assets/js/jquery-browser'
							),
							array(
								'type' => 'css',
								'value' => 'assets/fancybox/jquery.fancybox'
							),
						),
		'datatable' => array(
							array(
								'type' => 'header_js',
								'value' => 'assets/datatables/jquery.dataTables.min'
							),
							array(
								'type' => 'header_js',
								'value' => 'assets/datatables/dataTables.bootstrap.min'
							),
							array(
								'type' => 'header_js',
								'value' => 'assets/datatables/dataTable.editor.min'
							),
							array(
								'type' => 'header_js',
								'value' => 'assets/datatables/dataTable.select.min'
							),
							array(
								'type' => 'header_js',
								'value' => 'assets/datatables/dataTable.button.min'
							),
							array(
								'type' => 'css',
								'value' => 'assets/datatables/dataTables.bootstrap'
							),
						),
		'chosen' => array(
							array(
								'type' => 'css',
								'value' => 'assets/chosen/chosen'
							),
							array(
								'type' => 'js',
								'value' => 'assets/chosen/chosen'
							),
						),
	);
	
	$output['header_js'] = array(
		'assets/js/jquery-2.2.3.min',
		'assets/js/slimscroll'
	);

	foreach( $values as $value ) {
		$inputs = $options[$value];
		foreach( $inputs as $input ) {
			$output[$input['type']][] = $input['value'];
		}
	}

	return $output;
}

?>