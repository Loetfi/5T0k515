<div class="modal brandmodal fade" id="tambahkeranjang" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog modal-lg text-left" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a type="button" class="boxclose" data-dismiss="modal">
        </a>
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
                <h4 class="title" style="font-weight: bold;font-size: 17px;color: #000;">
                  <?php echo $prod['product_name'];?>
                  <!-- Apple iPhone 7 Plus 128GB Matte Black -->
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
            </div>
          </div>
          <div class="col-md-6">
            <div class="card no-shadow"> 
              <div class="content"> 
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <div class="" style="width: 150px">
                          <div class="input-group"> 
                            <span class="input-group-btn"> 
                              <button style="border:0;" type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                <img src="<?php echo base_url('assets/img/icon/icon-minus_qty.svg');?>" width="20" alt="icon">
                              </button>
                            </span>
                            <input type="text" name="quant[1]" class="input_qty form-control text-center input-number" value="1" min="0" max="999">
                            <span class="input-group-btn">
                              <button style="border:0;" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                <img src="<?php echo base_url('assets/img/icon/icon-plus_qty.svg');?>" width="20" alt="icon">
                              </button>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 text-right">
                        <p class="font-16 m-t-10 font-bold">IDR 600.000
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <div class="form-group m-b-30 text-center"> 
        <a href="<?php echo site_url('pos/order/tambahordercartpage') ?>" class="btn btn-primary btn-fill">
          Tambah Ke Keranjang
        </a>
      </div>
    </div>
  </div>
</div>
