public function edit($id){

    $model = new CategoryModel();

    $data['row'] = $model->where('id', $id)->first();
    return view('admin/update', $data);


  }

  public function update()

  {

    $model = new CategoryModel();

    $id= $this->request->getPost('id');

    $name= $this->request->getPost('name');
    $status=$this->request->getPost('status');
    $image=$this->request->getFile('image');

    $image->getName()

    $data=[ 'name' => $name,
            'status'=> $status,
            'image'=> $image->getName()
    ];

    $model->update($id, $data);

    return redirect()->to(base_url('category'));
  }



  }


}

 ?>



'image' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file,4096]',
            ], 