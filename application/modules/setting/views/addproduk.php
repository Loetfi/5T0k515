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
          <li>
            <a href="<?php echo site_url('setting/produk') ?>">
              Atur Produk
            </a>
          </li> 
          <li class="active">Tambah Produk
          </li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-wizard no-pr-pl" id="wizardCard">
          <form action="<?php echo site_url('setting/produk/add') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" target="_blank" id="wizardForm">

            <!-- <form id="wizardForm" method="POST" action="<?php echo site_url('setting/produk/add/') ?>" novalidate="novalidate" target="_blank"> -->

              <div class="">
                <ul class="nav nav-pills">
                  <li class="active" style="width: 33.3333%;">
                    <a href="#tab1" data-toggle="tab" aria-expanded="true">Identitas Produk
                    </a>
                  </li>
                  <li style="width: 33.3333%;">
                    <a href="#tab2" data-toggle="tab">Stok & Harga
                    </a>
                  </li>
                  <li style="width: 33.3333%;">
                    <a href="#tab3" data-toggle="tab">Unggah Produk
                    </a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab1"> 

                    <div class="row">
                      <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                        <div class="text-center bg-form">
                          <div class="img-section">
                            <img src="<?php echo base_url('assets/img/blank.jpg');?>" class="imgCircle img-circle fp-toko" alt="Profile picture">
                            <span class="fake-icon-edit" id="PicUpload" style="color: #000;">
                              <img src="<?php echo base_url('assets/img/icon/plus-upload_img.svg');?>" class="icon-add-image" alt="Profile picture">
                            </span>
                            <div class="col-lg-12"> 
                              <input type="checkbox" class="form-control" id="checker">
                            </div>
                          </div>
                          <input type="file" id="image-input" onchange="readURL(this);" accept="image/*"  class="form-control form-input Profile-input-file" name="userfile" >
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-4 col-md-offset-2">
                            <div class="form-group"> 
                              <input class="form-control" type="text" name="namaproduk" placeholder="Nama Produk" required="true">
                            </div>
                            <div class="form-group"> 
                              <input class="form-control" type="text" name="merk" placeholder="Merk" required="true">
                            </div>
                            <div class="form-group"> 
                              <select class="form-control" id="provinsi" name="CategoryId">
                                <option selected="" style="font-size: 11px;">- Kategori -</option>
                                <?php foreach ($category as $cat) { ?>
                                <option  style="font-size: 11px;" value="<?php echo $cat['CategoryId']; ?>"><?php echo $cat['CategoryName']; ?></option>
                                <?php } ?> 
                              </select>  
                            </div>
                            <div class="form-group"> 
                              <select class="form-control" id="kota" name="SubKategori">
                                <option>- Sub Kategori -</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group"> 
                              <input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi" required="true">
                            </div>
                            <div class="form-group"> 
                              <input class="form-control" type="text" name="warna" placeholder="Warna" required="true">
                            </div>
                            <div class="form-group"> 
                              <input class="form-control" type="text" name="ukuran" placeholder="Ukuran" required="true">
                            </div>
                            <div class="form-group"> 
                              <input class="form-control" type="text" name="kapasitas" placeholder="Kapasitas" required="true">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="tab-pane" id="tab2"> 
                    <div class="center">
                      <div class="form-group"> 
                        <input class="form-control" type="text" name="hargajual" placeholder="Harga Jual" required="true">
                      </div>
                      <div class="form-group"> 
                        <input class="form-control" type="text" name="hargabeli" placeholder="Harga Beli" required="true">
                      </div>
                      <fieldset class="scheduler-border" style="min-height: 200px;">
                        <legend class="scheduler-border color-grey-light">Tersedia di Toko
                        </legend>
                        <div class="text-center">
                          <div class="row">
                            <div class="col-md-12 m-b-10 font-bold" style="font-size: 12px;top: 60%;left: 20px;right: 20px;position: absolute;">
                              <small> 
                                <a href="" class="color-grey-light button-edit-tim" data-toggle="modal" data-target="#tempatkantoko"> 
                                  <img src="<?php echo base_url('assets/img/icon/plus.svg');?>" class="icon-edit" alt="icon"> Tempatkan Pada Toko 
                                </a> 
                              </small>
                            </div>
                          </div>
                        </div>  
                      </fieldset> 
                    </div>
                  </div>
                  <div class="tab-pane" id="tab3">
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                       <!--  <div class="card no-shadow">
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
                        </div> -->
                      </div>
                      <div class="col-md-6 col-sm-6">
                       <!--  <div class="card no-shadow"> 
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
                        </div> -->
                      </div>
 
                      <center><button class="btn">Unggah Produk</button></center>

                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="text-center">
                  <div class="footer">
                    <a type="button" class="btn btn-warning btn-wd btn-back disabled" style="display: none;">Sebelumnya
                    </a>
                    <a type="button" class="btn btn-warning btn-fill btn-wd btn-next">Berikutnya
                    </a>
                    
                    <!-- <button type="button" class="btn btn-success btn-fill btn-wd btn-finish" data-toggle="modal" data-target="#sukses" data-dismiss="modal">Unggah Produk
                    </button> -->
                    <div class="clearfix">
                    </div>
                  </div>
                </div>
              </div>

        <?php $this->load->view('addproduk_getstore'); ?>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



<!-- <div class="modal brandmodal fade" id="sukses" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document" style="width: 28%;">
    <div class="modal-content">
      <div class="modal-header">
        <a type="button" class="boxclose" data-dismiss="modal">
        </a> 
      </div>
      <div class="modal-body p-t-0" style="padding-left: 70px;padding-right:70px;"> 
        <h4 class="text-center m-b-40 font-thin"> 
          Sukses
        </h4>
        <p class="text-center m-b-40">Anda sukses menambahkan produk baru
        </p>
        <div class="form-group">
          <a href="<?php echo site_url('setting/produk') ?>" class="btn btn-info btn-fill btn-block">OK
          </a>
        </div>
      </div> 
    </div>
  </div>
</div> -->
</body>


<script>
  $(document).ready(function() {
  $('#provinsi').change(function() { // Jika Select Box id provinsi dipilih
    var provinsi = $(this).val(); // Ciptakan variabel provinsi
    $.ajax({
      type: 'POST', // Metode pengiriman data menggunakan POST
      url: '<?=site_url('setting/produk/getsubcategorybyid')?>', // File yang akan memproses data
      data: 'CategoryId=' + provinsi, // Data yang akan dikirim ke file pemroses
      success: function(response) { // Jika berhasil
        $('#kota').html(response); // Berikan hasil ke id kota
      }
    });
  });

});
</script>
<script type="text/javascript">
  $().ready(function(){
    var $validator = $("#wizardForm").validate({
      rules: {
        email: {
          required: true,
          email: true,
          minlength: 5
        }
        ,
        first_name: {
          required: false,
          minlength: 5
        }
        ,
        last_name: {
          required: false,
          minlength: 5
        }
        ,
        website: {
          required: true,
          minlength: 5,
          url: true
        }
        ,
        framework: {
          required: false,
          minlength: 4
        }
        ,
        cities: {
          required: true
        }
        ,
        price:{
          number: true
        }
      }
    }
    );
      // you can also use the nav-pills-[blue | azure | green | orange | red] for a different color of wizard
      $('#wizardCard').bootstrapWizard({
        tabClass: 'nav nav-pills',
        nextSelector: '.btn-next',
        previousSelector: '.btn-back',
        onNext: function(tab, navigation, index) {
          var $valid = $('#wizardForm').valid();
          if(!$valid) {
            $validator.focusInvalid();
            return false;
          }
        }
        ,
        onInit : function(tab, navigation, index){
          //check number of tabs and fill the entire row
          var $total = navigation.find('li').length;
          $width = 100/$total;
          $display_width = $(document).width();
          if($display_width < 600 && $total > 3){
            $width = 50;
          }
          navigation.find('li').css('width',$width + '%');
        }
        ,
        onTabClick : function(tab, navigation, index){
          // Disable the posibility to click on tabs
          return false;
        }
        ,
        onTabShow: function(tab, navigation, index) {
          var $total = navigation.find('li').length;
          var $current = index+1;
          var wizard = navigation.closest('.card-wizard');
          // If it's the last tab then hide the last button and show the finish instead
          if($current >= $total) {
            $(wizard).find('.btn-next').hide();
            $(wizard).find('.btn-finish').show();
          }
          else if($current == 1){
            $(wizard).find('.btn-back').hide();
          }
          else {
            $(wizard).find('.btn-back').show();
            $(wizard).find('.btn-next').show();
            $(wizard).find('.btn-finish').hide();
          }
        }
      }
      );
    }
    );
  function onFinishWizard(){
      //here you can do something, sent the form to server via ajax and show a success message with swal
      swal("Sukses", "Anda sukses menambahkan toko baru", "success");
    }
    function onFinishTambahProduk(){
      //here you can do something, sent the form to server via ajax and show a success message with swal
      swal("Sukses", "Anda sukses menambahkan produk baru", "success");
    }
  </script>
  <script type="text/javascript">
    $().ready(function(){
      $('#tambahIdentitasProduk').validate();
    }
    );
  </script>
  <script>
    $('input[id=base-input]').change(function() {
      $('#fake-input').val($(this).val().replace("C:\\fakepath\\", ""));
    }
    );
    <!--==================Javascript code for custom input type file on button ================-->
    $('input[id=main-input]').change(function() {
      console.log($(this).val());
      var mainValue = $(this).val();
      if(mainValue == ""){
        document.getElementById("fake-btn").innerHTML = "Choose File";
      }
      else{
        document.getElementById("fake-btn").innerHTML = mainValue.replace("C:\\fakepath\\", "");
      }
    }
    );
    <!--=========================input type file change on button ends here====================-->
      //    ===================== snippet for profile picture change ============================ //
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('.imgCircle')
            .attr('src', e.target.result)
            .width(114)
            .height(114);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }

      // no = 1
      // function readURL(input) {
      //   if (input.files && input.files[0]) {
      //     var reader = new FileReader(); 
      //     document.getElementById('newKotakimage'+ no).innerHTML = '<div id="kotakimage"><a href="#" id="closeimage"><img src="<?=base_url('assets/img/icon/icon-delete_img.png');?>" id="" alt="Profile picture"></a><img src="" id="imagePreview newPict" class="fp-produk-edit newgambar' + (no+1) + '" style="max-width: 100%; max-height:101px;" alt="Profile picture"></div><div id="newKotakimage' + (no+1) + '"> </div>';
      //     reader.onload = function (e) {
      //       $('.newgambar' + no)
      //       .attr('src', e.target.result)
      //       .width(67);
      //     };
      //     reader.readAsDataURL(input.files[0]);
      //     no++;
      //   }
      // }
    //    =================================== ends here ============================================ //
  </script>
