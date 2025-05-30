<?php
	include_once("../include/config.php");

	// Filter the excel data
	function filterData(&$str){
		$str = preg_replace("/\t/", "\\t", $str);
		$str = preg_replace("/\r?\n/", "\\n", $str);
		if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
	}

	// Excel file name for download
	$fileName = "members-data_" . date('Y-m-d') . ".xls";

	// Column names
	$fields = array('ID', 'Panelist Id', 'Respondent ID', 'Project ID', 'Status', 'I.P Address', 'endtime','date');

	// Display column names as first row
	$excelData = implode("\t", array_values($fields)) . "\n";



	//Fetch records from database
	$query = $con->all_fetch("user");

	if($query > 0){


		// Output each row of the data
		foreach($query as  $row){

			$lineData = array($row->id, $row->project_id, $row->member_id, $row->resp_id, $row->ip_address, $row->register_date,  $row->status);
			array_walk($lineData, 'filterData');
			$excelData .= implode("\t", array_values($lineData)) . "\n";
		}
	}else{
		$excelData .= 'No records found...'. "\n";
	}

	// Headers for download
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$fileName\"");

	// Render excel data
	echo $excelData;

	exit;
	}