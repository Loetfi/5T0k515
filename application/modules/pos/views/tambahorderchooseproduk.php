<!-- print_r($this->session->all_userdata()); -->

<!-- <?php print_r($produklist); ?>  -->
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
            <!-- <p class="category font-16 m-t-10">Order #0001 -->
            </p>
          </div>
          <div class="col-md-9">
            <form class="form-inline pull-right">
              <div class="form-group">
                <label class="sr-only">Search
                </label>
                <input type="input" style="width: 220px;" class="form-control bordered" placeholder="&#xf002; Cari Produk/Toko Disini">
              </div> 
              <a href="TambahOrderChartPage.html">
                <img src="<?php echo base_url('assets/img/icon/icon-cart.svg');?>" class="icon-cart" alt="icon">
                <!-- <label id="cart-badge" class="badge bg-red">1</label>  -->
              </a> 
            </form>
          </div>
        </div>
      </div> 
      <br>
      <div class="content table-responsive table-full-width p-t-0">
 
      </body>


      <div class="modal brandmodal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="">
        <div class="modal-dialog" role="document" style="width: 28%;">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×
              </button>
              <h4 class="modal-title m-t-40">
                Hapus Tim
              </h4>
            </div>
            <div class="modal-body">
              <h6 class="text-center m-10 m-b-30">Apakah Anda yakin untuk menghapus anggota tim ini?</h6>
              <div class="form-group ">
                <button id="signupSubmit" type="submit" class="btn btn-danger btn-fill">Batal
                </button>
                <button id="signupSubmit" type="submit" class="btn btn-info btn-fill">Ya
                </button>
              </div> 
            </div> 
          </div>
        </div>
      </div>
    </body>

    <!-- <table class="table"> -->
      <table class="table table-hover " id="example" width="100%" cellspacing="0">
     <th>Photo</th>
     <th>Nama Produk</th>
     <th>No. SKU</th>
     <th>Kategori</th>
     <th>Stok</th>
     <th>Deskripsi</th>
     <th>Harga Beli</th>
     <th>Action</th>

     <tbody class="text-center">
      <?php foreach ($produklist[0]['ProductsInStore'] as $produk) { ?>
      <?php  foreach ($produk as $prod) { ?>
      <?php // $this->load->view('modalchooseproduk', $prod ,FALSE); 
      $ProductDetails = count($prod['ProductDetails']);
      ?>

      <!-- <?php print_r($produk); ?>  -->

      <!--  MODAL -->
      <form action="<?php echo site_url('pos/order/tambahordercartpage/'); ?>" method="GET">
        <div class="modal brandmodal fade" id="tambahkeranjang<?=$prod['id'];?>" tabindex="-1" role="dialog" aria-labelledby="">
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
                          <input type="hidden" name="product_image" value="<?php echo @$prod['ProductsImage'][0]['path']; ?>">
                          <img class="avatar-produk border-gray" src="<?php echo @$prod['ProductsImage'][0]['path']; ?>" style="max-width: 100%;border:0;" alt="...">
                        </div>
                        <small class="color-grey-light"> - 
                        </small>
                        <h4 class="title" style="font-weight: bold;font-size: 17px;color: #000;">
                          <?php echo $prod['product_name'];?>
                          <input type="hidden" value="<?php echo $prod['id'];?>" name="product_id"></input>
                          <input type="hidden" value="<?php echo $prod['product_name'];?>" name="product_name"></input>
                          <input type="hidden" value="<?php echo $prod['price_sale'];?>" name="price_sale"></input>
                          <!-- Apple iPhone 7 Plus 128GB Matte Black -->
                        </h4>
                        <p class="category font-11"> SKU : <?php echo $prod['id'];?> 
                        </p> 
                        <div class="row" style="margin-top: 30px;">
                          <div class="col-md-8 col-sm-8 no-pr-pl">
                            <dl class="dl-horizontal"> 
                              <dt class="font-12 color-black" style="width: 80px;">
                                Deskripsi:
                              </dt> 

                              <input type="hidden" value="<?php echo $prod['product_desc'];?>" name="product_desc"></input> 

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
                                      <button style="border:0;" type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant">
                                        <img src="<?php echo base_url('assets/img/icon/icon-minus_qty.svg');?>" width="20" alt="icon">
                                      </button>
                                    </span>
                                    <input type="text" name="quant" class="input_qty form-control text-center input-number" value="1" min="0" max="<?=$ProductDetails?>">
                                    <span class="input-group-btn">
                                      <button style="border:0;" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant">
                                        <img src="<?php echo base_url('assets/img/icon/icon-plus_qty.svg');?>" width="20" alt="icon">
                                      </button>
                                    </span>
                                  </div>


                                </div>
                              </div>
                              <div class="col-md-6 col-sm-6 text-right">
                                <p class="font-16 m-t-10 font-bold">IDR <?php echo $prod['price_sale']; ?>
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
                <button  class="btn btn-primary btn-fill">
                  Tambah Ke Keranjang
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>


      <tr> 
        <td>
          <img src="<?php echo @$prod['ProductsImage'][0]['path']; ?>"/>
        </td>
        <td>
          <?php echo $prod['product_name'];?>
        </td>
        <td><?php echo $prod['id']; ?>
        </td>
        <td> - 
        </td>
        <td><?php echo $ProductDetails;  ?>
        </td>
        <td> - 
        </td>
        <td>IDR <?php echo number_format($prod['price_sale']); ?>
        </td>    
        <td class="td-actions text-right">
          <button type="button" class="btn btn-info btn-fill" data-toggle="modal" data-target="#tambahkeranjang<?=$prod['id'];?>">Tambah Ke Keranjang 
          </button>  
        </td>
      </tr>
      <?php  } ?>
      <?php } ?>
    </tbody>


  </table>
</div>
</div>
</div>
</div>
</div>
</div>

</body>

<script type="text/javascript">
  $('.btn-number').click(function(e){
    e.preventDefault();
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
      if(type == 'minus') {
        if(currentVal > input.attr('min')) {
          input.val(currentVal - 1).change();
        }
        if(parseInt(input.val()) == input.attr('min')) {
          $(this).attr('disabled', true);
        }
      }
      else if(type == 'plus') {
        if(currentVal < input.attr('max')) {
          input.val(currentVal + 1).change();
        }
        if(parseInt(input.val()) == input.attr('max')) {
          $(this).attr('disabled', true);
        }
      }
    }
    else {
      input.val(0);
    }
  }
  );
  $('.input-number').focusin(function(){
    $(this).data('oldValue', $(this).val());
  }
  );
  $('.input-number').change(function() {
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
      $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    }
    else {
      alert('Sorry, the minimum value was reached');
      $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
      $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    }
    else {
      alert('Sorry, the maximum value was reached');
      $(this).val($(this).data('oldValue'));
    }
  }
  );
  $(".input-number").keydown(function (e) {
      // Allow: backspace, delete, tab, escape, enter and .
      if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
          // Allow: Ctrl+A
          (e.keyCode == 65 && e.ctrlKey === true) || 
          // Allow: home, end, left, right
          (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
      return;
    }
      // Ensure that it is a number and stop the keypress
      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
      }
    }
    );
  </script>



<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
              "order": [[ 2, "desc" ]]
    });
  } );
</script>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>


