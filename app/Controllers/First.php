<?php 
  
  namespace App\Controllers;
  use CodeIgniter\Controller;

class First extends BaseController{




public function index(){


	$session = session();
  if ($session->has('admin')) {
    
	 return view('admin/dashboard');

}
else{

  return redirect()->to('login');
}
}

}

 ?>