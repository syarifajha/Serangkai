
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="" class="img-circle">
        </div>
        <div class="pull-left info">
          <p>SUPER ADMIN</p>
          <!-- Status -->
          <a href="#"></a>
        </div>
      </div>

      <!-- search form (Optional) -->
	
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Pilihan</li>
        <!-- Optionally, you can add icons to the links -->
        
        <li class=""><a href="<?php echo base_url();?>dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Content</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Slide">Slide</a></li>
            <li><a href="<?php echo base_url();?>About">About</a></li>
            <li><a href="<?php echo base_url();?>Content1">Content#1</a></li>
            <li><a href="<?php echo base_url();?>Content2">Content#2</a></li>
            <li><a href="<?php echo base_url();?>Testimonial">Testimonial</a></li>
            <li><a href="<?php echo base_url();?>Youtube">Video</a></li>
            <li><a href="<?php echo base_url();?>alasan">Reason Of The Website</a></li>
            <li><a href="<?php echo base_url();?>Visimisi">Visi Dan Misi</a></li>
          </ul>
        </li> 
        <li class="treeview">
          <a href="#"><i class="fa fa-user"></i> <span>User</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Admin">Administrator</a></li>
          </ul>
        </li>  
        <!-- <li class=""><a href="<?php echo base_url();?>content/baru">
        <i class="fa fa-link"></i> <span>Baru</span></a></li>
        <li class="nav-item"> --> 
      </ul>

      
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
