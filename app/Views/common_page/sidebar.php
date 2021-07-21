<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      
      <h3 class="brand-text font-weight-bold" style=" text-align: center;">Ekart Application</h3>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
        <div class="info">
         <h5> <a href="<?php echo base_url();?>/first/" class="d-block">Dashboard</a></h5>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
             <li class="nav-item">
            <a href="<?php echo base_url();?>/first/" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              
              </p>
            </a>
          </li>  
          <li class="nav-item menu">
            <a href="#" class="nav-link">
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>/category/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>/category/createlist " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="#" class="nav-link">
              <p>
                Category Detail
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>/category/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>/category/createlist " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>