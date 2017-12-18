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
          <li>
            <a href="<?php echo site_url('setting/tim') ?>">
              Atur Tim
            </a>
          </li> 
          <li class="active">Edit Tim
          </li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title color-grey-light">Daftarkan Tim, saatnya anda mendapatkan bantuan
            </h4> 
          </div>
          <br>
          <!-- <?php print_r($this->session->all_userdata()); ?>  -->
          <form id="" action="<?php echo site_url('setting/tim/editsummary/') ?>" method="POST">
            <?php $this->load->view('editassignmodalstaff'); ?>
            <?php $editstaff = $this->session->userdata('editstaff'); ?>
            <div class="row">
              <div class="text-center">
                <div class="author">
                 <img class="avatar-toko border-gray" src="<?php echo $editstaff['image_path'];?>" alt="...">
                 <a href="#"> 
                  <h4 class="title font-bold font-16" style="line-height: 20px;"><?php echo $editstaff['firstname'].' '.$editstaff['lastname']; ?>
                    <br>
                    <small class="font-12 color-black"> 
                      <?php echo ($editstaff['is_owner']) ? "Owner" : "Staff"; ?>
                    </small>
                  </h4>
                </a>
                <br>
                <a href="" class="font-12" data-toggle="modal" data-target="#assigntim" style="color: #9A9A9A;">Ditempatkan Pada Toko
                </a>
              </div>
            </div>  

            <?php foreach ($assigntoko as $at) { ?>
            <div class="text-center tokolist" style="margin-left: -120px;">
              <img class="" src="<?php echo base_url('assets/img/icon/icon-daftartoko.svg');?>" alt="..." style="width: 25px;">
              <span class="tokolist-assign">
                <?php //StoreAccessIdStoreIdStoreNameStoreUserId 
                echo $at['StoreName']; ?>
              </span> 
            </div> 
            <?php } ?> 

            <br>
            <div class="text-center">
              <small>
                <a href="" class="color-grey-light button-edit-tim" data-toggle="modal" data-target="#tempatkantoko">
                  <i class="fa fa-pencil">
                  </i>Ubah Penempatan Toko
                </a>
              </small>
            </div>
          </div> 
          <br>
          <div class="row">
            <div class="text-center">

              <div class="footer"> 
                <a href="<?php echo site_url('setting/tim/addasign/') ?>" style="width: 120px" class="btn btn-wd btn-warning">Ubah</a> 
                <button style="width: 120px" class="btn btn-success btn-fill btn-wd" >Simpan</button> 
                <div class="clearfix">
                </div>
              </div>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="assigntim" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a type="button" class="boxclose" data-dismiss="modal">
        </a>
        <h4 class="modal-title" style="text-align: left;">
          Tempatkan pada Toko
        </h4>
      </div>
      <div class="modal-body">
        <div class="content table-responsive">
          <table class="table">
            <thead>
              <th>
              </th> 
              <th>Nama Toko
              </th>
              <th>Tanggal Dibuat
              </th>
              <th>Jumlah Staff
              </th>
              <th>
                Jumlah Produk
              </th>
              <th>
                Saluran Penjualan
              </th> 
              <th>
              </th> 
            </thead>
            <tbody>
              <tr> 
                <td>
                  <img class="img-width-50" src="<?php echo base_url('assets/img/user.jpg');?>"/>
                </td>
                <td>XYZ Mega Store
                </td>
                <td>18 September 2017
                </td> 
                <td>6
                </td>
                <td>
                  16
                </td>
                <td>
                  <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>">
                  <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>">
                  <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>">
                  <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>">
                  <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>">
                  <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>">
                </td>   
                <td class="td-actions text-right">
                  <div class="checkbox checkbox-info pull-right">
                    <input id="checkbox1" type="checkbox" checked="">
                    <label for="checkbox1"> 
                    </label>
                  </div> 
                </td>
              </tr> 
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer text-center m-l-r-15"> 
        <a type="button" class="btn btn-info btn-fill" data-dismiss="modal">OK
        </a>
      </div> 
    </div>
  </div>
</div>
<div class="modal brandmodal fade" id="sukses" tabindex="-1" role="dialog" aria-labelledby="">
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
        <p class="text-center m-b-40">Anda sukses menambahkan toko baru
        </p>
        <div class="form-group">
          <a href="<?php echo site_url('setting/tim/') ?>" class="btn btn-info btn-fill btn-block">OK
          </a>
        </div>
      </div> 
    </div>
  </div>
</div> 
</body>


<script type="text/javascript">
  function onFinishTim(){
      //here you can do something, sent the form to server via ajax and show a success message with swal
      swal("Sukses", "Anda sukses memperbarui tim Anda", "success");
    }
  </script>
  <script type="text/javascript">
    $().ready(function(){
      $('#tambahIdentitasToko').validate();
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
    //    =================================== ends here ============================================ //
  </script>
  <script type="text/javascript">
    $(".reveal").on('click',function() {
      var $pwd = $(".pwd");
      if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
      }
      else {
        $pwd.attr('type', 'password');
      }
    }
    );
  </script>
