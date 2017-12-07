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
                <form action="<?php echo site_url('pos/order/chooseproduk?store='.$_GET['store']);?>" method="POST">

                <table class="table"> 
                  <tbody>

                    
                      <tr> 
                        <td>
                         <img class="no-border-radius" src="<?php echo base_url('assets/img/icon/icon-channel_toko.svg');?>"> Penjualan di Toko
                       </td>      
                       <td class=""> 
                        <label class="radio pull-right">
                          <span class="icons">
                            <span class="first-icon fa fa-circle-o">
                            </span>
                            <span class="second-icon fa fa-dot-circle-o">
                            </span>
                          </span> 
                          <input type="radio" name="saluran" value="1"> 
                        </label> 
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="footer text-right"> 
                <div class="stats">
                  <!-- <a href="<?php echo site_url('pos/order/chooseproduk') ?>" class="btn btn-info btn-fill">Lanjutkan <span class="fa fa-angle-right"></span> 
                  </a>  -->
                  <a href="<?php echo site_url('pos/order/') ?>" class="btn btn-info btn-fill">Kembali <span class="fa fa-angle-left"></span></a>
                  <button class="btn btn-info btn-fill">Lanjutkan <span class="fa fa-angle-right"></span></button>
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
