<!-- <?php print_r($produk);?>  -->
<?php echo $this->session->flashdata('message'); ?>
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
                <div class="form-group">
                  <label class="sr-only">Search
                  </label>
                  <input type="input" class="form-control bordered" placeholder="&#xf002; Cari Produk Disini">
                </div>
                <a href="<?php echo site_url('setting/produk/add/') ?>" class="btn btn-primary btn-fill">
                  <img src="<?php echo base_url('assets/img/icon/plus-add_btn.svg');?>" class="icon-plus" alt="icon"> Tambah Produk
                </a> 
              </form>
            </div>
          </div>
        </div>
        <div class="content table-responsive table-full-width">
          <!-- <table class="table"> -->
            <table class="table table-hover " id="example" width="100%" cellspacing="0">
            <thead>
              <th>
              </th> 
              <th>Nama Produk
              </th>
              <th>No. SKU
              </th>
              <th>Kategori
              </th>
              <th>Stok
              </th>
              <th>Harga Jual
              </th> 
              <th>Harga Beli
              </th> 
              <th>
              </th> 
            </thead>
            <tbody class="text-center">
              <!-- <?php print_r($produk); ?> -->
              <?php 

              
              if (isset($produk)) {
                foreach ($produk as $prod) { ?>
                <tr> 
                  <td>
                    <?php 
                  //print_r($prod['ProductsImage']);
                    if (isset($prod['ProductsImage'][0]['path'])) {
                      echo  '<img src="'.$prod['ProductsImage'][0]['path'].'"/>';
                    } else {
                      echo '<img src="'.base_url('assets/img/user.jpg').'"/>';
                    }
                    ?>
                    
                  </td>
                  <td><?php echo $prod['product_name']; ?></td>
                  <td>SKU XXX-01-FF...</td>
                  <td>Elekronik</td>
                  <td> </td>
                  <td><?php echo $prod['price_buy']; ?></td>
                  <td><?php echo $prod['price_sale']; ?></td>
                  <td class="td-actions text-right">
                    <a href="<?php echo site_url('setting/produk/view/'.$prod['id']); ?>" class="font-30" rel="tooltip" title="Lihat">
                      <img src="<?php echo base_url('assets/img/icon/icon-viewdetails.svg');?>" class="icon-view" alt="icon">
                    </a>
                    <a href="<?php echo site_url('setting/produk/edit/'.$prod['id']) ?>" class="font-30" rel="tooltip" title="Edit">
                      <img src="<?php echo base_url('assets/img/icon/icon-edit.svg');?>" class="icon-edit" alt="icon">
                    </a>
                    <a href="#" class="font-30" rel="tooltip" title="Hapus" data-toggle="modal" data-target="#hapusproduk">
                      <img src="<?php echo base_url('assets/img/icon/icon-delete.svg');?>" class="icon-delete" alt="icon">
                    </a>   
                  </td>
                </tr>
                <?php }} ?> 
            </tbody>
          </table>
           
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal brandmodal fade" id="hapusproduk" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document" style="width: 28%;">
    <div class="modal-content">
      <div class="modal-header">
        <a type="button" class="boxclose" data-dismiss="modal">
        </a>
        <h4 class="modal-title m-t-40 font-thin">
          Hapus Produk
        </h4>
      </div>
      <div class="modal-body" style="padding-right: 50px;padding-left: 50px;">
        <h6 class="text-center m-10 m-b-30">Apakah anda yakin untuk menghapus produk ini?
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
<div class="modal brandmodal fade" id="lihatProduk" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog modal-xl text-left" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a type="button" class="boxclose" data-dismiss="modal">
        </a>
        <h4 class="modal-title text-left">
          Info Detail Produk
        </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="card no-shadow">
              <div class="header p-0">
                <div class="author">
                  <img class="avatar-produk border-gray" src="<?php echo base_url('assets/img/iphone.png');?>" style="max-width: 100%;border:0;" alt="...">
                </div>
                <small class="color-grey-light">Elektronik - Smartphone
                </small>
                <h4 class="title" style="font-weight: bold;font-size: 17px;color: #000;">Apple iPhone 7 Plus 128GB Matte Black
                </h4>
                <p class="category font-11">SKU XXX-01-FF-RED
                </p>
                <div class="row" style="margin-top: 30px;">
                  <div class="col-md-8 col-sm-8 no-pr-pl">
                    <dl class="dl-horizontal"> 
                      <dt class="font-12 color-black" style="width: 80px;">
                        Deskripsi:
                      </dt> 
                      <dd class="font-12 color-grey-light font-thin">
                        - 128GB
                      </dd> 
                      <dt class="font-12 font-thin" style="width: 80px;">

                      </dt> 
                      <dd class="font-14 color-grey-light font-thin">
                       - Warna Matte Black
                     </dd>
                     <dt class="font-12 font-thin" style="width: 80px;">

                     </dt> 
                     <dd class="font-14 color-grey-light font-thin">
                       - Garansi International 1 Tahun
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
                  <button type="button" class="btn btn-success btn-fill" style="cursor: text;">Harga Jual IDR 600.000
                  </button>
                  <button type="button" class="btn btn-danger btn-fill" style="cursor: text;">Modal IDR 200.000
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
                              <h2>160 PCS
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
                              <h2>2
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
              <fieldset class="scheduler-border" style="min-height:260px;max-height: 260px;overflow: auto;">
                <legend class="scheduler-border color-grey-light">Saluran penjualan yang tersedia
                </legend>
                
                <div class="m-b-10">
                 <div class="row">
                  <div class="col-md-12 m-b-10 font-bold" style="font-size: 12px;">
                    <img class="" src="<?php echo base_url('assets/img/icon/icon-daftartoko.svg');?>" alt="..." style="width: 25px;"> XYZ Mega Store 
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
                       <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>">
                       <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>">
                       <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>">
                       <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>">
                       <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>">
                       <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>">
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="m-b-10">
               <div class="row">
                <div class="col-md-12 m-b-10 font-bold" style="font-size: 12px;">
                  <img class="" src="<?php echo base_url('assets/img/icon/icon-daftartoko.svg');?>" alt="..." style="width: 25px;"> XYZ Mega Store 
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
                     <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>">
                     <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>">
                     <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>">
                     <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>">
                     <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>">
                     <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>">
                   </div>
                 </div>
               </div>
             </div>
           </div> 
         </fieldset>
       </div>
     </div>
   </div>
 </div>
</div> 
</div>
</div>
</div>
</body>





<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
              "order": [[ 2, "desc" ]]
    });
  } );
</script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>


