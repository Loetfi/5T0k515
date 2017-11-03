<body>
    <div class="wrapper">
      <div class="sidebar" data-color="white">
        <div class="logo">
          <a href="dashboard.html" class="logo-text">
           <img src="<?php echo base_url('assets/img/icon/logo-blue.svg');?>" class="user-image" alt="User Image">
          </a>
        </div> 
        <div class="sidebar-wrapper"> 
          <ul class="nav">
            <li class="">
              <a href="dashboard.html">
                <img src="<?php echo base_url('assets/img/icon/icon-dashboard_nonaktif.svg');?>" class="" alt="icon">
                <p>Dashboard
                </p>
              </a>
            </li>
            <li class="active">
              <a data-toggle="collapse" href="#componentsExamples" aria-expanded="false">
                <img src="<?php echo base_url('assets/img/icon/icon-pengaturan_nonaktif.svg');?>" class="" alt="icon">
                <p>Pengaturan
                  <b class="pe-7s-angle-down icon-down">
                  </b>
                </p>
              </a>
              <div class="collapse in" id="componentsExamples">
                <ul class="nav">
                  <li class="active">
                    <a href="aturtoko.html">
                      <img src="<?php echo base_url('assets/img/icon/icon-toko_aktif.svg');?>" class="" alt="icon">
                      <p class="color-black">Atur Toko
                      </p>
                    </a>
                  </li>
                  <li>
                    <a href="aturtim.html">
                      <img src="<?php echo base_url('assets/img/icon/icon-tim_nonaktif.svg');?>" class="" alt="icon">
                      <p>Atur Tim
                      </p>
                    </a>
                  </li>
                  <li class="">
                    <a href="aturproduk.html">
                      <img src="<?php echo base_url('assets/img/icon/icon-produk_nonaktif.svg');?>" class="" alt="icon">
                      <p>Atur Produk
                      </p>
                    </a>
                  </li>
                  <li class="">
                    <a href="pengaturanpos.html">
                      <img src="<?php echo base_url('assets/img/icon/icon-settingPOS_nonaktif.svg');?>" class="" alt="icon">
                      <p>Pengaturan POS
                      </p>
                    </a>
                  </li>
                  <li class="">
                    <a href="editprofil.html">
                       <img src="<?php echo base_url('assets/img/icon/icon-editakun_nonaktif.svg');?>" class="" alt="icon">
                      <p>Edit Profile Akun
                      </p>
                    </a>
                  </li> 
                </ul>
              </div>
            </li> 
            <li>
              <a href="MyPOS.html">
                <img src="<?php echo base_url('assets/img/icon/icon-pos_nonaktif.svg');?>" class="" alt="icon">
                <p>My POS
                </p>
              </a>
            </li>
            <li class="">
              <a href="DaftarTransaksi.html">
                <img src="<?php echo base_url('assets/img/icon/icon-historitransaksi_nonaktif.svg');?>" class="" alt="icon">
                <p>Daftar Transaksi
                </p>
              </a>
            </li>
            <li class="">
              <a href="Pemberitahuan.html">
                <img src="<?php echo base_url('assets/img/icon/icon-notifikasi_nonaktif.svg');?>" class="" alt="icon">
                <p>Pemberitahuan
                <span>
                  <small class="label pull-right bg-red">12</small>  
                </span>
                </p>
              </a>
            </li>
            <li class="active-pro">
              <a href="bantuan.html">
                <img src="<?php echo base_url('assets/img/icon/icon-help.svg');?>" class="" alt="icon">
                <p>Bantuan</p>
              </a>
            </li>
            <li class="bottom">
              <a href="#"> 
                 2017 All Rights Reserved Stoksis.com
              </a>
            </li>
          </ul>
        </div>
      </div>
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
              <a href="dashboard.html" class="logoimage">
                <img src="<?php echo base_url('assets/img/icon/logo-blue.svg');?>" class="user-image" alt="User Image" style="width: 150px;">
              </a>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo base_url('assets/img/icon/icon-profil.svg');?>" class="user-image" alt="User Image"> Nama Akun
                    <b class="pe-7s-angle-down icon-down">
                    </b>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#" class="p-b-0">Hi, Admin 
                        <br> 
                        <p class="color-blue">XYZ Mega Store
                        </p>
                      </a>
                    </li> 
                    <li class="divider m-0">
                    </li>
                    <li>
                      <a href="#">Ke Website Stoksis
                      </a>
                    </li>
                    <li class="divider m-0">
                    </li>
                    <li>
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/icon/icon-logout.svg');?>" class="icon-logout" alt="icon"> Keluar
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="content-header">
                <h1>
                  Pengaturan
                  <a href="#" class="btn btn-success btn-fill pull-right">Fitur Premium
                  </a>
                </h1>
                <div class="divider-blue">
                </div>
                <ol class="breadcrumb">
                  <li>
                    <a href="#">
                      Pengaturan
                    </a>
                  </li> 
                  <li class="active">Atur Toko
                  </li>
                </ol>
              </div>
            </div>
            <div class="card card-posts">
              <div class="header"> 
                <div class="row"> 
                  <div class="col-md-12">
                    <form class="form-inline pull-right">
                      <div class="form-group">
                        <label class="sr-only">Search
                        </label>
                        <input type="input" class="form-control bordered" placeholder="&#xf002; Cari Toko Disini">
                      </div>
                      <a href="tambahtoko.html" class="btn btn-primary btn-fill"><img src="<?php echo base_url('assets/img/icon/plus-add_btn.svg');?>" class="icon-plus" alt="icon"> Tambah Toko
                      </a> 
                    </form>
                  </div>
                </div>
              </div>
              <div class="content table-responsive table-full-width">
                <table class="table">
                  <thead>
                    <th>
                    </th> 
                    <th>Nama Toko
                    </th>
                    <th>Tanggal Dibuat
                    </th>
                    <th>Jumlah Staff
                    </th>
                    <th>Jumlah Produk
                    </th>
                    <th>Saluran Penjualan
                    </th> 
                    <th>
                    </th> 
                  </thead>
                  <tbody class="text-center">
                    <tr> 
                      <td>
                        <img src="<?php echo base_url('assets/img/user.jpg"/>
                      </td>
                      <td>XYZ Mega Store
                      </td>
                      <td>18 September 2017
                      </td>
                      <td>2
                      </td>
                      <td>6
                      </td>
                      <td>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>"/>
                      </td>   
                      <td class="td-actions text-right">
                        <a href="edittoko.html" class="font-30" rel="tooltip" title="Edit">
                          <img src="<?php echo base_url('assets/img/icon/icon-edit.svg');?>" class="icon-edit" alt="icon">
                        </a>
                        <a href="#" class="font-30" rel="tooltip" title="Hapus" data-toggle="modal" data-target="#hapus">
                          <img src="<?php echo base_url('assets/img/icon/icon-delete.svg');?>" class="icon-delete" alt="icon">
                        </a>   
                      </td>
                    </tr>
                    <tr> 
                      <td>
                        <img src="<?php echo base_url('assets/img/user.jpg"/>
                      </td>
                      <td>XYZ Mega Store
                      </td>
                      <td>18 September 2017
                      </td>
                      <td>2
                      </td>
                      <td>6
                      </td>
                      <td>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>"/>
                      </td>   
                      <td class="td-actions text-right">
                        <a href="edittoko.html" class="font-30" rel="tooltip" title="Edit">
                          <img src="<?php echo base_url('assets/img/icon/icon-edit.svg');?>" class="icon-edit" alt="icon">
                        </a>
                        <a href="#" class="font-30" rel="tooltip" title="Hapus" data-toggle="modal" data-target="#hapus">
                          <img src="<?php echo base_url('assets/img/icon/icon-delete.svg');?>" class="icon-delete" alt="icon">
                        </a>   
                      </td>
                    </tr>
                    <tr> 
                      <td>
                        <img src="<?php echo base_url('assets/img/user.jpg"/>
                      </td>
                      <td>XYZ Mega Store
                      </td>
                      <td>18 September 2017
                      </td>
                      <td>2
                      </td>
                      <td>6
                      </td>
                      <td>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>"/>
                        <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>"/>
                      </td>   
                      <td class="td-actions text-right">
                        <a href="edittoko.html" class="font-30" rel="tooltip" title="Edit">
                          <img src="<?php echo base_url('assets/img/icon/icon-edit.svg');?>" class="icon-edit" alt="icon">
                        </a>
                        <a href="#" class="font-30" rel="tooltip" title="Hapus" data-toggle="modal" data-target="#hapus">
                          <img src="<?php echo base_url('assets/img/icon/icon-delete.svg');?>" class="icon-delete" alt="icon">
                        </a>   
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="row">
                  <div class="col-md-12">
                    <ul class="pagination pull-right">
                      <li>
                        <a href="#">«
                        </a>
                      </li>
                      <li class="active">
                        <a href="#">1
                        </a>
                      </li>
                      <li>
                        <a href="#">2
                        </a>
                      </li>
                      <li>
                        <a href="#">3
                        </a>
                      </li>
                      <li>
                        <a href="#">4
                        </a>
                      </li>
                      <li>
                        <a href="#">5
                        </a>
                      </li>
                      <li>
                        <a href="#">»
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal brandmodal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog" role="document" style="width: 28%;">
        <div class="modal-content">
          <div class="modal-header">
            <a type="button" class="boxclose" data-dismiss="modal">
            </a>  
            <h4 class="modal-title m-t-40 font-thin">
              Hapus Toko
            </h4>
          </div>
          <div class="modal-body" style="padding-right: 50px;padding-left: 50px;">
            <h6 class="text-center m-10 m-b-30">Apakah anda yakin untuk menghapus toko ini?
            </h6>
            <div class="form-group m-b-15">
              <button id="signupSubmit" type="submit" data-dismiss="modal" class="btn btn-danger btn-fill">Batal
              </button>
              <button id="signupSubmit" type="submit" data-dismiss="modal" class="btn btn-info btn-fill">Ya
              </button>
            </div> 
          </div> 
        </div>
      </div>
    </div>
  </body>
