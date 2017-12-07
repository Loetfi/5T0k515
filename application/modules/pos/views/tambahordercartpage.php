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
      <div class="card">
        <div class="header" style="border-bottom: 1px solid #ddd;padding-bottom: 10px;margin-bottom: -20px;">  
          <div class="row"> 
            <div class="col-md-6">
              <p class="category font-16 m-t-10">Order #0001 - Keranjang Belanja
              </p>
            </div>
            <div class="col-md-6">
              <form class="form-inline pull-right">
                <div class="form-group">
                  <label class="sr-only">Search
                  </label>
                  <input type="input" style="width: 220px;" class="form-control bordered" placeholder="&#xf002; Cari Produk/Toko Disini"> 
                </div> 
                <a href="<?php echo site_url('pos/order/tambahordercartpage') ?>">
                  <img src="<?php echo base_url('assets/img/icon/icon-cart.svg');?>" class="icon-cart" alt="icon">
                  <label id="cart-badge" class="badge bg-red">1</label> 
                </a> 
              </form>
            </div>
          </div>
        </div> 
        <br>
        <div class="row">
          <div class="col-md-8 col-sm-12" style="border-right: 1px solid #ddd;">
            <div class="table-responsive">
              <table class="table shoping-cart-table">
                <tbody> 
                  <tr>
                    <td class="" style="border:none;"> 
                      <label class="radio pull-right"> 
                        <span class="icons">
                          <span class="first-icon fa fa-circle-o">
                          </span>
                          <span class="second-icon fa fa-dot-circle-o">
                          </span>
                        </span>
                        <span class="icons">
                          <span class="first-icon fa fa-circle-o">
                          </span>
                          <span class="second-icon fa fa-dot-circle-o">
                          </span>
                        </span>
                        <!-- <input type="radio" data-toggle="radio" name="optionsRadios" value="option1">  -->
                      </label>
                    </td>
                    <!-- <td colspan="4" class="font-bold color-black" style="text-align: left;border:none;"> Pilih Semua Transaksi </td>  -->
                  </tr>


                  <?php $i = 0; $sum=0;?>

                  <?php foreach ($this->cart->contents() as $items): ?>
                    <tr>
                      <td width="90" style="padding-top: 10px;vertical-align: top;">
                        <div class="cart-product-imitation">
                          <img class="avatar-produk border-gray" src="" style="max-width: 100%;border:0;" alt="...">
                        </div>
                      </td>
                      <td class="desc">
                        <small style="font-size: 65%;"> - </small>
                        <h4 class="title font-bold font-14"><td><?php echo $items['options']['product_name']; ?></td>
                        </h4>
                      </td> 
                      
                      <!-- <td><?php echo $items['options']['product_id']; ?></td>  -->

                      <td>
                        <p>QTY : <?php echo $items['options']['quant']; ?></p>
                        <p class="font-12 m-t-10 font-bold">IDR <?php echo $hasil = (int) @$items['options']['price_sale'] * @$items['options']['quant']; ?>
                        </p> 
                      </td>
                    </tr> 

                    <?php $i++; ?>
                    <?php $sum+= $hasil; endforeach; ?> 

                  </tbody>
                </table>
              </div> 
           <!--  <a href="<?php echo site_url('pos/order/chooseproduk') ?>" class="btn btn-default btn-simple color-blue">
              <span class="font-20 pe-7s-plus color-blue" style="">
              </span> Tambah Barang Lagi
            </a> -->
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="card-cart-text" style="border-top: 1px solid #ddd;">
              <div class="content">
                <div class="row">
                  <div class="col-md-4">
                    <h6>
                      SUBTOTAL
                    </h6>
                  </div>
                  <div class="col-md-8">
                    <h4>IDR <?php echo @$sum; ?>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-cart-text">
              <div class="content">
                <div class="row">
                  <div class="col-md-4">
                    <h6>
                      PPN 10%
                    </h6>
                  </div>
                  <div class="col-md-8">
                    <h4>IDR <?php echo $tax = (int) (($sum*$pajak)/100); ?>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-cart-text">
              <div class="content">
                <div class="row">
                  <div class="col-md-4">
                    <h6>
                      TOTAL
                    </h6>
                  </div>
                  <div class="col-md-8">
                    <h3>IDR <?php echo $total = number_format($sum + $tax); ?>
                    </h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <div class="content">
                <div class="row">
                  <div class="col-md-12">
                    <a href="#" data-toggle="modal" data-target="#lanjutPembayaran" class="btn btn-block btn-success btn-fill">Lanjut Ke Pembayaran
                    </a>
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
</div>
<div class="modal brandmodal fade" id="lanjutPembayaran" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog modal-md text-left" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a type="button" class="boxclose" data-dismiss="modal">
        </a>
      </div>
      <div class="modal-body text-center">
        <!-- No Invoice <span class="font-bold">INV.001.001.XX</span> -->
        <br>
        <br>
        <div class="row">
          <div class="center">
            <div class="total">
              <h5 class="m-0">
                TOTAL
              </h5>
              <h4 class="font-bold m-0">
                IDR <?php echo $total; ?>
              </h4>
            </div> 
          </div>
        </div>
        
      </div>
      <div class="m-b-30 text-center"> 
        <a href="<?php echo site_url('pos/order/payoptiontunai') ?>" class="btn btn-success btn-wd btn-fill">
          Tunai
        </a>
        <a href="<?php echo site_url('pos/order/payoptioncc') ?>" class="btn btn-warning btn-wd btn-fill">
          Kartu Kredit
        </a>
      </div>
    </div>
  </div>
</div>
</body>
