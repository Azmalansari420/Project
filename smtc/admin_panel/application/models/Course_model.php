<?php 
class Course_model extends CI_Model
{	
	protected $table = 'tbl_course';
	/*start forum course model*/
	public function get_course_by_urlslug($key)
	{
		$this->db->where('url_slug',$key);
		return $this->db->get($this->table)->result();
	}
	
	public function save_course($data)
	{
		$this->db->insert($this->table,$data);


	}


	public function get_all_course()
	{
		return $this->db->get($this->table)->result();
	}
	public function get_course_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}
	public function update_course_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
	public function get_all_active_course()
	{
		$this->db->where('status',1);
		return $this->db->get($this->table)->result();
	}
	
	public function get_course_by_parent_menu($id)
	{
		$this->db->where('status','1');
		$this->db->where('parent_id',$id);
		return $this->db->get($this->table)->result();
	}


		public function get_course_by_child($id)
	{
		$this->db->where('status',1);
		$this->db->where('parent_id',$id);
		return $this->db->get($this->table)->result();
	}
	
	
	function get_all_child_course_with_count_product($parent_id)
	{
		$this->db->select('course.id, course.title, course.url_slug, count(product.id) as products');
		$this->db->from($this->table.' as course');
		$this->db->join('tbl_products as product','product.cat_id = course.id','left');
		$this->db->group_by('course.id');
		$this->db->where('course.parent_id',$parent_id);
		return $this->db->get()->result();
	}
	
	
	
	public function get_all_child_course($parent_id,$level =0)
	{
		$this->db->where('parent_id',$parent_id);
		$this->db->where('status',1);
		$query_data = $this->db->get($this->table)->result();
		
		if(count($query_data)>0)
		{		
			$level++;
			foreach($query_data as $data)
			{
				echo '<option value="'.$data->id.'">';
				echo str_repeat('--',$level-1).' '.$data->title;
				$child = $this->check_child_course($data->id);
				if(count($child))
				{
					$this->get_all_child_course($data->id,$level);
				}
				echo '</option>';
			}					
		}	
	}

	public function get_all_child_course_by_name($parent_id,$level =0)
	{   $this->db->where('status',1);
		$this->db->where('parent_id',$parent_id);
		$query_data = $this->db->get($this->table)->result();
		
		if(count($query_data)>0)
		{		
			$level++;
			foreach($query_data as $data)
			{
				echo '<option value="'.$data->title.'">';
				echo str_repeat('--',$level-1).' '.$data->title;
				$child = $this->check_child_course($data->id);
				if(count($child))
				{
					$this->get_all_child_course_by_name($data->id,$level);
				}
				echo '</option>';
			}					
		}	
	}
	
	public function get_all_child_course_for_admin($parent_id,$level =0)
	{   $cat_data = array();
		$this->db->where('id',$parent_id);
		$query_data = $this->db->get($this->table)->result();
		//return ($parent_id==0 && $level==0)?'Root':'';
		if(count($query_data)>0)
		{	
			$level++;			
			$oprator = ($level!=1)?' <strong> / </strong> ':'';
			array_push($cat_data,$query_data[0]->title);
			array_push($cat_data,$this->get_all_child_course_for_admin($query_data[0]->parent_id,$level));								
		}
		return $cat_data;
		//return $data;		
	}


	public function get_quality_type()
	{
    $this->db->select('*');
    $this->db->from('tbl_quality');
     $query = $this->db->get();    
     return $query->result();
}


	public function get_sub_cat()
	{
	    $this->db->select('*');
	    $this->db->from('tbl_blogs');
	    $query = $this->db->get();    
	    return $query->result();
    }

    public function get_course_by_sub($id)
	{
		$this->db->where('status',1);
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}



  public function get_all_age1()
	{
		
		return $this->db->get('tbl_products')->result();
	}
	/*public function get_all_child_course($id,$level =0)
	{
		$this->db->where('parent_id',$id);
		$query_data = $this->db->get($this->table)->result();
		if(count($query_data)>0)
		{
			$level++;
			echo "<ul>";
			foreach($query_data as $data)
			{
				echo '<li>';
				echo $data->title;
				$child = $this->check_child_course($data->id);
				if(count($child))
				{
					$this->get_all_child_course($data->id);
				}
				echo '</li>';
			}
			echo "</ul>";
		}	
	}*/
	
	public function check_child_course($id)
	{
		$this->db->where('parent_id',$id);
		return $this->db->get($this->table)->result();
	}
	
	public function delete_course_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
}
