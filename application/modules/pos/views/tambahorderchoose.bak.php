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
                <label id="cart-badge" class="badge bg-red">1</label> 
              </a> 
            </form>
          </div>
        </div>
      </div> 
      <br>
      <div class="content table-responsive table-full-width p-t-0">



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

      

      <div class="modal brandmodal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog modal-lg text-left" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <a type="button" class="boxclose" data-dismiss="modal">
            </a>
          </div>
          <div class="modal-body">
           <div class="fetched-data"></div>
          </div>
          <div class="form-group m-b-30 text-center"> 
            <a href="TambahOrderChartPage.html" class="btn btn-primary btn-fill">
              Tambah Ke Keranjang
            </a>
          </div>
        </div>
      </div>
    </div>
    
     <!--  <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Detail Barang</h4>
            </div>
            <div class="modal-body">
              <div class="fetched-data"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
            </div>
          </div>
        </div>
      </div> -->

      <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
      <script type="text/javascript">
        $(document).ready(function(){
          $('#myModal').on('show.bs.modal', function (e) {
            var produkid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({ 
              type : 'POST',
              url : '<?=site_url('pos/order/getdetailproduk/');?>',
              data :  'produkid='+ produkid,
              success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
              }
            });
          });
        });
      </script>


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
    <table class="table">
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
      <?php // $this->load->view('modalchooseproduk', $prod ,FALSE); ?>

      <!--  MODAL -->
      <tr> 
        <td>
          <img src="<?php echo base_url('assets/img/user.jpg');?>"/>
        </td>
        <td>
          <?php echo $prod['product_name'];?>
        </td>
        <td><?php echo $prod['id']; ?>
        </td>
        <td> - </td>
        <td><?php echo count($prod['ProductDetails']); ?>
        </td>
        <td> - </td>
        <td>IDR <?php echo number_format($prod['price_sale']); ?>
        </td>    
        <td class="td-actions text-right">
          <a href='#myModal' id='custId' data-toggle='modal' data-id="<?=$prod['id']?>" class="btn btn-info btn-fill" >Tambah</a>

          <!-- <button type="button" class="btn btn-info btn-fill" data-toggle="modal" data-target="#tambahkeranjang<?=$prod['id'];?>">Tambah Ke Keranjang 
          </button>   -->
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
