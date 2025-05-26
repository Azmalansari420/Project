<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class ProductModel extends Model{
    protected $table = 'tbl_product';
    protected $primaryKey = 'id';
    protected $allowedFields = [
	'title',
	'file',
	'description',
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
	'pro_filters',
	'start_date',
	'end_date',
	'specifications',
	'mrp',
	'price',
	'cost',
	'discount',
	'special_price',
	'tax_class',
	'hits',
	'sku',
	'quantity',
	'min_qty',
	'max_qty',
	'shipping',
	'weight',
	'attributes',
	'groups',
	'related_pro',
	'page_banner',
	'sort_order',
	
	'udf1',
	'udf2',
	];
}