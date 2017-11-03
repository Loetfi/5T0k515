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
                  My POS
                  <a href="#" class="btn btn-success btn-fill pull-right">Fitur Premium
                  </a>
                </h1>
                <div class="divider-blue">
                </div>
                <ol class="breadcrumb">
                  <li>
                    <a href="#">
                      My POS
                    </a>
                  </li> 
                  <li class="active">Order Baru
                  </li>
                </ol>
              </div>
            </div>
            <div class="card card-posts">
              <div class="header m-b-10">  
                <div class="row"> 
                  <div class="col-md-3">
                    <p class="category font-16 m-t-10">Pilih Saluran Penjualan
                </p>
                  </div>
                  <div class="col-md-9">
                    <form class="form-inline pull-right">
                      <div class="form-group">
                        <label class="sr-only">Search
                        </label>
                        <input type="input" style="width: 220px;" class="form-control bordered" placeholder="&#xf002; Cari Produk/Toko Disini">
                      </div>  
                    </form>
                  </div>
                </div>
              </div> 
              <div class="content table-responsive table-full-width p-t-0">
                <table class="table"> 
                  <tbody>
                    <tr> 
                      <td>
                       <img class="no-border-radius" src="<?php echo base_url('assets/img/icon/icon-channel_toko.svg');?>"> Penjualan di Toko
                      </td>      
                      <td class=""> 
                        <label class="radio checked pull-right">
                          <span class="icons">
                            <span class="first-icon fa fa-circle-o">
                            </span>
                            <span class="second-icon fa fa-dot-circle-o">
                            </span>
                          </span> 
                          <input type="radio" data-toggle="radio" name="optionsRadios" value="option1"> 
                        </label> 
                      </td>
                    </tr>
                    <tr> 
                      <td>
                       <img class="no-border-radius" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"> Instagram
                      </td>      
                      <td class=""> 
                        <label class="radio pull-right">
                          <span class="icons">
                            <span class="first-icon fa fa-circle-o">
                            </span>
                            <span class="second-icon fa fa-dot-circle-o">
                            </span>
                          </span> 
                          <input type="radio" data-toggle="radio" name="optionsRadios" value="option2"> 
                        </label> 
                      </td>
                    </tr>
                    <tr> 
                      <td>
                       <img class="no-border-radius" src="<?php echo base_url('assets/img/icon/icon-channel_line.svg');?>"> Line
                      </td>      
                      <td class=""> 
                        <label class="radio pull-right">
                          <span class="icons">
                            <span class="first-icon fa fa-circle-o">
                            </span>
                            <span class="second-icon fa fa-dot-circle-o">
                            </span>
                          </span> 
                          <input type="radio" data-toggle="radio" name="optionsRadios" value="option3"> 
                        </label> 
                      </td>
                    </tr> 
                    <tr> 
                      <td>
                       <img class="no-border-radius" src="<?php echo base_url('assets/img/icon/icon-channel_wa.svg');?>"> WhatsApp
                      </td>      
                      <td class=""> 
                        <label class="radio pull-right">
                          <span class="icons">
                            <span class="first-icon fa fa-circle-o">
                            </span>
                            <span class="second-icon fa fa-dot-circle-o">
                            </span>
                          </span> 
                          <input type="radio" data-toggle="radio" name="optionsRadios" value="option3"> 
                        </label> 
                      </td>
                    </tr>
                     <tr> 
                      <td>
                       <img class="no-border-radius" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>"> Facebook
                      </td>      
                      <td class=""> 
                        <label class="radio pull-right">
                          <span class="icons">
                            <span class="first-icon fa fa-circle-o">
                            </span>
                            <span class="second-icon fa fa-dot-circle-o">
                            </span>
                          </span> 
                          <input type="radio" data-toggle="radio" name="optionsRadios" value="option3"> 
                        </label> 
                      </td>
                    </tr>
                    <tr> 
                      <td>
                       <img class="no-border-radius" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>"> Twitter
                      </td>      
                      <td class=""> 
                        <label class="radio pull-right">
                          <span class="icons">
                            <span class="first-icon fa fa-circle-o">
                            </span>
                            <span class="second-icon fa fa-dot-circle-o">
                            </span>
                          </span> 
                          <input type="radio" data-toggle="radio" name="optionsRadios" value="option3"> 
                        </label> 
                      </td>
                    </tr>
                    <tr> 
                      <td>
                       <img class="no-border-radius" src="<?php echo base_url('assets/img/icon/icon-channel_bbm.svg');?>"> BBM
                      </td>      
                      <td class=""> 
                        <label class="radio pull-right">
                          <span class="icons">
                            <span class="first-icon fa fa-circle-o">
                            </span>
                            <span class="second-icon fa fa-dot-circle-o">
                            </span>
                          </span> 
                          <input type="radio" data-toggle="radio" name="optionsRadios" value="option3"> 
                        </label> 
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="footer text-right"> 
                <div class="stats">
                  <a href="TambahOrderChooseProduk.html" class="btn btn-info btn-fill">Lanjutkan <span class="fa fa-angle-right"></span>
                  </a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal brandmodal fade" id="aktifPrinter" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog text-left modal-sm" role="document" style="width: 28%;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×
            </button>
            <h4 class="modal-title font-bold">
              Tersambung dengan
            </h4>
          </div>
          <div class="modal-body">
            <fieldset>
              <div class="form-group">
                <div class="col-sm-10">
                  <label class="radio checked">
                    <span class="icons">
                      <span class="first-icon fa fa-circle-o">
                      </span>
                      <span class="second-icon fa fa-dot-circle-o">
                      </span>
                    </span>
                    <input type="radio" data-toggle="radio" name="optionsRadios" value="option1">Bluetooth
                  </label>
                  <label class="radio">
                    <span class="icons">
                      <span class="first-icon fa fa-circle-o">
                      </span>
                      <span class="second-icon fa fa-dot-circle-o">
                      </span>
                    </span>
                    <input type="radio" data-toggle="radio" name="optionsRadios" value="option2">Epson/Star
                  </label>
                </div>
              </div>
            </fieldset> 
          </div> 
        </div>
      </div>
    </div>
    <div class="modal brandmodal fade" id="salinNota" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog text-left modal-sm" role="document" style="width: 28%;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×
            </button>
            <h4 class="modal-title font-bold">
              Salin Nota
            </h4>
          </div>
          <div class="modal-body">
            <fieldset>
              <div class="form-group">
                <div class="col-sm-10">
                  <label class="radio checked">
                    <span class="icons">
                      <span class="first-icon fa fa-circle-o">
                      </span>
                      <span class="second-icon fa fa-dot-circle-o">
                      </span>
                    </span>
                    <input type="radio" data-toggle="radio" name="optionsRadios" value="option1">Tidak
                  </label>
                  <label class="radio">
                    <span class="icons">
                      <span class="first-icon fa fa-circle-o">
                      </span>
                      <span class="second-icon fa fa-dot-circle-o">
                      </span>
                    </span>
                    <input type="radio" data-toggle="radio" name="optionsRadios" value="option2">1 Salin
                  </label>
                  <label class="radio">
                    <span class="icons">
                      <span class="first-icon fa fa-circle-o">
                      </span>
                      <span class="second-icon fa fa-dot-circle-o">
                      </span>
                    </span>
                    <input type="radio" data-toggle="radio" name="optionsRadios" value="option3">2 Salin
                  </label>
                </div>
              </div>
            </fieldset> 
          </div> 
        </div>
      </div>
    </div>
  </body>
