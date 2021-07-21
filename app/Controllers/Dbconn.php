<?php 
  
  namespace App\Controllers;
  

class Dbconn extends \CodeIgniter\Controller{




public function index(){


	$db = \Config\Database::connect();
  print_r($db);

}


}

 ?>