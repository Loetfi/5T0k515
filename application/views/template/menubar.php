<div class="main-panel">
  <nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse">
          <span class="sr-only">Toggle navigation
          </span>
          <span class="icon-bar">
          </span>
          <span class="icon-bar">
          </span>
          <span class="icon-bar">
          </span>
        </button> 
      </div>
      <div class="collapse navbar-collapse"> 
        <a href="<?php echo site_url('dashboard') ?>" class="logoimage">
          <img src="<?php echo base_url('assets/img/icon/logo-blue.svg');?>" class="user-image" alt="User Image" style="width: 150px;">
        </a>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/img/icon/icon-profil.svg');?>" class="user-image" alt="User Image"> 

              <?php $userdata = $this->session->userdata('userdata');
              echo substr($userdata['firstname'].' '.$userdata['lastname'], 0,10); ?>
              <img src="<?php echo base_url('assets/img/icon/icon-drop_small.svg');?>" class="icon-drop-small" alt="User Image">
            </a>
            <ul class="dropdown-menu">
             <!--  <li>
                <a href="#" class="p-b-0">Hi, Admin 
                  <br> 
                  <p class="color-blue">XYZ Mega Store
                  </p>
                </a>
              </li>  -->
              <li class="divider m-0">
              </li>
              <li>
                <a href="#">Ke Website Stoksis
                </a>
              </li>
              <li class="divider m-0">
              </li>
              <li>
                <a href="<?php echo site_url('auth/logout') ?>">
                  <img src="<?php echo base_url('assets/img/icon/icon-logout.svg');?>" class="icon-logout" alt="icon"> Keluar
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
