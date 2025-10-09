<?php
include_once("define.php");
$mysqli = new mysqli(dbhost,dbuser,dbpass,dbname);
class dbcon 
{

	public $con = 	null;
	// connection 
	public function __construct()
	{
		$this->con = new mysqli(dbhost,dbuser,dbpass,dbname);
		if ($this->con->connect_error) {
			die();
		}
		
	}

//sql injection 
	public function input_check($data) {
		$data = trim(stripslashes(htmlspecialchars($data)));
		$data = filter_var($data, FILTER_SANITIZE_STRING);
		$data = $this->con->real_escape_string($data);
		return $data;
	}



// short query
	public function sql_run($sql){
		$row = $this->con->query($sql);
		if($row == true){
			return 1;
		}
		else{
			return 0;
		}
	} 

// admin login function
	public function login($table,$value=array()){
		$col ="";
		foreach ($value as $ke => $va) 
		{
			$col.=$ke."= '".$this->input_check($va)."' and ";
		}
		$col = rtrim($col," and ");
		$sql =mysqli_query($this->con,"select * from $table where $col");
		$row = mysqli_fetch_array($sql);
		$check = mysqli_num_rows($sql);
		if($check >=1){
			session_start();
			$_SESSION['name'] = $row['username'];
			return $check; 
		}
		else{
			return 0;
		}
	}
//function for logout admin
	public function logout()
	{
		session_start();
		unset($_SESSION['name']);
		header('location:index.php');
	}

// insert data
	public function insert($table,$value=array())
	{
		$col ="";
		$val="";
		foreach ($value as $k => $v) {
			$col.=$k.",";
			$val.="'".$this->input_check($v)."',";
		}
		$col = rtrim($col,",");
		$val = rtrim($val,",");
		$sql = "insert into $table ($col) value($val)";
		return $this->sql_run($sql);
	}
//fetch product by status
	public function all_fetch($table,$value=array(),$other=NULL)
	{
		if(count($value)>=1){
			$col ="";
			foreach ($value as $ke => $va) 
			{
				$col.=$ke."= '".$this->input_check($va)."' and ";
			}
				$col = rtrim($col," and ");
				$condition = "where ".$col;
		}
		else
		{
			$condition = NULL;
		}
		$sql ="select * from $table $condition $other";
		$run = $this->con->query($sql);
		$rows = array();
		while($row = $run->fetch_array())
		{
			$rows[] = $row;

		}


		return $rows;


	}




// update data

	public function update($table,$value=array(),$condition=array())
	{
		if(count($value)>=1){
			$col ="";
			foreach ($value as $k => $v) {
				$col.=$k."= '".$this->input_check($v)."',";
			}
		}
		$col = rtrim($col,",");
		if(count($condition)>=1){
			$c ="";
			foreach ($condition as $ke => $va) 
			{
				$c.=$ke."= '".$this->input_check($va)."' and ";
			}
		}
		$c = rtrim($c," and ");
		$where = "where $c";



		$update=mysqli_query($this->con,"update $table set $col $where");
		if($update==true)
		{
			return 1;
		}
		else{
			return 0;
		}
	}
// delete data

	public function delete($table, $arr=array())
	{
		if(count($arr)>=1){
			$col ="";

			foreach ($arr as $k => $v) {
				$col.=$k."=".$v."and";
			}
			$col = rtrim($col,"and");

		}
		$sql = "delete from $table where $col";
		return $this->sql_run($sql);
	}

//get last id 
	public function last_id($con){
		return mysqli_insert_id($con);

	}


}
$con = new dbcon();

?>