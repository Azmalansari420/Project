<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class AdminModel extends \CodeIgniter\Model {
    protected $table = 'users';
    protected $allowedFields = ['user_name','user_email','user_password','user_created_at'];
}