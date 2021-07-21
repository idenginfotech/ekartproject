<?php echo view('common_page/header.php');
?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php echo view('common_page/sidebar.php');
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
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>/first">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>/category/">Categories</a></li>

              <li class="breadcrumb-item active">Edit Category</li>
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
              <div class="card-header bg-primary ">
                <div class="card-title ">Edit category "<?php echo $row['name'];?>"</div>

               
              </div>
<form name="categoryform" id="categoryform" method="post" action="<?php echo base_url('categoryupdate');?>" enctype="multipart/form-data">

              <div class="card-body">
                
                      
                        <div class="form-group">

               <?php if(session()->get("error")){ ?> <h3 class="text-danger"><?= session()->get("error") ?></h3><?php  }   ?>
               <?php if(session()->get("fail")){ ?> <h3 class="text-danger"><?= session()->get("fail") ?></h3><?php  }   ?>
                       
                          <label>Name</label>
                          <input type="text" name="name" value="<?php echo $row['name']?>" id="name" class="form-control">
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'name'): ''?> </span>
                        </div>
                        <div class="form-group">
                          <label>Image</label></br>
                      <input type="file" name="image" value="<?php echo $row['image']?>" id="image" >
                  <span class="text-danger"><?= isset($validation) ? display_error($validation, 'image'): ''?> </span></br>


                        <?php if ($row['image']!= "" && file_exists('./assets/uploads/'.$row['image'])) {?>
  <img class="mt-2" width="200" height="200" src="<?php echo base_url().'/assets/uploads/'.$row['image'] ;?>">
                             
                           <?php } else{ ?>

                            <img width="100" height="100" src="<?php echo base_url().'/assets/uploads/no-image.png'; ?>">

                           <?php }?>


                        </div>
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <div class="custom-control custom-radio float-left">
                    <input  class="custom-control-input" value="<?php echo $row['status']?>" type ="radio" id="statusActive" name="status"<?php echo ($row['status']==1)?'checked':'';?>>
                          <label for="statusActive" class="custom-control-label">Active</label>
                        </div>
                        <div class="custom-control custom-radio float-left ml-3">
                     <input   class="custom-control-input" value="<?php echo $row['status']?>" type ="radio" id="statusBlock" name="status" <?php echo ($row['status']==0)?'checked':'';?>>
                          <label for="statusBlock" class="custom-control-label">Block</label>
                          <span class="text-danger"><?= isset($validation) ? display_error($validation, 'status'): ''?> </span>
 
                        </div>


                             
                                 
              </div>
              <div class="card-footer">
                
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo base_url();?>/category/" class="btn btn-secondary"> Back</a>
              </div>
            </div>
             </form>


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
<script src="<?php echo base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/assets/dist/js/adminlte.min.js"></script>
</body>
</html>
