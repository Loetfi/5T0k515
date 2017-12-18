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
          <li class="active">Tambah Tim
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

            <?php echo form_open_multipart('setting/tim/add'); ?>
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
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
              <div class="col-md-4 col-md-offset-4">
                <div class="form-group"> 
                  <input class="form-control" type="text" name="username" placeholder="username" required="true">
                </div>
              </div>
            </div> 
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
                <div class="form-group"> 
                  <select class="selectpicker form-control" name="akses">
                    <option style="font-size: 11px;" value="true">Owner</option>
                    <option style="font-size: 11px;" value="false">Staff</option>
                  </select> 
                </div>
              </div>
            </div>
            <div class="row"> 
              <div class="col-md-4 col-md-offset-4">
                <div class="form-group">
                  <input class="form-control" type="text" name="firstname" required="true" placeholder="Nama Depan">
                  <input class="form-control" type="text" name="lastname" required="true" placeholder="Nama Belakang">
                </div>
              </div> 
            </div>
            <div class="row"> 
              <div class="col-md-4 col-md-offset-4">
                <div class="form-group">
                  <input class="form-control" type="email" name="email" required placeholder="Email">
                </div>
              </div> 
            </div>
            <div class="row"> 
              <div class="col-md-4 col-md-offset-4">
                <div class="input-group" style="width:100%;">
                  <input type="password" placeholder="Kata Sandi" class="form-control pwd" value="" required name="password">
                  <span class="input-group-btn" style="border-bottom: 1px solid  #a0a9b4"> 
                    <a href="#" class="icon-pass reveal pass" style="left: 5px;background-color: transparent;">
                      <img src="<?php echo base_url('assets/img/icon/icon-hide_passwd.svg');?>" style="width: 20px !important;" id="fa-eye" alt="User Image">
                      <img src="<?php echo base_url('assets/img/icon/icon-viewpasswd.svg');?>" style="width: 20px !important;display: none;" id="fa-eye-slash" alt="User Image">
                    </a>  
                  </span>          
                </div>
              </div>
            </div>
            <div class="row"> 
              <div class="col-md-4 col-md-offset-4">
                <div class="input-group" style="width:100%;">
                  <input type="password" placeholder="Ulangi Kata Sandi" class="form-control pwd2" value="" required name="confirm_password">
                  <span class="input-group-btn" style="border-bottom: 1px solid  #a0a9b4"> 
                    <a href="#" class="icon-pass reveal2 pass" style="left: 5px;background-color: transparent;">
                      <img src="<?php echo base_url('assets/img/icon/icon-hide_passwd.svg');?>" style="width: 20px !important;" id="fa-eye2" alt="User Image">
                      <img src="<?php echo base_url('assets/img/icon/icon-viewpasswd.svg');?>" style="width: 20px !important;display: none;" id="fa-eye-slash2" alt="User Image">
                    </a>
                  </span>          
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
                <div class="footer">
                  <!-- <a href="<?php echo site_url('setting/tim/addassign') ?>" class="btn btn-warning btn-fill btn-wd btn-next btn-block">BERIKUTNYA</a>   -->
                  <button class="btn btn-warning btn-block btn-fill">BERIKUTNYA</button>
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



<div class="modal brandmodal fade" id="alamattoko" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×
        </button> 
        <div class="form-group pull-right">
          <label class="sr-only">Search
          </label>
          <input type="input" class="form-control" placeholder=" Cari Lokasi Disini">
        </div>
      </div>
      <div class="modal-body p-t-0"> 
        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed">
        </iframe>
      </div> 
    </div>
  </div>
</div> 
</body>

<script type="text/javascript">
  function onFinishWizard(){
      //here you can do something, sent the form to server via ajax and show a success message with swal
      swal("Sukses", "Anda sukses menambahkan toko baru", "success");
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
      var x = document.getElementById("fa-eye-slash");
      var y = document.getElementById("fa-eye");
      if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
      } else {
        x.style.display = "none";
        y.style.display = "block";
      }
      var input = $($(this).attr("toggle"));
      var $pwd = $(".pwd");
      if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
      } else {
        $pwd.attr('type', 'password');
      }
    });
  </script>
  <script type="text/javascript">
    $(".reveal2").on('click',function() {
      var x = document.getElementById("fa-eye-slash2");
      var y = document.getElementById("fa-eye2");
      if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
      } else {
        x.style.display = "none";
        y.style.display = "block";
      }
      var input = $($(this).attr("toggle"));
      var $pwd = $(".pwd2");
      if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
      } else {
        $pwd.attr('type', 'password');
      }
    });
  </script>
