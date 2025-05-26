<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class SettingModel extends Model{
    protected $table = ' tbl_settings';
    protected $primaryKey = 'id';
    protected $allowedFields = [
	'setting1',
	'setting2',
	'setting3',
	'setting4',
	'setting5',
	'setting6',
	'setting7',
	'setting8',
	'setting9',
	'setting10',
	'setting11',
	'setting12',
	'setting_count',
	'setting_end',
	];
}