<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">

          <img src="<?php echo base_url() ?>assets/user_portal/avatar.png" class="img-circle" alt="User Image">
         
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('current_user_name'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU OPTIONS</li>
        <li><a href="<?php echo site_url('Dashboard')?>"><i class="fa fa-calculator"></i> <span>Calculator</span></a></li>

           <!-- Branch Menu Start -->
           <!-- <li class="treeview">
              <a href="">
                <i class="fa fa-tree"></i> <span>Application Manager </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('Form/index'); ?>"><i class="fa fa-circle"></i>Submit Application</a></li>
                <li><a href="<?php echo site_url('Form/Startup_List'); ?>"><i class="fa fa-circle"></i>View Pending Application</a></li>
                <li><a href="<?php echo site_url('Form/Startup_List_Active'); ?>"><i class="fa fa-circle"></i>View Active Application</a></li>
                <li><a href="<?php echo site_url('Form/Startup_List_Reject'); ?>"><i class="fa fa-circle"></i>View Rejected Application</a></li>
              </ul>
          </li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
