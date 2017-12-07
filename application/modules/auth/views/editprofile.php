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
              <form id="" action="#" method="" novalidate="">
                <div class="row">
                  <div class="col-md-4 col-md-offset-4">
                    <div class="text-center bg-form">
                      <div class="img-section">
                       <img class="avatar-toko border-gray" src="<?php echo base_url('assets/img/icon/icon-profil.svg');?>" alt="...">
                             <!--  <span class="fake-icon-edit" id="PicUpload" style="color: #000;">
                                <span class="pe-7s-plus plus" style="font-size: 80px;top: 20px;left: 25px;position: absolute;">
                                </span>
                              </span>
                              <div class="col-lg-12"> 
                                <input type="checkbox" class="form-control" id="checker">
                              </div> -->
                            </div> 
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2 col-md-offset-4">
                          <div class="form-group"> 
                            <input class="form-control" type="text" value="<?php echo @$profil['firstname']; ?>" name="" placeholder="Nama Depan" disabled>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group"> 
                            <input class="form-control" type="text" value="<?php echo @$profil['lastname']; ?>" name="" placeholder="Nama Belakang" disabled>
                          </div>
                        </div>
                      </div> 
                      <div class="row"> 
                        <div class="col-md-4 col-md-offset-4">
                          <div class="form-group">
                            <input class="form-control" type="text" value="<?php echo @$profil['no_handphone']; ?>" name="" disabled placeholder="Nama Lengkap">
                          </div>
                        </div> 
                      </div>
                      <div class="row"> 
                        <div class="col-md-4 col-md-offset-4">
                          <div class="form-group">
                            <input class="form-control" type="text" value="<?php echo @$profil['email']; ?>" name="" disabled placeholder="Email">
                          </div>
                        </div> 
                      </div> 
                      <div class="row"> 
                        <div class="col-md-4 col-md-offset-4">
                         <div class="input-group" style="width:100%;">
                          <input type="password" placeholder="Kata Sandi" class="form-control" disabled value="password"> 
                        </div>
                      </div>
                    </div> 
                    <br>
                    <br>
                    <div class="row">
                      <div class="col-md-4 col-md-offset-4">
                        <div class="footer">
                          <a href="<?php echo site_url('auth/profil/editakun') ?>" class="btn btn-warning btn-wd btn-next btn-block">Ubah Profil</a>  
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
  </body>

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
