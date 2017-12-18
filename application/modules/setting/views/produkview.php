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
          <li class="active">Atur Produk
          </li>
        </ol>
      </div>
    </div>
    <div class="card card-posts">
      <div class="header"> 
        <div class="row"> 
          <div class="col-md-12">
            <form class="form-inline pull-right">
               <!--  <div class="form-group">
                  <label class="sr-only">Search
                  </label>
                  <input type="input" class="form-control bordered" placeholder="&#xf002; Cari Produk Disini">
                </div> -->
                <br>
                <br>
                <br>
                <!-- <a href="<?php echo site_url('setting/produk/add/') ?>" class="btn btn-primary btn-fill">
                  <img src="<?php echo base_url('assets/img/icon/plus-add_btn.svg');?>" class="icon-plus" alt="icon"> Tambah Produk
                </a>  -->
              </form>
            </div>
          </div>
        </div>

        <div class="modal-bodys">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <!-- <?php print_r($produk); ?> -->
              <div class="card no-shadow">
                <div class="header p-0">
                  <div class="author">
                    <img class="avatar-produk border-gray" src="<?php echo $produk['ProductsImage'][0]['path'];?>" style="max-width: 100%;border:0;" alt="...">
                  </div>
                  <small class="color-grey-light">
                    -
                  </small>
                  <h4 class="title" style="font-weight: bold;font-size: 17px;color: #000;"><?php echo $produk['product_name'] ?>
                  </h4>
                  <p class="category font-11">SKU <?php echo $produk['id'] ?>
                  </p>
                  <div class="row" style="margin-top: 30px;">
                    <div class="col-md-8 col-sm-8 no-pr-pl">
                      <dl class="dl-horizontal"> 
                        <dt class="font-12 color-black" style="width: 80px;">
                          Deskripsi:
                        </dt> 
                        <dd class="font-12 color-grey-light font-thin">
                          <?php echo $produk['product_desc']; ?>
                          Warna : <?php echo $produk['product_color']; ?>
                          Kategori : <?php echo $produk['category_id']; ?>
                        </dd>    
                      </dl>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="footer">
                    <div class="legend">
                    </div> 
                    <div class="stats" style="margin-top: 24%;">
                      <button type="button" class="btn btn-success btn-fill" style="cursor: text;">Harga Jual IDR <?php echo number_format($produk['price_sale']); ?>
                      </button>
                      <button type="button" class="btn btn-danger btn-fill" style="cursor: text;">Modal IDR <?php echo number_format($produk['price_buy']); ?>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="card no-shadow"> 
                <div class="content"> 
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-6 p-0">
                          <div class="card-product-text">
                            <div class="content">
                              <div class="row">
                                <div class="col-md-4 no-pl">
                                  <h5>
                                    Total Kuantitas
                                  </h5>
                                </div>
                                <div class="col-md-8 no-pl">
                                  <h2><?php echo count($produk['ProductDetails']);?> PCS
                                  </h2>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 p-t-0 no-pl">
                          <div class="card-product-text no-border-right">
                            <div class="content">
                              <div class="row">
                                <div class="col-md-6 no-pl">
                                  <h5>
                                    Toko yang tersedia
                                  </h5>
                                </div>
                                <div class="col-md-6 no-pl">
                                  <h2> 
                                  </h2>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>
                  <br>
                  <!-- <fieldset class="scheduler-border" style="min-height:260px;max-height: 260px;overflow: auto;">
                    <legend class="scheduler-border color-grey-light">Saluran penjualan yang tersedia
                    </legend>
 
                    <div class="m-b-10">
                     <div class="row">
                      <div class="col-md-12 m-b-10 font-bold" style="font-size: 12px;">
                        <img class="" src="" alt="..." style="width: 25px;"> XYZ Mega Store 
                        <small class="color-grey-light font-11 font-thin">| Total Quantity
                        </small>  80 PCS
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-6 font-11">
                            Saluran penjualan yang tersedia
                          </div>
                          <div class="col-md-6">
                           <img class="social" src="assets/img/icon/icon-ig.svg">
                           <img class="social" src="assets/img/icon/icon-fb.svg">
                           <img class="social" src="assets/img/icon/icon-twitter.svg">
                           <img class="social" src="assets/img/icon/logo-blibli.svg">
                           <img class="social" src="assets/img/icon/logo-bl.svg">
                           <img class="social" src="assets/img/icon/logo-tokped.svg">
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="m-b-10">
                   <div class="row">
                    <div class="col-md-12 m-b-10 font-bold" style="font-size: 12px;">
                      <img class="" src="assets/img/icon/icon-daftartoko.svg" alt="..." style="width: 25px;"> XYZ Mega Store 
                      <small class="color-grey-light font-11 font-thin">| Total Quantity
                      </small>  80 PCS
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-6 font-11">
                          Saluran penjualan yang tersedia
                        </div>
                        <div class="col-md-6">
                         <img class="social" src="assets/img/icon/icon-ig.svg">
                         <img class="social" src="assets/img/icon/icon-fb.svg">
                         <img class="social" src="assets/img/icon/icon-twitter.svg">
                         <img class="social" src="assets/img/icon/logo-blibli.svg">
                         <img class="social" src="assets/img/icon/logo-bl.svg">
                         <img class="social" src="assets/img/icon/logo-tokped.svg">
                       </div>
                     </div>
                   </div>
                 </div>
               </div> 

             </fieldset> -->
           </div>
         </div>
       </div>
     </div>
   </div> 
 </div>
</div>
</div>
