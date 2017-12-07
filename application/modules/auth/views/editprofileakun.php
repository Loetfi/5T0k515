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
              <li class="active">Edit Profil Akun
              </li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="header">
                <h4 class="title color-grey-light">Informasi Akun Anda
                </h4> 
              </div>
              <br>
              <form id="" action="<?php echo site_url('auth/profil/editakun') ?>" method="POST" novalidate="">
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
                      <input type="file" id="image-input" onchange="readURL(this);" accept="image/*"  class="form-control form-input Profile-input-file" >
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2 col-md-offset-4">
                    <div class="form-group"> 
                      <input class="form-control" type="text" name="firstname" placeholder="Nama Depan" required="true" value="<?php echo @$profil['firstname'] ?>">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group"> 
                      <input class="form-control" type="text" name="lastname" placeholder="Nama Belakang" required="true" value="<?php echo $profil['lastname'] ?>">
                    </div>
                  </div>
                </div> 
                <div class="row"> 
                  <div class="col-md-4 col-md-offset-4">
                    <div class="form-group">
                      <input class="form-control" type="text" name="no_handphone" required="true" placeholder="Nomor Telepon" value="<?php echo $profil['no_handphone'] ?>">
                    </div>
                  </div> 
                </div>
                <div class="row"> 
                  <div class="col-md-4 col-md-offset-4">
                    <div class="form-group">
                      <input class="form-control" type="text" value="<?php echo $profil['email'] ?>" name="email" required="true" placeholder="Email">
                    </div>
                  </div> 
                </div> 
                <div class="row"> 
                  <div class="col-md-4 col-md-offset-4">
                   <div class="input-group" style="width:100%;">
                    <input type="password" placeholder="Kata Sandi" class="form-control pwd" value="" name="password">
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
                    <input type="password" placeholder="Ulangi Kata Sandi" class="form-control pwd2" value="" name="confirm_password">
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
                    <button class="btn btn-success btn-fill btn-wd btn-next btn-block">Simpan</button>
                    <!-- <a href="#" class="btn btn-success btn-fill btn-wd btn-next btn-block" >Simpan</a>   -->
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
        <p class="text-center m-b-40">Anda sukses memperbaharui profil Anda
        </p>
        <div class="form-group">
          <a href="<?php echo site_url('auth/profil/edit') ?>" class="btn btn-info btn-fill btn-block">OK
          </a>
        </div>
      </div> 
    </div>
  </div>
</div>  
</body>


<script type="text/javascript">
  function onFinish(){
      //here you can do something, sent the form to server via ajax and show a success message with swal
      swal("Sukses", "Anda sukses memperbarui profil Anda", "success");
    }
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
