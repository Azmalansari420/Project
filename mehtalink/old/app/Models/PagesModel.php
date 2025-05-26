<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class PagesModel extends Model{
    protected $table = 'tbl_pages';
    protected $primaryKey = 'id';
    protected $allowedFields = [
	'title',
	'file',
	'description',
	'description2',
	'display',
	'status',
	'meta_tags',
	'meta_description',
	'parent_page',
	'slug',
	'custom_data',
	'updated_info',
	'attachment_link',
	'updated_date',
	'created_date',
	'admin_id',
	'last_viewed',
	'page_filter',
	'page_type',
	'redirect_url',
	'target_link',
	'page_banner',
	'embed_code',
	'menu_name',
	'sort_order',
	'unique_code',
	'hits',
	'udf1',
	'udf2',
	'udf3',
	'udf4',
	'udf5',
	];
}