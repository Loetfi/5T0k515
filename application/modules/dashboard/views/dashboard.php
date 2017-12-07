<div class="content">
  <div class="container-fluid">

    <?php echo $this->session->flashdata('message'); ?>
      <!-- 
        <?php print_r($this->session->all_userdata()); ?>
      -->
      <div class="row">
        <div class="content-header">
          <h1>
            Dashboard
            <a href="#" class="btn btn-success btn-fill pull-right">Fitur Premium
            </a>
          </h1>
          <div class="divider-blue">
          </div>
          <ol class="breadcrumb">
            <li>
              <a href="#">

              </a>
            </li>  
          </ol>
        </div>
      </div>
      <div class="row state-overview">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <section class="panel abu">
            <div class="symbol grey">
              <img src="<?php echo base_url('assets/img/icon/icon-toko.svg');?>" class="" alt="icon">
            </div>
            <div class="value color-grey">
              <h1 class="count"><?php echo @$storecount; ?>
              </h1>
              <p>Store
              </p>
            </div>
          </section>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <section class="panel ijo">
            <div class="symbol green">
              <img src="<?php echo base_url('assets/img/icon/icon-tim.svg');?>" class="" alt="icon">
            </div>
            <div class="value color-green">
              <h1 class="count2"><?php echo @$timcount; ?>
              </h1> 
              <p>Staff
              </p>
            </div>
          </section>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <section class="panel merah">
            <div class="symbol red">
              <img src="<?php echo base_url('assets/img/icon/icon-box_produk.svg');?>" class="" alt="icon">
            </div>
            <div class="value color-red">
              <h1 class="count3"><?php echo @$produkcount; ?>
              </h1>  
              <p>Produk
              </p>
            </div>
          </section>
        </div>
      </div>
      <div class="row state-overview">
        <div class="col-md-offset-2 col-md-4 col-sm-6 col-xs-12">
          <section class="panel ungu">
            <div class="symbol purple">
             <img src="<?php echo base_url('assets/img/icon/icon-transaksi.svg');?>" class="" alt="icon">
           </div>
           <div class="value p-t-10 color-purple">
            <h1 class="count">26
            </h1>
            <p>Transaksi Semua Toko
            </p>
          </div>
        </section>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <section class="panel teal">
          <div class="symbol terques">
            <img src="<?php echo base_url('assets/img/icon/icon-notifikasi.png');?>" class="" alt="icon">
          </div>
          <div class="value p-t-10 color-teal">
            <h1 class=" count2">947
            </h1>
            <p>Pesanan Semua Toko
            </p>
          </div>
        </section>
      </div> 
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="card-dashboard-text">
          <div class="content">
            <div class="row">
              <div class="col-md-4">
                <h5>
                  Penjualan
                </h5>
              </div>
              <div class="col-md-8">
                <h2>Rp 666.666.666,-
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
