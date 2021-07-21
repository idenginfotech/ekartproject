<?php echo view('common_page/header.php');
?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php echo view('common_page/sidebar.php');
?>
<?php  echo "hello"
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card" style="height: auto;">
              <div class="card-header">

                <div class="card-title">
                  <form id="searchfrm" name="searchfrm" method="get" action="">
                    <div class="input-group mb-0">
                      <input type="text" name="q" value="" class="form-control" placeholder="search">
                      <div class="input-group-append">
                        <button class="input-group-text" id="basic-add">
                          <i class="fa fa-search"></i>
                          
                        </button>
                        
                      </div>
                      
                    </div>
                    
                  </form>
                </div>
                <div class="card-tools">
                  <a href="<?php echo base_url()?>/category/createlist/" class="btn btn-primary"><i class="fas fa-plus"></i> Create</a>
                </div>
               
              </div>
              <div class="card-body">
                <?php if(session()->get("success")){  ?> <span class="text-success"><?= session()->get("success") ?></span><?php }?>
                
                      <table class="table table border">
                       
                        <tr>
                          <th width="50">#</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th width="100">Status</th>
                          <th width="170" class="text-center">Action</th>
                        </tr>
                         <?php $i=0; foreach ($category as $key) { ?>
                         <tr>
                          <td><?php  echo $i++ ;?></td>
                          <td><?php  echo $key['name'] ?></td>
                          <td><?php  echo $key['image'] ?></td>
                          <td>
                            <?php if ($key['status']== 1){?>
                            <span class="badge badge-success">Active</span><?php } ?>

                            <?php if ($key['status']== 0){?>
                            <span class="badge badge-danger">Block</span><?php } ?>

                            
                          </td>
                          <td>
                            <a href="<?php echo site_url('category/edit/').$key['id'];?>" class="btn btn-primary btn-sm"><i class="far fa-edit"></i> Edit</a>
                            <a href="<?php echo site_url('category/delete/').$key['id'];?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</a>
                          </td>
                        </tr>
                        <?php }  ?>
                        
                      </table>
                   
                
            
            
              </div>
            </div>


            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php echo view('common_page/footer.php');
?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url();?>/public/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>/public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/public/assets/dist/js/adminlte.min.js"></script>
</body>
</html>
