<?php 
  
  namespace App\Controllers;
  use CodeIgniter\Controller;

class Login extends BaseController{

  public function  __construct(){
    helper(['url','form']);
  }
    
  

public function index()
{

  return view('admin/login');


}

public function authenticate(){


  $validation = $this->validate([

    'username' =>[
    'rules'=> 'required',
    'errors'=> [
        'required'=>'username is required',   
      ]
  ],

  'password' =>[
    'rules'=> 'required|min_length[5]|max_length[12]',
    'errors'=> [
        'required'=>'password is required', 
        'min_length'=>'password must have atleast 5 character in length',
        'max_length'=>'password must not have more than 12 character in length'  
      ]
  ]
]);

if (!$validation) {
    return view('admin/login', ['validation'=>$this->validator]);
  }
  else{
 
 $adminmodel= new \App\Models\AdminLogin(); 

  $username= $this->request->getPost('username');

  $password= $this->request->getPost('password');
    
    $adminmodel= new \App\Models\AdminLogin(); 


  $result= $adminmodel->where('username' , $username)->first();
 

  if ($result != null) {



    if ($result['password']==$password) {

      $session=session();
      $session->set('admin', $result);
       return view('admin/dashboard');
   
       }
    else{
      $session=session();
    $session->setFlashdata('fail','password is incorrect');
     return redirect()->to('login/index');
}

       }

 else{
  $session=session();
    $session->setFlashdata('error','username or password is incorrect');
     return redirect()->to('login/index');

 }

  }

}

public function logout(){

  $session=session();
  $session->destroy();
  return redirect()->to('login');
}
}


 ?>