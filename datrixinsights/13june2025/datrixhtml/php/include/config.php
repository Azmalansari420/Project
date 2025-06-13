<?php
include_once("define.php");

class dbcon{

	public $con = 	null;
	// connection 
	public function __construct()
	{
		$this->con = new mysqli(dbhost,dbuser,dbpass,dbname);
		if ($this->con->connect_error) {
    		"database error".die();
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



public function count_where($table, $where){

	$sql =mysqli_query($this->con,"select * from $table where $where");
		$row = mysqli_fetch_array($sql);
		return $count = mysqli_num_rows($sql);
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
			$_SESSION['role_id'] = $row['type'];
			$_SESSION['user_id'] = $row['id'];
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
//count function
public function count($table){
	$sql =mysqli_query($this->con,"select * from $table");
		$row = mysqli_fetch_array($sql);
		return $count = mysqli_num_rows($sql);

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
public function fetch_product($table,$value=array())
{
	$col ="";
		foreach ($value as $ke => $va) 
		{
		$col.=$ke."= '".$this->input_check($va)."' and ";
		}
		 $col = rtrim($col," and ");

	  $sql ="select * from $table where $col";
	   $run = $this->con->query($sql);
	   $rows = array();
	 	while($row = $run->fetch_array())
			{
			  $rows[] = $row;
				
			}
		 if(is_array($rows) || is_object($rows) || !empty($rows)){

		 	return $rows;
		 }
		 else{
		 	return false;
		 }
	
}
//groupby function
public function fetch_data_by_group($coulum_name,$table)
{
	echo $sql = "select $coulum_name from $table group by $coulum_name";
	 $run = $this->con->query($sql);
	   $rows = array();
	 	while($row = $run->fetch_array())
			{
			  $rows[] = $row;
				
			}
		 if(is_array($rows) || is_object($rows) || !empty($rows)){

		 	return $rows;
		 }
		 else{
		 	return false;
		 }
	
}
//fetch data by And,Or condition 
//fetch product by status
public function data_fetch_by_condition($table,$value=array(),$condition)
{
	$col ="";
		foreach ($value as $ke => $va) 
		{
		$col.=$ke." LIKE '%".$this->input_check($va)."%' ".$condition;
		}
		 $col = rtrim($col," $condition ");

	  $sql ="select * from $table where $col";
	   $run = $this->con->query($sql);
	   $rows = array();
	 	while($row = $run->fetch_array())
			{
			  $rows[] = $row;
				
			}
		 if(is_array($rows) || is_object($rows) || !empty($rows)){

		 	return $rows;
		 }
		 else{
		 	return false;
		 }
	
}

// fetch data
public function fetch_all_data($table,$idd=null,$id=null)
{
if(!empty($idd) and !empty($id)){
	$where ="where $idd ='$id'";
}
else{
  $where="";
}
	  $sql ="select * from $table $where";
	   $run = $this->con->query($sql);
	   $rows = array();
	 	while($row = $run->fetch_array())
			{
			  $rows[] = $row;
				
			}
		 if(is_array($rows) || is_object($rows) || !empty($rows)){

		 	return $rows;
		 }
		 else{
		 	return false;
		 }
	
}



// fetch data
public function get($table)
{

	  $sql ="select * from $table order by id desc";
	   $run = $this->con->query($sql);
	   $rows = array();
	 	while($row = $run->fetch_array())
			{
			  $rows[] = $row;
				
			}
		 if(is_array($rows) || is_object($rows) || !empty($rows)){

		 	return $rows;
		 }
		 else{
		 	return false;
		 }
	
}



function alert($message,$url=null){
   
   if($url==null){
	  echo "<script>alert('$message');</script>";   
   }else{
	   echo "<script>alert('$message');window.location.href='$url';</script>";   
   }
}

//fetch by limit
 public function fetch_by_limit($table,$limit)
{
	 $sql ="select * from $table  limit $limit";
	   $run = $this->con->query($sql);
	    $rows = array();
	 	while($row = $run->fetch_array())
			{
			  $rows[] = $row;
				
			}
		 if(is_array($rows) || is_object($rows) || !empty($rows)){

		 	return $rows;
		 }
		 else{
		 	return false;
		 }
}



//check
 public function check($table,$where)
{
	   $sql ="select * from $table  where $where";
	   $run = $this->con->query($sql);
	   return mysqli_num_rows($run);
	    
}


// update data

public function update($value=array(),$table,$id=null,$other=array())
{
	$col ="";
	foreach ($value as $k => $v) {
		$col.=$k."= '".$this->input_check($v)."',";
	}
	$col = rtrim($col,",");
	if(is_array($other) && !empty($other)){
		$c ="";
		foreach ($other as $ke => $va) 
		{
		$c.=$ke."= '".$this->input_check($va)."' and ";
		}
		$c = rtrim($c," and ");
		$where = "where $c";
	}
	else{
		$where ="where id ='$id'";
	}
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

public function delete($table,$idd,$id)
{
	 $sql = "delete from $table where $idd='$id'";
	return $this->sql_run($sql);
}

//get last id 
public function last_id($conection){
return mysqli_insert_id($conection);

}


}
 $con = new dbcon();

?>