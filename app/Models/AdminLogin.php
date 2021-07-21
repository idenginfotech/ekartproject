<?php 
  
  namespace App\Models;
  use CodeIgniter\Model;

class AdminLogin extends Model{


   protected $table= 'admin';
   protected $primaryKey= 'id';
   protected $allowedFields = ['username', 'password', 'status'];

}

 



 ?>