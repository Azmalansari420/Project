<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class MemberModel extends CI_Model {



  	public function __construct()

        {

                parent::__construct();

                // Your own constructor code

        }

	

	private $Member = 'member_log';

  	

	public function AddMemberLog($data)

	{  

		$res = $this->db->insert($this->Member,$data);

		if($res == 1)

			return true;

		else

			return false;	

  	}

	public function TrashByID($id)

	{  

  		$res = $this->db->delete($this->Member,['id' => $id ] ); 

		if($res == 1)

			return true;

		else

			return false;

 	}

	

	

	public function GetChildMemberById($parent_id) 

	{  

 		$this->db->select('*');

		$this->db->from($this->Member);
		$this->db->order_by("side asc");

		$this->db->where("parent_id",$parent_id);

   		$query = $this->db->get();

 		if ($query) {

			 return $query->result_array();

		 } else {

			 return false;

		 }

   	}




   	public function GetChildMemberById2($parent_id) 
	{  

 		$this->db->select('*');

		$this->db->from($this->Member);
		$this->db->order_by("side asc");

		$this->db->where("parent_id",$parent_id);

   		$query = $this->db->get();

 		if ($query) {

			 return $query->result_array();

		 } else {

			 return false;

		 }

   	}




	

	public function NetSaleVolume($member_id)

	{  

  		$res = $this->db->select('qty,unit_price'); 

		$this->db->from('orders');

		$this->db->where('member_id',$member_id);

   		$query = $this->db->get();

 		if ($query->num_rows()!=0) {

			$total_inr=[];

			foreach($query->result_array() as $row){

				$total_inr[]=$row['unit_price']*$row['qty'];			

			}

 			$total_sale = array_sum($total_inr);

			return $total_sale;

 		 } else {

			 return '0.00';

		 }

 	}

	

	public function GrandTotalNetSaleVolume($member_ids)

	{  

  		$res = $this->db->select('qty,unit_price'); 

		$this->db->from('orders');

		$this->db->where_in('member_id',$member_ids);

   		$query = $this->db->get();

 		if ($query->num_rows()!=0) {

			$total_inr=[];

			foreach($query->result_array() as $row){

				$total_inr[]=$row['unit_price'];			

			}

 			$total_sale = array_sum($total_inr);

			return $total_sale;

 		 } else {

			 return '0.00';

		 }

 	}

/////////////////////////////////////////////Bonus level/////////////////////////////////

	public function MemberIncomePercent($TotalNetSaleVolume){

		

		$NetSaleVolumeRates=[

								['Volume' => 8000,'Bonus'=>6],

								['Volume' => 40000,'Bonus'=>9],

								['Volume' => 96000,'Bonus'=>11],

								['Volume' => 192000,'Bonus'=>13],

								['Volume' => 320000,'Bonus'=>15],

								['Volume' => 560000,'Bonus'=>18],

								['Volume' => 800000,'Bonus'=>21],

 						];

						

		//$forumla = $NetSalesVolume/100*$percent;

		$TotalNetSaleVolume=96000;

		

		$b=['BL' => 0, 'BI' => 0];

		$BL_1='';

		if($TotalNetSaleVolume == 8000 || $TotalNetSaleVolume < 40000){

			

			$BL_1=$TotalNetSaleVolume/100*6;

 			return $b=['BL' => 6, 'BI' => $TotalNetSaleVolume/100*6 ];

		}

		if($TotalNetSaleVolume == 40000 || $TotalNetSaleVolume < 96000){
			$BL_1=10000/100*6;
			return $b=['BL' => 9, 'BI' => $TotalNetSaleVolume/100*3 + $BL_1];
		}
		if($TotalNetSaleVolume == 96000 || $TotalNetSaleVolume < 192000){
			$BL_1=10000/100*6;
			return $b=['BL' => 11, 'BI' => $TotalNetSaleVolume/100*5 + $BL_1];
		}
	}







	public function view_member_data($id) 
	{
		// $this->SeesionModel->is_logged_Admin();
 		
 		// $id=$this->OuthModel->Encryptor('decrypt',$this->input->get('id'));
		 
		$data['member'] = $this->UserModel->GetUserDataById($id);
		
		
		$getChildMember = $this->MemberModel->GetChildMemberById($id);
		
 		$arr=[];
		$Total_nsv2_id[]=$id;
		$Total_nsv3_id=[];
		$Total_nsv4_id=[];
		$Total_nsv5_id=[];
		$Total_nsv6_id=[];
		$Total_nsv7_id=[];
		$Total_nsv8_id=[];
		$Total_nsv9_id=[];
		$Total_nsv10_id=[];
		$Total_nsv11_id=[];
		$Total_nsv12_id=[];
		$Total_nsv13_id=[];
		$Total_nsv14_id=[];
		$Total_nsv15_id=[];
		$Total_nsv16_id=[];
		$Total_nsv17_id=[];
		
		
		
		$total_net_sale_v=[];			
		foreach($getChildMember as $row){///level 2
			
			$Total_nsv3_id[]=$row['id'];
			
			$level_3_loop=$this->MemberModel->GetChildMemberById($row['id']);
			$NetSaleVolume3=$this->MemberModel->NetSaleVolume($row['id']);
			$total_net_sale_v[]=$NetSaleVolume3;
			
			$arr_level_3=[];
			$total_net_sale_v3=[];
			foreach($level_3_loop as $level_3){///level 3
				
				$Total_nsv4_id[]=$level_3['id'];
				
				$level_4_loop=$this->MemberModel->GetChildMemberById($level_3['id']);
				$NetSaleVolume4=$this->MemberModel->NetSaleVolume($level_3['id']);
				$total_net_sale_v3[]=$NetSaleVolume4;
				
				$arr_level_4=[];
				$total_net_sale_v4=[];
				foreach($level_4_loop as $level_4){///level 4
					
					$Total_nsv4_id[]=$level_4['id'];
					
						$level_5_loop=$this->MemberModel->GetChildMemberById($level_4['id']);
						$NetSaleVolume5=$this->MemberModel->NetSaleVolume($level_4['id']);
						$total_net_sale_v4[]=$NetSaleVolume4;
						
						$arr_level_5=[];
						$total_net_sale_v5=[];
						foreach($level_5_loop as $level_5){///level 5
						
						$Total_nsv5_id[]=$level_5['id'];
							
								$level_6_loop=$this->MemberModel->GetChildMemberById($level_5['id']);
								$NetSaleVolume6=$this->MemberModel->NetSaleVolume($level_5['id']);
								$total_net_sale_v5[]=$NetSaleVolume6;
								
								$arr_level_6=[];
								$total_net_sale_v6=[];
								foreach($level_6_loop as $level_6){///level 6
								
								$Total_nsv6_id[]=$level_6['id'];
									




$level_7_loop=$this->MemberModel->GetChildMemberById($level_6['id']);
	$NetSaleVolume7=$this->MemberModel->NetSaleVolume($level_6['id']);
	$total_net_sale_v6[]=$NetSaleVolume6;
	$arr_level_7=[];
	$total_net_sale_v7=[];
		foreach($level_7_loop as $level_7){///level 7
			$Total_nsv7_id[]=$level_7['id'];
									
	$level_8_loop=$this->MemberModel->GetChildMemberById($level_7['id']);
	$NetSaleVolume8=$this->MemberModel->NetSaleVolume($level_7['id']);
	$total_net_sale_v7[]=$NetSaleVolume7;
	
	$arr_level_8=[];
	$total_net_sale_v8=[];
	foreach($level_8_loop as $level_8){///level 8
	
	$Total_nsv8_id[]=$level_8['id'];
		
		$level_9_loop=$this->MemberModel->GetChildMemberById($level_8['id']);
		$NetSaleVolume9=$this->MemberModel->NetSaleVolume($level_8['id']);
		$total_net_sale_v8[]=$NetSaleVolume8;
		
		$arr_level_9=[];
		$total_net_sale_v9=[];
		foreach($level_9_loop as $level_9){///level 9
		
		$Total_nsv9_id[]=$level_9['id'];
			
			$level_10_loop=$this->MemberModel->GetChildMemberById($level_9['id']);
			$NetSaleVolume10=$this->MemberModel->NetSaleVolume($level_9['id']);
			$total_net_sale_v9[]=$NetSaleVolume9;
			
			$arr_level_10=[];
			$total_net_sale_v10=[];
			foreach($level_10_loop as $level_10){///level 10
			
			$Total_nsv10_id[]=$level_10['id'];
				
				$level_11_loop=$this->MemberModel->GetChildMemberById($level_10['id']);
				$NetSaleVolume11=$this->MemberModel->NetSaleVolume($level_10['id']);
				$total_net_sale_v10[]=$NetSaleVolume10;
				
				$arr_level_11=[];
				$total_net_sale_v11=[];
				foreach($level_11_loop as $level_11){///level 11
				
				$Total_nsv11_id[]=$level_11['id'];
					
					$level_12_loop=$this->MemberModel->GetChildMemberById($level_11['id']);
					$NetSaleVolume12=$this->MemberModel->NetSaleVolume($level_11['id']);
					$total_net_sale_v11[]=$NetSaleVolume11;
					
					$arr_level_12=[];
					$total_net_sale_v12=[];
					foreach($level_12_loop as $level_12){///level 12
					
					$Total_nsv12_id[]=$level_12['id'];
						
						$level_13_loop=$this->MemberModel->GetChildMemberById($level_12['id']);
						$NetSaleVolume13=$this->MemberModel->NetSaleVolume($level_12['id']);
						$total_net_sale_v12[]=$NetSaleVolume12;
						
						$arr_level_13=[];
		$total_net_sale_v13=[];
		foreach($level_13_loop as $level_13){///level 13
		
		$Total_nsv13_id[]=$level_13['id'];
			
			$level_14_loop=$this->MemberModel->GetChildMemberById($level_13['id']);
			$NetSaleVolume14=$this->MemberModel->NetSaleVolume($level_13['id']);
			$total_net_sale_v13[]=$NetSaleVolume13;
			
			$arr_level_14=[];
			$total_net_sale_v14=[];
			foreach($level_14_loop as $level_14){///level 14
			
			$Total_nsv14_id[]=$level_14['id'];
				
				$level_15_loop=$this->MemberModel->GetChildMemberById($level_14['id']);
				$NetSaleVolume15=$this->MemberModel->NetSaleVolume($level_14['id']);
				$total_net_sale_v14[]=$NetSaleVolume14;
				
				$arr_level_15=[];
				$total_net_sale_v15=[];
				foreach($level_15_loop as $level_15){///level 15
				
				$Total_nsv15_id[]=$level_15['id'];
					
					$level_16_loop=$this->MemberModel->GetChildMemberById($level_15['id']);
					$NetSaleVolume16=$this->MemberModel->NetSaleVolume($level_15['id']);
					$total_net_sale_v15[]=$NetSaleVolume15;
					
					$arr_level_16=[];
					$total_net_sale_v16=[];
					foreach($level_16_loop as $level_16){///level 16
					
					$Total_nsv16_id[]=$level_16['id'];
						
						$level_17_loop=$this->MemberModel->GetChildMemberById($level_16['id']);
						$NetSaleVolume17=$this->MemberModel->NetSaleVolume($level_16['id']);
						$total_net_sale_v16[]=$NetSaleVolume16;
						
						$arr_level_17=[];
						$total_net_sale_v17=[];
						foreach($level_17_loop as $level_17){///level 17
						
						$Total_nsv17_id[]=$level_17['id'];
							
									

							




						}//Level17
						
					$arr_level_16[] = ['member_id' => $level_16['id'] , 'member_name' => $level_16['name'], 'L_17' => $arr_level_17,
					'NetSaleVol16'=>$NetSaleVolume17,'total_net_sale_v16'=>array_sum($total_net_sale_v17)+$NetSaleVolume17];		

						




					}//Level16
					
				$arr_level_15[] = ['member_id' => $level_15['id'] , 'member_name' => $level_15['name'], 'L_16' => $arr_level_16,
				'NetSaleVol15'=>$NetSaleVolume16,'total_net_sale_v15'=>array_sum($total_net_sale_v16)+$NetSaleVolume16];		

					




				}//Level15
				
			$arr_level_14[] = ['member_id' => $level_14['id'] , 'member_name' => $level_14['name'], 'L_15' => $arr_level_15,
			'NetSaleVol14'=>$NetSaleVolume15,'total_net_sale_v14'=>array_sum($total_net_sale_v15)+$NetSaleVolume15];		

				




			}//Level14
			
		$arr_level_13[] = ['member_id' => $level_13['id'] , 'member_name' => $level_13['name'], 'L_14' => $arr_level_14,
		'NetSaleVol13'=>$NetSaleVolume14,'total_net_sale_v13'=>array_sum($total_net_sale_v14)+$NetSaleVolume14];		

			




		}//Level13
		
	$arr_level_12[] = ['member_id' => $level_12['id'] , 'member_name' => $level_12['name'], 'L_13' => $arr_level_13,
	'NetSaleVol12'=>$NetSaleVolume13,'total_net_sale_v12'=>array_sum($total_net_sale_v13)+$NetSaleVolume13];		

		




	}//Level12
	
$arr_level_11[] = ['member_id' => $level_11['id'] , 'member_name' => $level_11['name'], 'L_12' => $arr_level_12,
'NetSaleVol11'=>$NetSaleVolume12,'total_net_sale_v11'=>array_sum($total_net_sale_v12)+$NetSaleVolume12];		

	




}//Level11

$arr_level_10[] = ['member_id' => $level_10['id'] , 'member_name' => $level_10['name'], 'L_11' => $arr_level_11,
'NetSaleVol10'=>$NetSaleVolume11,'total_net_sale_v10'=>array_sum($total_net_sale_v11)+$NetSaleVolume11];			






}//Level10

$arr_level_9[] = ['member_id' => $level_9['id'] , 'member_name' => $level_9['name'], 'L_10' => $arr_level_10,
'NetSaleVol9'=>$NetSaleVolume10,'total_net_sale_v9'=>array_sum($total_net_sale_v10)+$NetSaleVolume10];			

											




			}//Level9
			
		$arr_level_8[] = ['member_id' => $level_8['id'] , 'member_name' => $level_8['name'], 'L_9' => $arr_level_9,
		'NetSaleVol8'=>$NetSaleVolume9,'total_net_sale_v8'=>array_sum($total_net_sale_v9)+$NetSaleVolume9];		

			




		}//Level8
		
	$arr_level_7[] = ['member_id' => $level_7['id'] , 'member_name' => $level_7['name'], 'L_8' => $arr_level_8,
	'NetSaleVol7'=>$NetSaleVolume8,'total_net_sale_v7'=>array_sum($total_net_sale_v8)+$NetSaleVolume8];		

		




	}//Level7
	
$arr_level_6[] = ['member_id' => $level_6['id'] , 'member_name' => $level_6['name'], 'L_7' => $arr_level_7,
'NetSaleVol6'=>$NetSaleVolume7,'total_net_sale_v6'=>array_sum($total_net_sale_v7)+$NetSaleVolume7];







	}//Level6
	
$arr_level_5[] = ['member_id' => $level_5['id'] , 'member_name' => $level_5['name'], 'L_6' => $arr_level_6,'NetSaleVol5'=>$NetSaleVolume6 ,'total_net_sale_v5'=>array_sum($total_net_sale_v6)+$NetSaleVolume6];
						}//Level5
						
					$arr_level_4[] = ['member_id' => $level_4['id'] , 'member_name' => $level_4['name'], 'L_5' => $arr_level_5,
					'NetSaleVol4'=>$NetSaleVolume5,'total_net_sale_v4'=>array_sum($total_net_sale_v5)+$NetSaleVolume5];
 				}//Level4
				
				$arr_level_3[] = ['member_id' => $level_3['id'] , 'member_name' => $level_3['name'],'L_4' => $arr_level_4,
				'NetSaleVol3'=>$NetSaleVolume4,'total_net_sale_v3'=>array_sum($total_net_sale_v4)+$NetSaleVolume4 ];
				
				 
			}//Level3
			
 			
			$arr[] = [ 
						'member_id' => $row['id'] , 'member_name' => $row['name'],
 						'sale2' => $NetSaleVolume3,
						'total_net_sale_v2' => array_sum($total_net_sale_v3)+$NetSaleVolume3,
						'L_3' => $arr_level_3,
 					 ];
						 
		}//Level2

	$total_ids = array_merge($Total_nsv2_id,$Total_nsv3_id,$Total_nsv4_id,$Total_nsv5_id,$Total_nsv6_id,$Total_nsv7_id,$Total_nsv8_id,$Total_nsv9_id,$Total_nsv10_id,$Total_nsv11_id,$Total_nsv12_id,$Total_nsv13_id,$Total_nsv14_id,$Total_nsv15_id,$Total_nsv16_id,$Total_nsv17_id);


		
 		$data['teamNetwork']=count($total_ids);
 		$data['all_ids']=$this->MemberModel->Parent_for_id_new($id);
  		$GrandtotalNetSaleVolume=$this->MemberModel->GrandTotalNetSaleVolume($total_ids);
		$data['GrandtotalNetSaleVolume']=$GrandtotalNetSaleVolume;
		//$this->MemberIncomePercent($GrandtotalNetSaleVolume);
		
		
		$NetSaleVolume1=$this->MemberModel->NetSaleVolume($id);
		$data['total_net_sale_v'] = array_sum($total_net_sale_v)+$NetSaleVolume1;
		$data['NetSaleVolume1']=$NetSaleVolume1;
		
 		$data['memberlist'] = $arr;
		
		return $data;
	}










	public function getChildMember_new($parent_id,$side='') 
	{  
 		$this->db->select('*');
		$this->db->from("member_log");
		$this->db->order_by("side asc");
		if(!empty($side))
			$this->db->where(array("side"=>$side,));
		$this->db->where_in("parent_id",$parent_id);
   		$query = $this->db->get();
 		if ($query) {
			 return $query->result_array();
		 } else {
			 return false;
		 }
   	}

	public function Parent_for_id_new($id,$side=''){
		$member = $this->MemberModel->GetUserDataByIddesc($id);
 		$arr=[$id];
 		$arr2=[$id];
 		$i=0;
 		while ($i<1000000)
 		{
 			$getChildMember = $this->MemberModel->getChildMember_new($arr2,$side);
 			$arr2 = array();
 			if(empty($getChildMember))
 				break;
 			foreach ($getChildMember as $key => $value)
 			{
 				if(!in_array($value['id'],$arr))
 				{
 					$arr[] = $value['id'];
 					$arr2[] = $value['id'];
 				}
	 		}
	 		$i++; 
 		}
 		return $arr;
	}
	
	












	public function Parent_for_id($id){
		$member = $this->UserModel->GetUserDataById($id);
 		$getChildMember = $this->MemberModel->GetChildMemberById($id);
 		$arr=[];
		$arr[]= $member['id'];
		foreach($getChildMember as $row){///level 2
					$arr[] = $row['id'];
					foreach ($this->Children_for_id($row['id']) as $key => $value) {
 						$arr[] = $value;						
					}
		}
		return $json = $arr;
 		// print_r($json);		
	}
	
	public function Children_for_id($id){
  		$getChildMember = $this->MemberModel->GetChildMemberById($id);
 		$arr=[]; 		
		foreach($getChildMember as $row){///level 2
					$arr[] = $row['id'];
		}
 		return $arr;
 	}



 	public function GetUserDataByIddesc($id) 
	{  
 		$this->db->select('id,name,mobile_no,email,address,city,country,vat_number,picture_url,pincode,created');
		$this->db->from("users");
		$this->db->where("id",$id);
		$this->db->limit(1);
  		$query = $this->db->get();
 		if ($query) {
			 return $query->row_array();
		 } else {
			 return false;
		 }
   	}
   	public function GetChildMemberByIddesc($parent_id) 
	{  
 		$this->db->select('*');
		$this->db->from("member_log");
		$this->db->order_by("side asc");
		$this->db->where("id",$parent_id);
   		$query = $this->db->get();
 		if ($query) {
			 return $query->result_array();
		 } else {
			 return false;
		 }
   	}
 	public function GetChildMemberByIddesc22($parent_id) 
	{  
 		return $getChildMember = $this->MemberModel->GetChildMemberByIddesc($parent_id);
   	}
 	public function Parent_for_id_desc($id){
		$member = $this->MemberModel->GetUserDataByIddesc($id);
 		$arr=[];
		// $arr[]= $member['id'];
 		$getChildMember = $this->MemberModel->GetChildMemberByIddesc($id);
 		$i=0;
 		while ($i<10000000)
 		{
 			$getChildMember = $this->MemberModel->GetChildMemberByIddesc22($id);
 			if(!empty($getChildMember))
 			{
	 			$id = $getChildMember[0]['parent_id'];
	 			if($id==133)
	 			{
	 				break;
	 			}
	 			$arr[] = $getChildMember[0]['parent_id'];
	 		}
	 		else
	 		{
	 			break;
	 		}
	 		$i++;
 		}

 		return $arr;	
	}












	/*direct down ids*/
		public function GetUserDataByIddownsponsers($id) 
		{
	 		$this->db->select('id,name,mobile_no,email,address,city,country,vat_number,picture_url,pincode,created');
			$this->db->from("users");
			$this->db->where("id",$id);
			$this->db->limit(1);
	  		$query = $this->db->get();
	 		if ($query) {
				 return $query->row_array();
			 } else {
				 return false;
			 }
	   	}
		public function getChildMemberdownsponser($parent_id,$side='') 
		{  
	 		$this->db->select('*');
			$this->db->from("member_log");
			$this->db->order_by("side asc");
			if(!empty($side))
				$this->db->where(array("side"=>$side,));
			$this->db->where_in("parent_id",$parent_id);
	   		$query = $this->db->get();
	 		if ($query) {
				 return $query->result_array();
			 } else {
				 return false;
			 }
	   	}
		public function all_down_sponsers($id,$side=''){
			$member = $this->MemberModel->GetUserDataByIddownsponsers($id);
	 		$arr=array();
	 		$arr2=[$id];
	 		$i=0;
	 		while ($i<1000000)
	 		{
	 			$getChildMember = $this->MemberModel->getChildMemberdownsponser($arr2,$side);
	 			$arr2 = array();
	 			if(empty($getChildMember))
	 				break;
	 			foreach ($getChildMember as $key => $value)
	 			{
	 				if(!in_array($value['id'],$arr))
	 				{
	 					$arr[] = $value['id'];
	 					$arr2[] = $value['id'];
	 				}
		 		}
		 		$i++; 
	 		}
	 		return $arr;
		}
	/*direct down ids end*/

























	/*all upper sponsers */
		public function GetUserDataByIddescsponser($id) 
		{  
	 		$this->db->select('id,name,mobile_no,email,address,city,country,vat_number,picture_url,pincode,created');
			$this->db->from("users");
			$this->db->where("id",$id);
			$this->db->limit(1);
	  		$query = $this->db->get();
	 		if ($query) {
				 return $query->row_array();
			 } else {
				 return false;
			 }
	   	}
		public function GetChildMemberByIdsponser($parent_id) 
		{  
	 		$this->db->select('*');
			$this->db->from("member_log");
			$this->db->order_by("side asc");
			$this->db->where("id",$parent_id);
	   		$query = $this->db->get();
	 		if ($query) {
				 return $query->result_array();
			 } else {
				 return false;
			 }
	   	}
		public function GetChildMemberByIddesc22sponser($parent_id) 
		{  
	 		return $getChildMember = $this->MemberModel->GetChildMemberByIdsponser($parent_id);
	   	}
	 	public function all_upper_sponser_id($id){
			$member = $this->MemberModel->GetUserDataByIddescsponser($id);
	 		$arr=[];
			// $arr[]= $member['id'];
	 		$getChildMember = $this->MemberModel->GetChildMemberByIdsponser($id);
	 		$i=0;
	 		while ($i<10000000)
	 		{
	 			$getChildMember = $this->MemberModel->GetChildMemberByIddesc22sponser($id);
	 			if(!empty($getChildMember))
	 			{
		 			$id = $getChildMember[0]['sponser_id'];
		 			if($id==133)
		 			{
		 				break;
		 			}
		 			$arr[] = $getChildMember[0]['sponser_id'];
		 		}
		 		else
		 		{
		 			break;
		 		}
		 		$i++;
	 		}

	 		return $arr;	
		}
	/*all upper sponsers end */



	/*all direct id*/
		public function all_direct_ids($id,$side=''){
			$member = $this->MemberModel->GetUserDataByIddesc($id);
	 		// $arr=[$id];	
	 		$arr = array(); 		
 			$getChildMember = $this->db->get_where("member_log",array("sponser_id"=>$id,"side"=>$side,))->result_object();
 			foreach ($getChildMember as $key => $value)
 			{
 				if(!in_array($value->id,$arr))
 				{
 					$arr[] = $value->id;
 				}
	 		}	 		
	 		return $arr;
		}
	/*all direct id end*/





















	public function get_rank_array($user_id,$total_bs='',$amount='')
	{
		$year = date("Y");
		$this_month = date("m");
		$month = date('m');
		$parent_id = 0;
		$user_commision = 0;
		$parent_commision = 0;
		$total_bs = 0;
		$income_amount = 0;
		$get_rank_array = array(
			"user_id"=>0,
			"total_bs"=>0,
			"income_amount"=>0,
		);


		$this->db->where("parent_id!=",133);
		$parent = $this->db->get_where("member_log",array("id"=>$user_id,))->result_object();
		if(!empty($parent))
		{
			$parent_id = $parent[0]->parent_id;
			$parent_user = $this->db->get_where("users",array("id"=>$parent_id,))->result_object();
			if(!empty($parent_user))
			{

				$this->db->limit(1);
				$this->db->order_by("id desc");
				$this->db->where(" rank_id<'8' ");
				$user_rank = $this->db->get_where("rank",array("user_id"=>$user_id,))->result_object();
				$date_time = date("Y-m-01 00:00:00");
			    	$where = "user_id='$parent_id' and rank_id<8 and date_time<'$date_time' ";
			    	$this->db->limit(1);
			    	$this->db->order_by("id desc");
			    	$this->db->where($where);
				$parent_rank = $this->db->get_where("rank")->result_object();
				if(empty($parent_rank))
					$parent_rank = $this->db->get_where("rank",array("rank_id"=>1,"user_id"=>$parent_id,))->result_object();
				if(!empty($user_rank))
					$user_commision = $user_rank[0]->commision;
				if(!empty($parent_rank))
					$parent_commision = $parent_rank[0]->commision;
				$total_bs = round($this->MemberModel->get_total_bs($parent_id,'all'),2);
				if($user_commision<$parent_commision)
				{
					$commision = $parent_commision-$user_commision;
					$total_get_amount = round($this->MemberModel->total_get_amount($parent_id),2);
					$income_amount = $total_bs-$total_get_amount;
					if($income_amount>0)
					{
						$income_amount = $income_amount*$commision/100;
						$get_rank_array = array(
							"user_id"=>$parent_id,
							"total_bs"=>$total_bs,
							"commision"=>$commision,
							"income_amount"=>$income_amount,
						);
					}
				}
				$this->MemberModel->create_diamond_income($user_id,"","",$parent_id,$total_bs);
			}
		}



		$left_members_id = 0;
		$right_members_id = 0;
		$my_left_member = $this->db->get_where("member_log",array("parent_id"=>$user_id,"side"=>1,))->result_object();
		$my_right_member = $this->db->get_where("member_log",array("parent_id"=>$user_id,"side"=>2,))->result_object();
		if(!empty($my_left_member))
		{
			$left_members_id = $my_left_member[0]->id;
		}
		if(!empty($my_right_member))
		{
			$right_members_id = $my_right_member[0]->id;
		}
		$team_a_bp = $this->MemberModel->get_total_bs($left_members_id);
		$team_b_bp = $this->MemberModel->get_total_bs($right_members_id);	



		$commision = 5;
		$less_rank_amount = 0;
		$next = 1;
		$this->MemberModel->create_rank($user_id,1,'Associate',5);
		/* check and create executive */
			if($team_a_bp>=2000 && $team_b_bp>=2000)
			{
				$this->MemberModel->create_rank($user_id,2,'Star',10);
				$less_rank_amount = 2000;
			}
		/* check and create executive end */



		/* check and create advance executive */
			if($team_a_bp>=15000 && $team_b_bp>=15000)
			{
				$this->MemberModel->create_rank($user_id,3,'OPAL Star',14);
				$less_rank_amount = 15000;
			}
		/* check and create advance executive end */



		/* check and create manager */
			if($team_a_bp>=40000 && $team_b_bp>=40000)
			{
				$first_day_this_month = date('Y-m-01');
				$last_day_this_month  = date('Y-m-t');
				$this->db->where("create_date >=",$first_day_this_month);
				$this->db->where("create_date <=",$last_day_this_month);
				$user_bp_of_this_month = $this->db->get_where("orders",array("member_id"=>$user_id,))->result_object();
				$total_bp_month = 0;
				foreach ($user_bp_of_this_month as $key => $value)
				{
					$total_bp_month += $value->bp;
				}
				if($total_bp_month>=300)
				{
					$this->MemberModel->create_rank($user_id,4,'ToPAZ',17);
					$less_rank_amount = 40000;
					$next = 1;
				}
				else $next = 0;
			}
			else $next = 0;

		/* check and create manager end */



		/* check and create senior manager */
			if($team_a_bp>=80000 && $team_b_bp>=80000 && $next==1)
			{
				$this->MemberModel->create_rank($user_id,5,'Pearl',20);
				$less_rank_amount = 80000;
			}
		/* check and create senior manager end */



		/* check and circle head */
			if($team_a_bp>=160000 && $team_b_bp>=160000 && $next==1)
			{
				$this->MemberModel->create_rank($user_id,6,'Ruby',23);
				$less_rank_amount = 160000;
			}
		/* check and circle head end */



		/* check and directer */
			if($team_a_bp>=320000 && $team_b_bp>=320000 && $next==1)
			{
				$first_day_this_month = date('Y-m-01');
				$last_day_this_month  = date('Y-m-t');
				$this->db->where("create_date >=",$first_day_this_month);
				$this->db->where("create_date <=",$last_day_this_month);
				$user_bp_of_this_month = $this->db->get_where("orders",array("member_id"=>$user_id,))->result_object();
				$total_bp_month = 0;
				foreach ($user_bp_of_this_month as $key => $value)
				{
					$total_bp_month += $value->bp;
				}
				if($total_bp_month>=500)
				{
					$this->MemberModel->create_rank($user_id,7,'Diamond',26);
					$less_rank_amount = 320000;
					$next = 1;
				}
				else $next = 0;

			}
			else $next = 0;
		/* check and directer end */


		// $diamonds = $this->MemberModel->count_diamonds($user_id);
		// if($diamonds['left_dianmonds']>=3 && $diamonds['right_dianmonds']>=3)
		// {
		// 	// $this->MemberModel->create_rank($user_id,8,'Blue Diamond',3);
		// }
		// if($diamonds['left_blue_dianmonds']>=2 && $diamonds['right_blue_dianmonds']>=2)
		// {
		// 	// $this->MemberModel->create_rank($user_id,9,'Ruby Diamond',2);
		// }
		// if($diamonds['left_ruby_dianmonds']>=1 && $diamonds['right_ruby_dianmonds']>=1)
		// {
		// 	// $this->MemberModel->create_rank($user_id,10,'Noor Diamond',1);
		// }
		// if($diamonds['left_noor_dianmonds']>=1 && $diamonds['right_noor_dianmonds']>=1)
		// {
		// 	$this->MemberModel->create_rank($user_id,11,'Freedom Club Income',2);
		// }
		return $get_rank_array;
	}
	public function get_total_bs_d_new($user_id,$left_members=array(),$right_members=array())
	{
		$total_bp = 0;
		$all_ids = $user_id;
		// if(!empty($left_members) && !empty($right_members))
		// {
			// $all_ids[] = $user_id;
		// 	$all_ids = array_merge($all_ids,$left_members,$right_members);
		// 	print_r($all_ids);
		// }
		// else
		// {

		// 	$all_ids = $this->MemberModel->Parent_for_id_new($user_id);
		// }
		$this->db->select_sum('total_bp');
		$this->db->where_in("user_id",$all_ids);
		$query = $this->db->get('monthly_bp')->result_array();
		$total_bp = $query[0]['total_bp'];
		if(empty($total_bp))
			$total_bp = 0;
		return $total_bp;
	}
	public function get_total_bs($user_id,$type='')
	{
		$total_bs = 0;
		$get_bp_data = $this->db->get_where("monthly_bp",array("user_id"=>$user_id,))->result_object();
		foreach ($get_bp_data as $key => $value)
		{
			$total_bs += $value->total_bp;			
		}
		return $total_bs;
	}


	public function count_diamonds($user_id)
	{
		$left_dianmonds = 0;
		$left_blue_dianmonds = 0;
		$left_ruby_dianmonds = 0;
		$left_noor_dianmonds = 0;
		$left_freedome = 0;
		$right_dianmonds = 0;
		$right_blue_dianmonds = 0;
		$right_ruby_dianmonds = 0;
		$right_noor_dianmonds = 0;
		$right_freedome = 0;
		// $left_member_id = $this->MemberModel->left_right_member_id($user_id)['left_members_id'];
		// $right_member_id = $this->MemberModel->left_right_member_id($user_id)['right_members_id'];
		// $left_all_ids = $this->MemberModel->Parent_for_id_new($left_member_id);
		// $right_all_ids = $this->MemberModel->Parent_for_id_new($right_member_id);
		$left_all_ids = $this->MemberModel->all_down_sponsers($user_id,1);
		$right_all_ids = $this->MemberModel->all_down_sponsers($user_id,2);
		foreach ($left_all_ids as $key => $value)
		{
			if(!empty($this->db->get_where("rank",array("rank_id"=>7,"user_id"=>$value,))->result_object()))
			{
				$left_dianmonds++;				
			}
			if(!empty($this->db->get_where("rank",array("rank_id"=>8,"user_id"=>$value,))->result_object()))
			{
				$left_blue_dianmonds++;				
			}
			if(!empty($this->db->get_where("rank",array("rank_id"=>9,"user_id"=>$value,))->result_object()))
			{
				$left_ruby_dianmonds++;
			}

			if(!empty($this->db->get_where("rank",array("rank_id"=>10,"user_id"=>$value,))->result_object()))
			{
				$left_noor_dianmonds++;
			}
			if(!empty($this->db->get_where("rank",array("rank_id"=>11,"user_id"=>$value,))->result_object()))
			{
				$left_freedome++;
			}			
		}
		foreach ($right_all_ids as $key => $value)
		{
			if(!empty($this->db->get_where("rank",array("rank_id"=>7,"user_id"=>$value,))->result_object()))
			{
				$right_dianmonds++;				
			}
			if(!empty($this->db->get_where("rank",array("rank_id"=>8,"user_id"=>$value,))->result_object()))
			{
				$right_blue_dianmonds++;				
			}
			if(!empty($this->db->get_where("rank",array("rank_id"=>9,"user_id"=>$value,))->result_object()))
			{
				$right_ruby_dianmonds++;
			}
			if(!empty($this->db->get_where("rank",array("rank_id"=>10,"user_id"=>$value,))->result_object()))
			{
				$right_noor_dianmonds++;
			}
			if(!empty($this->db->get_where("rank",array("rank_id"=>11,"user_id"=>$value,))->result_object()))
			{
				$right_freedome++;
			}			
		}
		return array(
			"left_dianmonds"=>$left_dianmonds,
			"left_blue_dianmonds"=>$left_blue_dianmonds,
			"left_ruby_dianmonds"=>$left_ruby_dianmonds,
			"left_noor_dianmonds"=>$left_noor_dianmonds,
			"left_freedome"=>$left_freedome,
			"right_dianmonds"=>$right_dianmonds,
			"right_blue_dianmonds"=>$right_blue_dianmonds,
			"right_ruby_dianmonds"=>$right_ruby_dianmonds,
			"right_noor_dianmonds"=>$right_noor_dianmonds,
			"right_freedome"=>$right_freedome,
		);
	}
		




        



        



	// public function get_total_bs_in_month($user_id,$month,$year)
	// {
	// 	$total_bs = 0;
	// 	$all_ids[] = $user_id;
	// 	$this->db->select_sum('total_bp');
	// 	$this->db->where_in("user_id",$all_ids);
	// 	$this->db->where(array("year"=>$year,"month"=>$month,));
	// 	$query = $this->db->get('monthly_bp')->result_array();
	// 	$total_bp = $query[0]['total_bp'];
	// 	if(empty($total_bp))
	// 		$total_bp = 0;
	// 	return $total_bp;
	// }


	
	public function get_total_bs_in_month($user_id,$month,$year)
	{
		$total_bp = 0;
		if(!empty($user_id))
		{
			$all_ids = $user_id;
			$this->db->select_sum('total_bp');
			$this->db->where_in("user_id",$all_ids);
			$this->db->where(array("year"=>$year,"month"=>$month,));
			$query = $this->db->get('monthly_bp')->result_array();
			$total_bp = $query[0]['total_bp'];
			if(empty($total_bp))
				$total_bp = 0;
		}
		return $total_bp;
	}


	public function total_get_amount($user_id)
	{
		$total_bs = 0; 
		$this->db->select("total_get_bp");
		$total_bs = $this->db->get_where("users",array("id"=>$user_id,))->result_object()[0]->total_get_bp;		
		return $total_bs;
	}
	public function self_bp($user_id)
	{
		$this->db->where("member_id =",$user_id);
		$get_all_coins = $this->db->get_where("orders",array("order_by"=>3,))->result_object();
		$total_bs = 0;
		foreach ($get_all_coins as $key => $value)
		{    
			$total_bs += $value->bp*$value->qty;
		}
		return $total_bs;
	}
	public function compay_bp($member_id,$month,$year)
	{
		$first_day_of_month = date($year.'-'.$month.'-01'); 
		$last_day_of_month  = date($year.'-'.$month.'-t');
		$sql = " create_date >='$first_day_of_month' and create_date<='$last_day_of_month' ";
		$this->db->where($sql);

		$get_all_coins = $this->db->get_where("orders",array("order_by"=>2,))->result_object();
		$total_bs = 0;
		foreach ($get_all_coins as $key => $value)
		{    
			$total_bs += $value->bp*$value->qty;
		}
		return $total_bs;
	}



	public function self_bp_income($user_id,$amount=0)
        {
		$get_user = $this->db->get_where("users",array("id"=>$user_id,))->result_object();
		if(!empty($get_user))
		{
			$get_user = $get_user[0];
			$date_time = date("Y-m-d H:i:s");
			$this->MemberModel->create_wallet($user_id);
			$this->db->order_by("id desc");
			$this->db->limit(1);
			$percent = $this->db->get_where("rank",array("user_id"=>$user_id,))->result_object()[0]->commision;
			$income = $amount*$percent/100;;
			$chaild_id = $user_id;
			if($income>0)
			{
				$tds = $income*tds_value/100;
				$gst = $income*gst_value/100;
				$file_charge = $income*file_charge/100;
				$final_income = $income-($gst+$tds+$file_charge);
				$data = array(
					"user_id"=>$user_id,
					"chaild_id"=>$chaild_id,
					"amount"=>0,
					"income"=>$income,
					"final_income"=>$final_income,
					"type"=>4,
					"payment"=>1,
					"tds"=>$tds,
					"gst"=>$gst,
					"file_charge"=>$file_charge,
					"date_time"=>$date_time,
				);
				if($this->db->insert("report",$data))
				{


					$month = date("m");
			        	$year = date("Y");
			        	$date = date("Y-m-d");
			        	$date_time = date("Y-m-d H:i:s");
			        	$get_user2 = $this->db->get_where("monthly_self_bp",array("user_id"=>$user_id,"year"=>$year,"month"=>$month,))->result_object();
			        	$total_bp_new =$amount;
			        	$data = array(
			        		"user_id"=>$user_id,
			        		"total_bp"=>$total_bp_new,
			        		"month"=>$month,
			        		"year"=>$year,
			        		"date"=>$date,
			        		"date_time"=>$date_time,
			        	);
			        	if(!empty($get_user2))
			        	{
			        		$get_user2 = $get_user2[0];
			        		$total_bp_new = $amount+$get_user2->total_bp;
						$this->db->update("monthly_self_bp",array("total_bp"=>$total_bp_new,),array("user_id"=>$user_id,"month"=>$month,"year"=>$year,));
					}
					else
					{
						$this->db->insert("monthly_self_bp",$data);
					}


					$now_self_bp = $get_user->self_bp+$amount;
					$this->db->update("users",array("self_bp"=>$now_self_bp,),array("id"=>$user_id,));
				}
				// print_r($data);
			}
		}
        }
        public function left_right_member_id($user_id)
        {
        	$left_members_id = 0;
		$right_members_id = 0;
		$my_left_member = $this->db->get_where("member_log",array("parent_id"=>$user_id,"side"=>1,))->result_object();
		$my_right_member = $this->db->get_where("member_log",array("parent_id"=>$user_id,"side"=>2,))->result_object();
		if(!empty($my_left_member))
		{
			$left_members_id = $my_left_member[0]->id;
		}
		if(!empty($my_right_member))
		{
			$right_members_id = $my_right_member[0]->id;
		}
		return array("left_members_id"=>$left_members_id,"right_members_id"=>$right_members_id,);
        }






























        public function insert_monthly_bp($user_id,$total_bp)
        {
        	$month = date("m");
        	$year = date("Y");
        	$date = date("Y-m-d");
        	$date_time = date("Y-m-d H:i:s");
        	$get_user = $this->db->get_where("monthly_bp",array("user_id"=>$user_id,"year"=>$year,"month"=>$month,))->result_object();
        	$total_bp_new =$total_bp;
        	$data = array(
        		"user_id"=>$user_id,
        		"total_bp"=>$total_bp_new,
        		"month"=>$month,
        		"year"=>$year,
        		"date"=>$date,
        		"date_time"=>$date_time,
        	);
        	if(!empty($get_user))
        	{
        		$get_user = $get_user[0];
        		$total_bp_new = $total_bp+$get_user->total_bp;
			$this->db->update("monthly_bp",array("total_bp"=>$total_bp_new,),array("user_id"=>$user_id,"month"=>$month,"year"=>$year,));
		}
		else
		{
			$this->db->insert("monthly_bp",$data);
		}
		$month_self_bp = 0;
		$get_user = $this->db->get_where("monthly_self_bp",array("user_id"=>$user_id,"year"=>$year,"month"=>$month,))->result_object();
		if(!empty($get_user))
		{
			$month_self_bp = $get_user[0]->total_bp;
		}
		$total_bp_new = $total_bp_new-$month_self_bp;
		return $total_bp_new;
        }

        public function month_self_bp($user_id)
        {
        	$month = date("m");
        	$year = date("Y");
        	$date = date("Y-m-d");
        	$date_time = date("Y-m-d H:i:s");
        	$month_self_bp = 0;
		$get_user = $this->db->get_where("monthly_self_bp",array("user_id"=>$user_id,"year"=>$year,"month"=>$month,))->result_object();
		if(!empty($get_user))
		{
			$month_self_bp = $get_user[0]->total_bp;
		}
		return $month_self_bp;
        }
        





	public function team_income($user_id,$amount=0,$chaild_id=0)
        {
		$get_user = $this->db->get_where("users",array("id"=>$user_id,))->result_object();
		if(!empty($get_user))
		{
			$get_user = $get_user[0];
			$date_time = date("Y-m-d H:i:s");
			$this->MemberModel->create_wallet($user_id);			
			$get_rank_array = $this->MemberModel->get_rank_array($user_id,0,$amount);
			$income_amount = $get_rank_array['income_amount'];
			$parent_id = $get_rank_array['user_id'];
			$get_total_bs1 = $get_rank_array['total_bs'];
			$income = $income_amount;	
			if($income>1)
			{
				$tds = $income*tds_value/100;
				$gst = $income*gst_value/100;
				$file_charge = $income*file_charge/100;
				$final_income = $income-($gst+$tds+$file_charge);
				$data = array(
					"user_id"=>$parent_id,
					"chaild_id"=>$user_id,
					"amount"=>0,
					"income"=>$income,
					"final_income"=>$final_income,
					"type"=>4,
					"payment"=>1,
					"tds"=>$tds,
					"gst"=>$gst,
					"file_charge"=>$file_charge,
					"date_time"=>$date_time,
				);
				if($this->db->insert("report",$data))
				{
					$this->db->update("users",array("total_get_bp"=>$get_total_bs1,),array("id"=>$parent_id,));
				}
			}
		}
        }

        public function team_incomeold($user_id,$amount=0,$chaild_id=0)
        {
		$get_user = $this->db->get_where("users",array("id"=>$user_id,))->result_object();
		if(!empty($get_user))
		{
			$get_user = $get_user[0];
			$date_time = date("Y-m-d H:i:s");


			$this->MemberModel->create_wallet($user_id);
			$get_total_bs = $this->MemberModel->get_total_bs($user_id);
			$get_rank_array = $this->MemberModel->get_rank_array($user_id,$get_total_bs,$amount);
			$commision = $get_rank_array['commision'];
			$income_amount = $get_rank_array['income_amount'];
			$income = $income_amount;
			// echo $income;	
			if($income>0)
			{
				$tds = $income*tds_value/100;
				$gst = $income*gst_value/100;
				$file_charge = $income*file_charge/100;
				$final_income = $income-($gst+$tds+$file_charge);
				$data = array(
					"user_id"=>$user_id,
					"chaild_id"=>$chaild_id,
					"amount"=>0,
					"income"=>$income,
					"final_income"=>$final_income,
					"type"=>4,
					"payment"=>1,
					"tds"=>$tds,
					"gst"=>$gst,
					"file_charge"=>$file_charge,
					"date_time"=>$date_time,
				);
				if($this->db->insert("report",$data))
				{
					$this->db->update("users",array("total_get_bp"=>$get_total_bs,),array("id"=>$user_id,));
				}
				print_r($data);
			}
		}
        }










	// public function total_pairs($user_id)
	// {
	// 	$left_member_id = 0;
	// 	$right_member_id = 0;
	// 	$total_left_users = 0;
	// 	$total_right_users = 0;
	// 	$total_pairs = 0;
	// 	$users = $this->db->get_where("member_log",array("parent_id"=>$user_id,))->result_object();
	// 	if(!empty($users))
	// 	{
	// 		if(count($users)>1)
	// 		{
	// 			$left_member_id = $users[0]->id;
	// 			$right_member_id = $users[1]->id;
	// 		}
	// 	}
	// 	if($left_member_id>0)
	// 	{
	// 		$left_members = $this->MemberModel->Parent_for_id_new($left_member_id);
	// 		$total_left_users = array();
	// 		$left_all_ids = $left_members;
	// 		$this->db->select("id");
	// 		$this->db->where_in("id",$left_all_ids);
	// 		$total_left_users = $this->db->get_where("users",array("subscription"=>1,))->result_object();
	// 		if(!empty($total_left_users))
	// 			$total_left_users = count($total_left_users);
	// 		else
	// 			$total_left_users = 0;
	// 	}
	// 	if($right_member_id>0)
	// 	{
	// 		$right_members = $this->view_member_data($right_member_id);
	// 		$right_members = $this->MemberModel->Parent_for_id_new($right_member_id);
	// 		$total_right_users = array();
	// 		$right_all_ids = $right_members;
	// 		$this->db->select("id");
	// 		$this->db->where_in("id",$right_all_ids);
	// 		$total_right_users = $this->db->get_where("users",array("subscription"=>1,))->result_object();
	// 		if(!empty($total_right_users))
	// 			$total_right_users = count($total_right_users);
	// 		else
	// 			$total_right_users = 0;
	// 	}
	// 	if($total_left_users>=$total_right_users)
	// 		$total_pairs = $total_right_users;
	// 	else
	// 		$total_pairs = $total_left_users;

	// 	$total_users = $total_right_users+$total_left_users;
	// 	if($total_users<3)
	// 	{
	// 		$total_pairs = 0;
	// 	}
	// 	return $total_pairs;
	// }


	public function total_pairs($user_id)
	{
		$left_member_id = 0;
		$right_member_id = 0;
		$total_left_users = 0;
		$total_right_users = 0;
		$total_pairs = 0;
		$left_members = $this->MemberModel->all_down_sponsers($user_id,1);
		$right_members = $this->MemberModel->all_down_sponsers($user_id,2);
		if(!empty($left_members))
		{
			$this->db->select("id");
			$this->db->where_in("id",$left_members);
			$total_left_users = $this->db->get_where("users",array("subscription"=>1,))->result_object();
			if(!empty($total_left_users))
				$total_left_users = count($total_left_users);
			else
				$total_left_users = 0;
		}
		if(!empty($right_members))
		{
			$this->db->select("id");
			$this->db->where_in("id",$right_members);
			$total_right_users = $this->db->get_where("users",array("subscription"=>1,))->result_object();
			if(!empty($total_right_users))
				$total_right_users = count($total_right_users);
			else
				$total_right_users = 0;
		}		
		if($total_left_users>=$total_right_users)
			$total_pairs = $total_right_users;
		else
			$total_pairs = $total_left_users;
		$total_users = $total_right_users+$total_left_users;
		if($total_users<3)
		{
			$total_pairs = 0;
		}
		// echo $total_pairs;
		// $users = $this->db->get_where("member_log",array("parent_id"=>$user_id,))->result_object();
		// if(!empty($users))
		// {
		// 	if(count($users)>1)
		// 	{
		// 		$left_member_id = $users[0]->id;
		// 		$right_member_id = $users[1]->id;
		// 	}
		// }
		// if($left_member_id>0)
		// {
		// 	$left_members = $this->MemberModel->Parent_for_id_new($left_member_id);
		// 	$total_left_users = array();
		// 	$left_all_ids = $left_members;
		// 	$this->db->select("id");
		// 	$this->db->where_in("id",$left_all_ids);
		// 	$total_left_users = $this->db->get_where("users",array("subscription"=>1,))->result_object();
		// 	if(!empty($total_left_users))
		// 		$total_left_users = count($total_left_users);
		// 	else
		// 		$total_left_users = 0;
		// }
		// if($right_member_id>0)
		// {
		// 	$right_members = $this->view_member_data($right_member_id);
		// 	$right_members = $this->MemberModel->Parent_for_id_new($right_member_id);
		// 	$total_right_users = array();
		// 	$right_all_ids = $right_members;
		// 	$this->db->select("id");
		// 	$this->db->where_in("id",$right_all_ids);
		// 	$total_right_users = $this->db->get_where("users",array("subscription"=>1,))->result_object();
		// 	if(!empty($total_right_users))
		// 		$total_right_users = count($total_right_users);
		// 	else
		// 		$total_right_users = 0;
		// }
		// if($total_left_users>=$total_right_users)
		// 	$total_pairs = $total_right_users;
		// else
		// 	$total_pairs = $total_left_users;

		// $total_users = $total_right_users+$total_left_users;
		// if($total_users<3)
		// {
		// 	$total_pairs = 0;
		// }
		return $total_pairs;
	}



	public function create_income($user_id,$chaild_id,$amount)
	{
		$get_user = $this->db->get_where("users",array("id"=>$user_id,))->result_object();
		if(!empty($get_user))
		{
			$get_user = $get_user[0];
			if($get_user->subscription==1 || 1==1)
			{
				$date_time = date("Y-m-d H:i:s");
				/* direct income start */
					$income = direct_income_price;
					$tds = $income*tds_value/100;
					$gst = $income*gst_value/100;
					$file_charge = $income*file_charge/100;
					$final_income = $income-($gst+$tds+$file_charge);
					$data = array(
						"user_id"=>$user_id,
						"chaild_id"=>$chaild_id,
						"amount"=>$amount,
						"income"=>$income,
						"final_income"=>$final_income,
						"type"=>1,
						"payment"=>0,
						"tds"=>$tds,
						"gst"=>$gst,
						"file_charge"=>$file_charge,
						"date_time"=>$date_time,
					);
					$this->db->insert("report",$data);
				/* direct income end */
			}
		}		
	}



	public function create_pair_income($user_id,$type)
	{
		/*pair income start*/
		if(empty($type))
			$all_upper_id = $this->MemberModel->Parent_for_id_desc($user_id);		
        	$all_upper_id[] = $user_id;
		foreach ($all_upper_id as $key => $value)
		{
			$get_user = $this->db->get_where("users",array("id"=>$value,"subscription"=>1,))->result_object();
			if(!empty($get_user))
			{
				$get_user = $get_user[0];
				$total_pairs = $this->MemberModel->total_pairs($value);
				if($total_pairs>0)
				{
					$count_left_users = 0;
					$count_rigth_users = 0;
					$final_pairs = 0;	
					$user_pairs = $get_user->total_pairs;
					if($total_pairs>$user_pairs)
					{
						$date_time = date("Y-m-d H:i:s");
						$final_pairs = $total_pairs-$user_pairs;
						$income = pair_price*$final_pairs;
						$tds = $income*tds_value/100;
						$gst = $income*gst_value/100;
						$file_charge = $income*file_charge/100;
						$final_income = $income-($gst+$tds+$file_charge);
						$data = array(
							"user_id"=>$value,
							"chaild_id"=>0,
							"amount"=>0,
							"income"=>$income,
							"final_income"=>$final_income,
							"type"=>2,
							"payment"=>1,
							"tds"=>$tds,
							"gst"=>$gst,
							"file_charge"=>$file_charge,
							"date_time"=>$date_time,
						);
						$this->db->insert("report",$data);
						$this->db->update("users",array("total_pairs"=>$total_pairs,),array("id"=>$value,));
					}				
				}
			}
		}
		/*pair income end*/
	}


	public function create_wallet($user_id)
	{
		if(empty($this->db->get_where("wallet",array("user_id"=>$user_id,))->result_object()))
		{
			$wallet_data = array(
				"user_id"=>$user_id,
				"amount"=>0,
				"coins"=>0,
				"total_bs"=>0,
				"total_get_bs"=>0,
				"total_invest"=>0,
			);
			$this->db->insert("wallet",$wallet_data);
		}
	}
	public function create_rank($user_id,$rank_id,$rank_name,$commision)
	{
		$year = date("Y");
		$month = date("m");
		$date_time = date("Y-m-d H:i:s");
		if(empty($this->db->get_where("rank",array("user_id"=>$user_id,"rank_id"=>$rank_id,))->result_object()))
			$this->db->insert("rank",array("user_id"=>$user_id,"rank_id"=>$rank_id,"rank_name"=>$rank_name,"commision"=>$commision,"year"=>$year,"month"=>$month,"date_time"=>$date_time,));
	}


	public function create_diamond_rank($user_id,$rank_id,$rank_name,$commision)
	{
		$year = date("Y");
		$month = date("m");
		$date_time = date("Y-m-d H:i:s");
		if(empty($this->db->get_where("rank",array("user_id"=>$user_id,"rank_id"=>$rank_id,))->result_object()))
			$this->db->insert("rank",array("user_id"=>$user_id,"rank_id"=>$rank_id,"rank_name"=>$rank_name,));
	}


	public function update_income_status($chaild_id,$status)
	{
		$date_time = date("Y-m-d H:i:s");
		$this->db->update("report",array("date_time"=>$date_time,"payment"=>$status,),array("chaild_id"=>$chaild_id,"payment"=>0,));
	}

	























	public function team_income_d_new($all_upper_id,$total_bp)
        {

        	foreach ($all_upper_id as $key => $value)
        	{
        		$user_id = $value;
        		$this->db->select("id,self_bp");
			$get_user = $this->db->get_where("users",array("id"=>$user_id,))->result_object();
			if(!empty($get_user))
			{
				$get_user = $get_user[0];
				$date_time = date("Y-m-d H:i:s");
				$this->MemberModel->create_wallet($user_id);			
				$get_rank_array = $this->MemberModel->get_rank_array_d_new($user_id,$all_upper_id,$total_bp);
				
			}
		}
        }
        public function get_rank_array_d_new($user_id,$all_upper_id,$total_bp)
	{

		$year = date("Y");
		$this_month = date("m");

		$year_selcted = date("Y");
		$month_selcted = date('m');

		$month = date('m');
		$parent_id = 0;
		$user_commision = 0;
		$parent_commision = 0;
		$total_bs = 0;
		$income_amount = 0;
		$get_rank_array = array(
			"user_id"=>0,
			"total_bs"=>0,
			"income_amount"=>0,
		);
		$this->db->where("parent_id!=",133);
		$parent = $this->db->get_where("member_log",array("id"=>$user_id,))->result_object();
		if(!empty($parent))
		{
			$parent_id = $parent[0]->sponser_id;
			$month_self_bp = $this->MemberModel->month_self_bp($parent_id);

			$this->db->select("id");
			$parent_user = $this->db->get_where("users",array("id"=>$parent_id,))->result_object();
			if(!empty($parent_user))
			{
				$this->db->limit(1);
				$this->db->order_by("id desc");
				$this->db->where(" rank_id<'8' ");
				$user_rank = $this->db->get_where("rank",array("user_id"=>$user_id,))->result_object();
				$date_time = date("Y-m-01 00:00:00");
			    	

			    	$where = "user_id='$parent_id' ";
			    	// $where .= " and rank_id<8  and date_time<'$date_time' ";
			    	$this->db->limit(1);
			    	$this->db->order_by("id desc");
			    	$this->db->where($where);
				$parent_rank = $this->db->get_where("rank")->result_object();
				if(empty($parent_rank))
					$parent_rank = $this->db->get_where("rank",array("rank_id"=>1,"user_id"=>$parent_id,))->result_object();
				if(!empty($user_rank))
					$user_commision = $user_rank[0]->commision;
				if(!empty($parent_rank))
					$parent_commision = $parent_rank[0]->commision;

				$this->MemberModel->insert_monthly_bp($user_id,$total_bp);
				$total_bs = $this->MemberModel->get_total_bs_in_month($user_id,$month,$year);
				if($user_commision<$parent_commision)
				{
					$commision = $parent_commision-$user_commision;
					$total_get_amount = round($this->MemberModel->total_get_amount($parent_id),2);
					$income_amount = $total_bs-$total_get_amount;
					if($income_amount>0)
					{
						$income_amount = $income_amount*$commision/100;
						$get_rank_array = array(
							"user_id"=>$parent_id,
							"total_bs"=>$total_bs,
							"commision"=>$commision,
							"income_amount"=>$income_amount,
						);
						$income_amount = $get_rank_array['income_amount'];
						$parent_id = $get_rank_array['user_id'];
						$get_total_bs1 = $get_rank_array['total_bs'];
						$income = $income_amount;	
						if($income>1)
						{
							// $month_self_bp
							$income_ok = 1;
							$this->db->limit(1);
						    	$this->db->order_by("id desc");
							$parent_rank_check = $this->db->get_where("rank",array("user_id"=>$parent_id,))->result_object();
							if($parent_rank_check[0]->rank_id>=4)
							{
								if($month_self_bp<300)
									$income_ok = 0;
							}
							if($parent_rank_check[0]->rank_id>=7)
							{
								if($month_self_bp<500)
									$income_ok = 0;
							}
							if($parent_rank_check[0]->rank_id>=11)
							{
								$income_ok = 1;
							}
							if($income_ok==1)
							{
								$tds = $income*tds_value/100;
								$gst = $income*gst_value/100;
								$file_charge = $income*file_charge/100;
								$final_income = $income-($gst+$tds+$file_charge);
								$data = array(
									"user_id"=>$parent_id,
									"chaild_id"=>$user_id,
									"amount"=>0,
									"income"=>$income,
									"final_income"=>$final_income,
									"type"=>4,
									"payment"=>1,
									"tds"=>$tds,
									"gst"=>$gst,
									"file_charge"=>$file_charge,
									"date_time"=>$date_time,
								);
								if($this->db->insert("report",$data))
								{
									$this->db->update("users",array("total_get_bp"=>$get_total_bs1,),array("id"=>$parent_id,));
								}
							}
						}








						$income_ok = 1;
						$this->db->limit(1);
					    	$this->db->order_by("id desc");
						$parent_rank_check = $this->db->get_where("rank",array("user_id"=>$parent_id,))->result_object();
						if($parent_rank_check[0]->rank_id>=4)
						{
							if($month_self_bp<300)
								$income_ok = 0;
						}
						if($parent_rank_check[0]->rank_id>=7)
						{
							if($month_self_bp<500)
								$income_ok = 0;
						}
						if($parent_rank_check[0]->rank_id>=11)
						{
							$income_ok = 1;
						}
						if($income_ok==1)
						{
							  
							  // $left_members_id = 0;
							  // $right_members_id = 0;
							  // $my_left_member = $this->db->get_where("member_log",array("parent_id"=>$parent_id,"side"=>1,))->result_object();
							  // $my_right_member = $this->db->get_where("member_log",array("parent_id"=>$parent_id,"side"=>2,))->result_object();
							  // if(!empty($my_left_member))
							  // {
							  //   $left_members_id = $my_left_member[0]->id;
							  // }
							  // if(!empty($my_right_member))
							  // {
							  //   $right_members_id = $my_right_member[0]->id;
							  // }
							  // $team_a_bp = $this->MemberModel->get_total_bs_in_month($left_members_id,$month_selcted,$year_selcted);
							  // $team_b_bp = $this->MemberModel->get_total_bs_in_month($right_members_id,$month_selcted,$year_selcted);





		$left_members_ids = $this->MemberModel->all_direct_ids($parent_id,1);
		$right_members_ids = $this->MemberModel->all_direct_ids($parent_id,2);
		$team_a_bp = $this->MemberModel->get_total_bs_in_month($left_members_ids,$month_selcted,$year_selcted);
		$team_b_bp = $this->MemberModel->get_total_bs_in_month($right_members_ids,$month_selcted,$year_selcted);






							  // $total_bs = $team_a_bp+$team_b_bp;
							  $income = $total_bs*$commision/100;
							  if($team_a_bp>=5000 && $team_b_bp>=5000)
							  {
							        $this->insert_income($income,$parent_id,$month_selcted,$year_selcted,5);
							  }
							  if($team_a_bp>=15000 && $team_b_bp>=15000)
							  {
							        $this->insert_income($income,$parent_id,$month_selcted,$year_selcted,6);
							  }
							  if($team_a_bp>=40000 && $team_b_bp>=40000)
							  {
							        $this->insert_income($income,$parent_id,$month_selcted,$year_selcted,7);
							  }
							  if($team_a_bp>=80000 && $team_b_bp>=80000)
							  {
							        $this->insert_income($income,$parent_id,$month_selcted,$year_selcted,8);
							  }
							  if($team_a_bp>=150000 && $team_b_bp>=150000)
							  {
							        $this->insert_income($income,$parent_id,$month_selcted,$year_selcted,9);
							  }
							  if($team_a_bp>=300000 && $team_b_bp>=300000)
							  {
							        $this->insert_income($income,$parent_id,$month_selcted,$year_selcted,10);
							  }
						}
					}
				}
















			$amount = $total_bs;
			$diamonds = $this->MemberModel->count_diamonds($user_id);
	        	if($diamonds['left_dianmonds']>=3 && $diamonds['right_dianmonds']>=3)
			{
				$this->MemberModel->create_rank($user_id,8,'Blue Diamond',3);
			}
			if($diamonds['left_blue_dianmonds']>=2 && $diamonds['right_blue_dianmonds']>=2)
			{
				$this->MemberModel->create_rank($user_id,9,'Ruby Diamond',2);
			}
			if($diamonds['left_ruby_dianmonds']>=1 && $diamonds['right_ruby_dianmonds']>=1)
			{
				$this->MemberModel->create_rank($user_id,10,'Noor Diamond',1);
			}
			if($diamonds['left_noor_dianmonds']>=1 && $diamonds['right_noor_dianmonds']>=1)
			{
				$this->MemberModel->create_rank($user_id,11,'Freedom Club Income',2);
			}
			$income_ok = 1;
			$this->db->limit(1);
		    	$this->db->order_by("id desc");
			$user_rank_check = $this->db->get_where("rank",array("user_id"=>$user_id,))->result_object();
			if($user_rank_check[0]->rank_id>=4)
			{
				if($month_self_bp<300)
					$income_ok = 0;
			}
			if($user_rank_check[0]->rank_id>=7)
			{
				if($month_self_bp<500)
					$income_ok = 0;
			}
			
			if($income_ok==1)
			{
				$total_diamonds = $diamonds['left_dianmonds']+$diamonds['right_dianmonds'];
		        	if($total_diamonds>0)
		        	{
		        		$percent = 0;
		        		$l_percent = 0;
		        		$r_percent = 0;
		        		if($diamonds['left_dianmonds']==1)
		        			$l_percent = 1;
		        		if($diamonds['left_dianmonds']==2)
		        			$l_percent = 1.5;
		        		if($diamonds['left_dianmonds']==3)
		        			$l_percent = 2;

		        		if($diamonds['right_dianmonds']==1)
		        			$r_percent = 1;
		        		if($diamonds['right_dianmonds']==2)
		        			$r_percent = 1.5;
		        		if($diamonds['right_dianmonds']==3)
		        			$r_percent = 2;

		        		$percent = $l_percent+$r_percent;
		        		$income = $amount*$percent/100;
					$date_time = date("Y-m-d H:i:s");
					$tds = $income*tds_value/100;
					$gst = $income*gst_value/100;
					$file_charge = $income*file_charge/100;
					$final_income = $income-($gst+$tds+$file_charge);
					$data = array(
						"user_id"=>$user_id,
						"chaild_id"=>$user_id,
						"amount"=>0,
						"income"=>$income,
						"final_income"=>$final_income,
						"type"=>11,
						"payment"=>1,
						"tds"=>$tds,
						"gst"=>$gst,
						"file_charge"=>$file_charge,
						"date_time"=>$date_time,
						"month"=>date("m"),
						"year"=>date("Y"),
					);
					if(empty($this->db->get_where("report",array("type"=>11,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),))->result_object()))
						$this->db->insert("report",$data);
					else
						$this->db->update("report",$data,array("type"=>11,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),));
		        	}        	
		        	$total_blue_diamonds = $diamonds['left_blue_dianmonds']+$diamonds['right_blue_dianmonds'];
		        	if($total_blue_diamonds>0)
		        	{
		        		$percent = 0;
		        		$l_percent = 0;
		        		$r_percent = 0;
		        		if($diamonds['left_blue_dianmonds']==1)
		        			$l_percent = 1;
		        		if($diamonds['left_blue_dianmonds']==2)
		        			$l_percent = 1.5;


		        		if($diamonds['right_blue_dianmonds']==1)
		        			$r_percent = 1;
		        		if($diamonds['right_blue_dianmonds']==2)
		        			$r_percent = 1.5;

		        		$percent = $l_percent+$r_percent;
		        		$income = $amount*$percent/100;
					$date_time = date("Y-m-d H:i:s");	
					$chaild_id = $user_id;
					$tds = $income*tds_value/100;
					$gst = $income*gst_value/100;
					$file_charge = $income*file_charge/100;
					$final_income = $income-($gst+$tds+$file_charge);
					$data = array(
						"user_id"=>$user_id,
						"chaild_id"=>$user_id,
						"amount"=>0,
						"income"=>$income,
						"final_income"=>$final_income,
						"type"=>12,
						"payment"=>1,
						"tds"=>$tds,
						"gst"=>$gst,
						"file_charge"=>$file_charge,
						"date_time"=>$date_time,
						"month"=>date("m"),
						"year"=>date("Y"),
					);
					if(empty($this->db->get_where("report",array("type"=>12,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),))->result_object()))
						$this->db->insert("report",$data);
					else
						$this->db->update("report",$data,array("type"=>12,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),));
		        	}        	
		        	$total_ruby_diamonds = $diamonds['left_ruby_dianmonds']+$diamonds['right_ruby_dianmonds'];
		        	if($total_ruby_diamonds>0)
		        	{
		        		$percent = 0;
		        		$l_percent = 0;
		        		$r_percent = 0;
		        		if($diamonds['left_ruby_dianmonds']==1)
		        			$l_percent = 1;


		        		if($diamonds['right_ruby_dianmonds']==1)
		        			$r_percent = 1;

		        		$percent = $l_percent+$r_percent;
		        		$income = $amount*$percent/100;		
					$date_time = date("Y-m-d H:i:s");	
					$chaild_id = $user_id;
					$tds = $income*tds_value/100;
					$gst = $income*gst_value/100;
					$file_charge = $income*file_charge/100;
					$final_income = $income-($gst+$tds+$file_charge);
					$data = array(
						"user_id"=>$user_id,
						"chaild_id"=>$user_id,
						"amount"=>0,
						"income"=>$income,
						"final_income"=>$final_income,
						"type"=>13,
						"payment"=>1,
						"tds"=>$tds,
						"gst"=>$gst,
						"file_charge"=>$file_charge,
						"date_time"=>$date_time,
						"month"=>date("m"),
						"year"=>date("Y"),
					);
					if(empty($this->db->get_where("report",array("type"=>13,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),))->result_object()))
						$this->db->insert("report",$data);
					else
						$this->db->update("report",$data,array("type"=>13,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),));
		        	}
		        	$total_noor_diamonds = $diamonds['left_noor_dianmonds']+$diamonds['right_noor_dianmonds'];
		        	if($total_noor_diamonds>0)
		        	{
		        		$percent = 0;
		        		$l_percent = 0;
		        		$r_percent = 0;
		        		if($diamonds['left_noor_dianmonds']==1)
		        			$l_percent = 0.5;

		        		if($diamonds['right_noor_dianmonds']==1)
		        			$r_percent = 0.5;

		        		$percent = $l_percent+$r_percent;
		        		$income = $amount*$percent/100;						
					$date_time = date("Y-m-d H:i:s");	
					$chaild_id = $user_id;
					$tds = $income*tds_value/100;
					$gst = $income*gst_value/100;
					$file_charge = $income*file_charge/100;
					$final_income = $income-($gst+$tds+$file_charge);
					$data = array(
						"user_id"=>$user_id,
						"chaild_id"=>$user_id,
						"amount"=>0,
						"income"=>$income,
						"final_income"=>$final_income,
						"type"=>14,
						"payment"=>1,
						"tds"=>$tds,
						"gst"=>$gst,
						"file_charge"=>$file_charge,
						"date_time"=>$date_time,
						"month"=>date("m"),
						"year"=>date("Y"),
					);
					if(empty($this->db->get_where("report",array("type"=>14,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),))->result_object()))
						$this->db->insert("report",$data);
					else
						$this->db->update("report",$data,array("type"=>14,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),));
		        	}
		        }
		        $income_ok = 0;
		        if($user_rank_check[0]->rank_id>=11)
			{
				$income_ok = 1;
			}
	   //      	if($income_ok==1)
	   //      	{        		
	   //      		$percent = 0;

	   //      		$income = $amount*$percent/100;



				// $date_time = date("Y-m-d H:i:s");
				// $chaild_id = $user_id;
				// $tds = $income*tds_value/100;
				// $gst = $income*gst_value/100;
				// $file_charge = $income*file_charge/100;
				// $final_income = $income-($gst+$tds+$file_charge);
				// $data = array(
				// 	"user_id"=>$user_id,
				// 	"chaild_id"=>$chaild_id,
				// 	"amount"=>0,
				// 	"income"=>$income,
				// 	"final_income"=>$final_income,
				// 	"type"=>15,
				// 	"payment"=>1,
				// 	"tds"=>$tds,
				// 	"gst"=>$gst,
				// 	"file_charge"=>$file_charge,
				// 	"date_time"=>$date_time,
				// 	"month"=>date("m"),
				// 	"year"=>date("Y"),
				// );
				// if(empty($this->db->get_where("report",array("type"=>15,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),))->result_object()))
				// 	$this->db->insert("report",$data);
				// else
				// 	$this->db->update("report",$data,array("type"=>15,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),));
	   //      	}


		        








			}
		}
		$left_members_id = 0;
		$right_members_id = 0;
		$my_left_member = $this->db->get_where("member_log",array("parent_id"=>$user_id,"side"=>1,))->result_object();
		$my_right_member = $this->db->get_where("member_log",array("parent_id"=>$user_id,"side"=>2,))->result_object();
		if(!empty($my_left_member))
		{
			$left_members_id = $my_left_member[0]->id;
		}
		if(!empty($my_right_member))
		{
			$right_members_id = $my_right_member[0]->id;
		}
		$team_a_bp = $this->MemberModel->get_total_bs_d_new($left_members_id);
		$team_b_bp = $this->MemberModel->get_total_bs_d_new($right_members_id);	


		$commision = 5;
		$less_rank_amount = 0;
		$next = 1;
		$this->MemberModel->create_rank($user_id,1,'Associate',5);
		/* check and create executive */
			if($team_a_bp>=2000 && $team_b_bp>=2000)
			{
				$this->MemberModel->create_rank($user_id,2,'Star',10);
				$less_rank_amount = 2000;
			}
		/* check and create executive end */
		/* check and create advance executive */
			if($team_a_bp>=15000 && $team_b_bp>=15000)
			{
				$this->MemberModel->create_rank($user_id,3,'OPAL Star',14);
				$less_rank_amount = 15000;
			}
		/* check and create advance executive end */
		/* check and create manager */
			if($team_a_bp>=40000 && $team_b_bp>=40000)
			{
				$this->MemberModel->create_rank($user_id,4,'ToPAZ',17);
				$less_rank_amount = 40000;				
			}
		/* check and create manager end */
		/* check and create senior manager */
			if($team_a_bp>=80000 && $team_b_bp>=80000 && $next==1)
			{
				$this->MemberModel->create_rank($user_id,5,'Pearl',20);
				$less_rank_amount = 80000;
			}
		/* check and create senior manager end */
		/* check and circle head */
			if($team_a_bp>=160000 && $team_b_bp>=160000 && $next==1)
			{
				$this->MemberModel->create_rank($user_id,6,'Ruby',23);
				$less_rank_amount = 160000;
			}
		/* check and circle head end */
		/* check and directer */
			if($team_a_bp>=320000 && $team_b_bp>=320000 && $next==1)
			{
				$this->MemberModel->create_rank($user_id,7,'Diamond',26);
				$less_rank_amount = 320000;
			}
		/* check and directer end */
		// $diamonds = $this->MemberModel->count_diamonds($user_id);
		// if($diamonds['left_dianmonds']>=3 && $diamonds['right_dianmonds']>=3)
		// {
		// 	$this->MemberModel->create_rank($user_id,8,'Blue Diamond',3);
		// }
		// if($diamonds['left_blue_dianmonds']>=2 && $diamonds['right_blue_dianmonds']>=2)
		// {
		// 	$this->MemberModel->create_rank($user_id,9,'Ruby Diamond',2);
		// }
		// if($diamonds['left_ruby_dianmonds']>=1 && $diamonds['right_ruby_dianmonds']>=1)
		// {
		// 	$this->MemberModel->create_rank($user_id,10,'Noor Diamond',1);
		// }
		// if($diamonds['left_noor_dianmonds']>=1 && $diamonds['right_noor_dianmonds']>=1)
		// {
		// 	$this->MemberModel->create_rank($user_id,11,'Freedom Club Income',2);
		// }
		return $get_rank_array;
	}
	public function insert_income($income,$member_id,$month,$year,$type)
	{
		    $date_time = date("Y-m-d H:i:s");
		    $tds = $income*tds_value/100;
		    $gst = $income*gst_value/100;
		    $file_charge = $income*file_charge/100;
		    $final_income = $income-($gst+$tds+$file_charge);
		    $data = array(
		      "user_id"=>$member_id,
		      "chaild_id"=>0,
		      "amount"=>0,
		      "income"=>$income,
		      "final_income"=>$final_income,
		      "type"=>$type,
		      "payment"=>1,
		      "tds"=>$tds,
		      "gst"=>$gst,
		      "file_charge"=>$file_charge,
		      "date_time"=>$date_time,
		      "month"=>$month,
		      "year"=>$year,
		    );
		    $get_report = $this->db->get_where("report",array("user_id"=>$member_id,"month"=>$month,"year"=>$year,"type"=>$type,))->result_object();
		    if(empty($get_report))
		    	$this->db->insert("report",$data);
		    else
		    {
		    	$this->db->update("report",$data,array("id"=>$get_report[0]->id,));
		    }
	}
	public function create_diamond_income($user_id,$month_selcted='',$year_selcted='',$parent_id='',$total_bs='')
        {
        	$user_commision = 0;
        	$parent_commision = 0;
	    	$where = "rank_id>'6' ";
	    	$this->db->limit(1);
	    	$this->db->order_by("id desc");
	    	$this->db->where($where);
		$parent_rank = $this->db->get_where("rank",array("user_id"=>$parent_id,))->result_object();


		$this->db->limit(1);
		$this->db->order_by("id desc");
		$this->db->where(" rank_id>'6' ");
		$user_rank = $this->db->get_where("rank",array("user_id"=>$user_id,))->result_object();
		if(!empty($user_rank))
		{
			if($user_rank[0]->rank_id!=7)
				$user_commision = $user_rank[0]->commision;
			else
				$user_commision = 4;
		}
		if(!empty($parent_rank))
		{
			if($parent_rank[0]->rank_id!=7)
				$parent_commision = $parent_rank[0]->commision;
			else
				$parent_commision = 4;
		}       	
		$percent = $parent_commision-$user_commision;
		$chaild_id = $user_id;
		$user_id = $parent_id;

		$get_user = $this->db->get_where("users",array("id"=>$user_id,))->result_object();
		if(!empty($get_user) && $percent>0)
		{
			$get_user = $get_user[0];
			if(!empty($month_selcted) || empty($year_selcted))
			{
				$month_selcted = date("m");
		        	$year_selcted = date("Y");				
			}
	        	$amount = $total_bs;
	        	$diamonds = $this->MemberModel->count_diamonds($user_id);
	        	if($diamonds['left_dianmonds']>=3 && $diamonds['right_dianmonds']>=3) 
	        	{
	        		$this->MemberModel->create_rank($user_id,8,'Blue Diamond',3);
	        		$income = $amount*$percent/100;
				$date_time = date("Y-m-d H:i:s");	
				
				$tds = $income*tds_value/100;
				$gst = $income*gst_value/100;
				$file_charge = $income*file_charge/100;
				$final_income = $income-($gst+$tds+$file_charge);
				$data = array(
					"user_id"=>$user_id,
					"chaild_id"=>$chaild_id,
					"amount"=>0,
					"income"=>$income,
					"final_income"=>$final_income,
					"type"=>11,
					"payment"=>1,
					"tds"=>$tds,
					"gst"=>$gst,
					"file_charge"=>$file_charge,
					"date_time"=>$date_time,
					"month"=>date("m"),
					"year"=>date("Y"),
				);
				if(empty($this->db->get_where("report",array("type"=>11,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),))->result_object()))
					$this->db->insert("report",$data);
				else
					$this->db->update("report",$data,array("type"=>11,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),));

	        	}
	        	if($diamonds['left_blue_dianmonds']>=2 && $diamonds['right_blue_dianmonds']>=2)
	        	{
	        		$this->MemberModel->create_rank($user_id,9,'Ruby Diamond',2);
	        		// $percent = 3;				
				$date_time = date("Y-m-d H:i:s");	
				$chaild_id = $user_id;
				$tds = $income*tds_value/100;
				$gst = $income*gst_value/100;
				$file_charge = $income*file_charge/100;
				$final_income = $income-($gst+$tds+$file_charge);
				$data = array(
					"user_id"=>$user_id,
					"chaild_id"=>$chaild_id,
					"amount"=>0,
					"income"=>$income,
					"final_income"=>$final_income,
					"type"=>12,
					"payment"=>1,
					"tds"=>$tds,
					"gst"=>$gst,
					"file_charge"=>$file_charge,
					"date_time"=>$date_time,
					"month"=>date("m"),
					"year"=>date("Y"),
				);
				if(empty($this->db->get_where("report",array("type"=>12,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),))->result_object()))
					$this->db->insert("report",$data);
				else
					$this->db->update("report",$data,array("type"=>12,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),));
	        	}
	        	if($diamonds['left_ruby_dianmonds']>=1 && $diamonds['right_ruby_dianmonds']>=1)
	        	{
	        		$this->MemberModel->create_rank($user_id,10,'Noor Diamond',1);
	        		// $percent = 2;
	        		$income = $amount*$percent/100;
				
				$date_time = date("Y-m-d H:i:s");	
				$chaild_id = $user_id;
				$tds = $income*tds_value/100;
				$gst = $income*gst_value/100;
				$file_charge = $income*file_charge/100;
				$final_income = $income-($gst+$tds+$file_charge);
				$data = array(
					"user_id"=>$user_id,
					"chaild_id"=>$chaild_id,
					"amount"=>0,
					"income"=>$income,
					"final_income"=>$final_income,
					"type"=>13,
					"payment"=>1,
					"tds"=>$tds,
					"gst"=>$gst,
					"file_charge"=>$file_charge,
					"date_time"=>$date_time,
					"month"=>date("m"),
					"year"=>date("Y"),
				);
				if(empty($this->db->get_where("report",array("type"=>13,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),))->result_object()))
					$this->db->insert("report",$data);
				else
					$this->db->update("report",$data,array("type"=>13,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),));
	        	}
	        	if($diamonds['left_noor_dianmonds']>=1 && $diamonds['right_onor_dianmonds']>=1)
	        	{
	        		// $percent = 1;
	        		$income = $amount*$percent/100;
				
				$date_time = date("Y-m-d H:i:s");	
				$chaild_id = $user_id;
				$tds = $income*tds_value/100;
				$gst = $income*gst_value/100;
				$file_charge = $income*file_charge/100;
				$final_income = $income-($gst+$tds+$file_charge);
				$data = array(
					"user_id"=>$user_id,
					"chaild_id"=>$chaild_id,
					"amount"=>0,
					"income"=>$income,
					"final_income"=>$final_income,
					"type"=>14,
					"payment"=>1,
					"tds"=>$tds,
					"gst"=>$gst,
					"file_charge"=>$file_charge,
					"date_time"=>$date_time,
					"month"=>date("m"),
					"year"=>date("Y"),
				);
				if(empty($this->db->get_where("report",array("type"=>14,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),))->result_object()))
					$this->db->insert("report",$data);
				else
					$this->db->update("report",$data,array("type"=>14,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),));
	        	}
	        	if($diamonds['left_freedome']>=1 && $diamonds['right_freedome']>=1)
	        	{
	        		$this->MemberModel->create_rank($user_id,11,'Freedom Club Income',2);
	        		// $percent = 2;
	        		$income = $amount*$percent/100;
				
				$date_time = date("Y-m-d H:i:s");	
				$chaild_id = $user_id;
				$tds = $income*tds_value/100;
				$gst = $income*gst_value/100;
				$file_charge = $income*file_charge/100;
				$final_income = $income-($gst+$tds+$file_charge);
				$data = array(
					"user_id"=>$user_id,
					"chaild_id"=>$chaild_id,
					"amount"=>0,
					"income"=>$income,
					"final_income"=>$final_income,
					"type"=>15,
					"payment"=>1,
					"tds"=>$tds,
					"gst"=>$gst,
					"file_charge"=>$file_charge,
					"date_time"=>$date_time,
					"month"=>date("m"),
					"year"=>date("Y"),
				);
				if(empty($this->db->get_where("report",array("type"=>15,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),))->result_object()))
					$this->db->insert("report",$data);
				else
					$this->db->update("report",$data,array("type"=>15,"user_id"=>$user_id,"month"=>date("m"),"year"=>date("Y"),));
	        	}
		}
        }

        public function repurchase_income($user_id,$parent_id='')
        {
        	$month_selcted = date("m");
        	$year_selcted = date("Y");
        	$user_commision = 0;
        	$parent_commision = 0;
        	$parent_rank_id = 0;
        	$user_rank_id = 0;
	    	$where = "rank_id>'6' ";
	    	$this->db->limit(1);
	    	$this->db->order_by("id desc");
	    	$this->db->where($where);
		$parent_rank = $this->db->get_where("rank",array("user_id"=>$parent_id,))->result_object();



		$this->db->limit(1);
		$this->db->order_by("id desc");
		$this->db->where(" rank_id>'6' ");
		$user_rank = $this->db->get_where("rank",array("user_id"=>$user_id,))->result_object();
		if(!empty($user_rank))
		{
			if($user_rank[0]->rank_id!=7)
				$user_commision = $user_rank[0]->commision;
			else
				$user_commision = 4;
		}
		if(!empty($parent_rank))
		{
			if($parent_rank[0]->rank_id!=7)
				$parent_commision = $parent_rank[0]->commision;
			else
				$parent_commision = 4;
		}       	
		$percent = $parent_commision-$user_commision;
		$member_id = $parent_id;


		print_r($user_rank);

		  die;

		$get_user = $this->db->get_where("users",array("id"=>$user_id,))->result_object();
		if(!empty($get_user))
		{

		  $left_members_id = 0;
		  $right_members_id = 0;
		  $my_left_member = $this->db->get_where("member_log",array("parent_id"=>$member_id,"side"=>1,))->result_object();
		  $my_right_member = $this->db->get_where("member_log",array("parent_id"=>$member_id,"side"=>2,))->result_object();
		  if(!empty($my_left_member))
		  {
		    $left_members_id = $my_left_member[0]->id;
		  }
		  if(!empty($my_right_member))
		  {
		    $right_members_id = $my_right_member[0]->id;
		  }
		  $team_a_bp = $this->MemberModel->get_total_bs_in_month($left_members_id,$month_selcted,$year_selcted);
		  $team_b_bp = $this->MemberModel->get_total_bs_in_month($right_members_id,$month_selcted,$year_selcted);

		  


		  if($team_a_bp>=5000 && $team_b_bp>=5000)
		  {
		      $income = $this->MemberModel->compay_bp($member_id,$month_selcted,$year_selcted);
		      if(empty($this->db->get_where("report",array("user_id"=>$member_id,"type"=>5,"month"=>$month_selcted,"year"=>$year_selcted,))->result_object()))
		          $this->insert_income($income,$member_id,$month_selcted,$year_selcted,5);
		  }
		  if($team_a_bp>=15000 && $team_b_bp>=15000)
		  {
		      $income = $this->MemberModel->compay_bp($member_id,$month_selcted,$year_selcted);
		      if(empty($this->db->get_where("report",array("user_id"=>$member_id,"type"=>6,"month"=>$month_selcted,"year"=>$year_selcted,))->result_object()))
		          $this->insert_income($income,$member_id,$month_selcted,$year_selcted,6);
		  }
		  if($team_a_bp>=40000 && $team_b_bp>=40000)
		  {
		      $income = $this->MemberModel->compay_bp($member_id,$month_selcted,$year_selcted);
		      if(empty($this->db->get_where("report",array("user_id"=>$member_id,"type"=>7,"month"=>$month_selcted,"year"=>$year_selcted,))->result_object()))
		          $this->insert_income($income,$member_id,$month_selcted,$year_selcted,7);
		  }
		  if($team_a_bp>=80000 && $team_b_bp>=80000)
		  {
		      $income = $this->MemberModel->compay_bp($member_id,$month_selcted,$year_selcted);
		      if(empty($this->db->get_where("report",array("user_id"=>$member_id,"type"=>8,"month"=>$month_selcted,"year"=>$year_selcted,))->result_object()))
		          $this->insert_income($income,$member_id,$month_selcted,$year_selcted,8);
		  }
		  if($team_a_bp>=150000 && $team_b_bp>=150000)
		  {
		      $income = $this->MemberModel->compay_bp($member_id,$month_selcted,$year_selcted);
		      if(empty($this->db->get_where("report",array("user_id"=>$member_id,"type"=>9,"month"=>$month_selcted,"year"=>$year_selcted,))->result_object()))
		          $this->insert_income($income,$member_id,$month_selcted,$year_selcted,9);
		  }
		  if($team_a_bp>=300000 && $team_b_bp>=300000)
		  {
		      $income = $this->MemberModel->compay_bp($member_id,$month_selcted,$year_selcted);
		      if(empty($this->db->get_where("report",array("user_id"=>$member_id,"type"=>10,"month"=>$month_selcted,"year"=>$year_selcted,))->result_object()))
		          $this->insert_income($income,$member_id,$month_selcted,$year_selcted,10);
		  }
		}
        }





	

 

 }

