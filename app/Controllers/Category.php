<?php 
  
  namespace App\Controllers;
  use App\Models\CategoryModel;
  use CodeIgniter\Controller;

class Category extends BaseController{

public function  __construct(){
    helper(['url','form']);
  }

public function index(){

    $model = new CategoryModel();

    $data['category'] = $model->findAll();

     $session = session();
  if ($session->has('admin')) {
    return view('admin/list',$data);
   
  }
  else{
    return view('admin/login');
  }
    


}
public function createlist(){

    $session = session();
  if ($session->has('admin')) {
  return view('admin/createlist');
  }
  else{
    return view('admin/login');
  }
  	
}
public function created(){

   $session = session();
  if ($session->has('admin')) {
  
	 $validation = $this->validate([

    'name' =>[
    'rules'=> 'required',
    'errors'=> [
        'required'=>'Name is required',   
      ]
  ],
    'status' =>[
     'rules'=> 'required',
     'errors'=> [
        'required'=>'status is required', 
    ]
  ],

/*  'image' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file,4096]',
            ], */

     
]);
if (!$validation) {
    return view('admin/createlist', ['validation'=>$this->validator]);
  }
  else{
      
    
  	$name= $this->request->getPost('name');
  	$status=$this->request->getPost('status');
  	$image=$this->request->getFile('image');


    $move= $image->move('./assets/uploads');

    if ($move) {

       $model=  new CategoryModel();

           $data=['name'=> $name,
                  'status'=> $status,
                  'image' =>  $image->getName()
            
                  ] ;

            $added= $model->insert($data); 
             

           if ($added) {
            $session= session();

             $session->setFlashdata("success", "Data saved successfully");
               return redirect()->to('category'); 
              }
    
            else {

            $session->setFlashdata("error", "Failed to save data");
                return view('admin/createlist');
               }
       return redirect()->to('category'); 
        
      }
    }

  }
  else{
    return view('admin/login');
  }

  }




  public function edit($id){

    $session= session();

  if ($session->has('admin')) {
    

    $model = new CategoryModel();

    $data['row'] = $model->where('id', $id)->first();
    return view('admin/update', $data);
}
else{
  return view('admin/login');
}
}
public function update(){
     $session= session();

  if ($session->has('admin')) {
    

    $validation = $this->validate([

    'name' =>[
    'rules'=> 'required',
    'errors'=> [
        'required'=>'Name is required',   
      ]
  ],
    'status' =>[
     'rules'=> 'required',
     'errors'=> [
        'required'=>'status is required', 
    ]
  ],

     
]);
    if (!$validation) {

 return view('admin/update', ['validation'=>$this->validator]);
  
    }

else{

  $model = new CategoryModel();

    $id= $this->request->getPost('id');

   $name= $this->request->getPost('name');
   $status= $this->request->getPost('status');
    $image=$this->request->getFile('image');

    $image->getName();
 $move= $image->move('./assets/uploads');

 if ($move) {

   $data=[ 'name' => $name,
            'status'=> $status,
            'image'=> $image->getName()
    ];

    $update=$model->update($id, $data);

    if ($update) {
      $session= session();
      $session->setFlashdata("success","Category Updated successfully");

      return redirect()->to('category');
    }

    else{
      $session= session();
      $session->setFlashdata("fail","category failed to update");

      return redirect()->to('category/createlist');

    }

    return redirect()->to('category');
  }

 }

   
}

else{
  return view('admin/login');
}

}

public function delete($id){

 
 $msg = "<script>confirm('do you want to delete category?');</script>";

if ($msg) {
  echo $msg;
$model= new CategoryModel();
$model->where('id', $id)->delete();
 $session= session();
 $session->setFlashdata("success","category deleted successfully");
 return redirect()->to('category');

}
else{
  $session= session();
  $session->setFlashdata("success","category not deleted");
 return redirect()->to('category');


}
}
}
?>
