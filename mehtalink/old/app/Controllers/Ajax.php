<?php 
namespace App\Controllers;
use App\Models\PagesModel;
use App\Models\SettingModel;
use App\Models\ProductModel;
use App\Controllers\BaseController;
use Config\Database;
class Ajax extends BaseController
{
	//protected=$session;
	function __construct()
    {
		
		helper(['form', 'url']);
		$validation =  \Config\Services::validation();
		$db=Database::connect();
		$this->db = db_connect();
		$session=session();
		
    }
	
	
	public function pagList(){
		$db=Database::connect();
		
		$length = $_GET['length'];
        $start = $_GET['start'];
		
	  //$sql   = $this->db->table('SELECT * FROM tbl_pages');
       if (isset($_GET['search']) && !empty($_GET['search']['value'])) {
		$search = $_GET['search']['value'];
		$sql .= " WHERE title like '%$search%' OR title like '%$search%' OR title like '%$search%' OR title like '%$search%'";
	  }
	  $this->db->limit($length,$start);
	  $query=  $this->db->get('tbl_pages');
	  
	  $result = [];
	  foreach($query->getResultArray() as $row){
		  $result[] = [
        $i,
        $row['title'],
        $row['title'],
        
        $row['title'],
        $row['title'],
        $row['title'],
        $row['title'],
    ];
$i++;} echo json_encode([
    'draw' => $_GET['draw'],
    'recordsTotal' => $totalRecords,
    'recordsFiltered' => $totalRecords,
    'data' => $result,
]);
	  
	}

}
