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
              <div class="header">  
                <div class="row"> 
                  <div class="col-md-3">
                    <p class="category font-16 m-t-10">Pilih Toko
                    </p>
                  </div>
                  <div class="col-md-9">
                    <form class="form-inline pull-right">
                      <div class="form-group">
                        <label class="sr-only">Search
                        </label>
                        <input type="input" style="width: 220px;" class="form-control bordered" placeholder="&#xf002; Cari Produk/Toko Disini">
                      </div> 
                      <!-- <img src="<?php echo base_url('assets/img/icon/icon-cart.svg');?>" class="icon-cart" alt="icon"> -->
                    </form>
                  </div>
                </div>
              </div> 
              <br>
              <div class="table-responsive">

                <form action="<?php echo site_url('pos/order/pilih') ?>" method="GET">

                  <table class="table"> 
                    <tbody> 

                      <?php foreach ($res as $r) { ?>

                      <tr> 
                        <td>
                          <!-- <img src="<?php echo base_url('assets/img/user.jpg');?>"/> -->
                          <img src="<?php echo $r['Photo']; ?>"> 
                        </td>
                        <td>
                          <a href="#" class="order-link"><?php echo $r['StoreName']; ?></a> 
                          <span class="order-subhead color-grey">Toko dibuat</span>
                          <span class="order-subhead"><?php echo date('d F Y' , strtotime($r['AddDate']));  ?></span>
                        </td>
                        <td>
                          <a href="#" class="order-link-small">Jumlah Staff : <?php  echo count($r['StoreAccess']); ?></a>
                          <span class="order-subhead font-bold">Jumlah Produk : <?php  echo $r['CountProduct'][0]['total_product']; ?> </span>
                        </td> 
                        <td>
                          <a href="#" class="order-link-small">Saluran Penjualan</a>
                          belum 
                        <!-- <span class="order-subhead"> 
                          <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>">
                          <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>">
                          <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>">
                          <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>">
                          <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>">
                          <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>"> 
                        </span> -->
                      </td>    
                      <td class="td-actions text-right"> 
                        <label class="radio">
                          <span class="icons">
                            <span class="first-icon fa fa-circle-o">
                            </span>
                            <span class="second-icon fa fa-dot-circle-o">
                            </span>
                          </span> 
                          <input type="radio" data-toggle="radio" name="store" value="<?php echo $r['StoreId']; ?>"> 
                        </label> 
                      </td>
                    </tr> 

                    <?php } ?>
                  </tbody>
                </table>


              </div>
              <div class="footer text-right"> 
                <div class="stats">
                  <!-- <a href="<?php echo site_url('pos/order/pilih') ?>" type="button" class="btn btn-info btn-fill">Lanjutkan <span class="fa fa-angle-right"></span> -->
                    <button class="btn btn-info btn-fill"> Lanjutkan <span class="fa fa-angle-right"></span> </button>
                  </a> 
                </div>
              </div>

            </form>

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
