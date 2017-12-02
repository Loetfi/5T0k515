<body class="login" >
  <!-- BEGIN : LOGIN PAGE 5-1 -->
  <div class="user-login">
    <div class="row bs-reset">
      <div class="col-md-8 bs-reset mt-login-bsfix">
        <div class="login-bg" style="background-color: #63ADD7;">
          <div class="center">
            <img class="logo-white" src="<?php echo base_url('assets/img/icon/logo-white.svg');?>" style="margin-top:23px;" alt="icon">
            <img class="bg-landingpage" src="<?php echo base_url('assets/img/icon/bg-landingpage.svg');?>" alt="icon">
          </div>
        </div>
      </div>
      <div class="col-md-4 login-container bs-reset mt-login-bsfix">
        <div class="login-content">
          <h1>Selamat datang kembali
          </h1>
          <p> Senang bertemu denganmu lagi 
          </p>
          <form action="<?php echo site_url('auth/login') ?>" class="login-form" method="post" id="">

            <div class="row">
              <div class="col-xs-12">
                <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" required/> 
              </div>
            </div> 
            <div class="row"> 
              <div class="col-xs-12">
                <div class="input-group">
                  <input type="password" placeholder="Kata Sandi" class="form-control pwd" value="" required name="password">
                  <span class="input-group-btn" style="border-bottom: 1px solid  #a0a9b4"> 
                    <a href="#" class="icon-pass reveal">
                      <img src="<?php echo base_url('assets/img/icon/icon-hide_passwd.svg');?> " style="width: 20px !important;" id="fa-eye" alt="User Image">
                      <img src="<?php echo base_url('assets/img/icon/icon-viewpasswd.svg');?> " style="width: 20px !important;display: none;" id="fa-eye-slash" alt="User Image">
                    </a> 
                  </span>            
                </div>
              </div> 
            </div>
            <div class="row">
              <div class="col-xs-12">
                <a href="<?php echo site_url('auth/forgot') ?>" class="font-11">Lupa Kata Sandi?</a>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="text-center font-11" style="margin-bottom: 10px;margin-top: 30px;">
                atau masuk dengan akun sosial media
              </div>
              <div class="text-center" style="margin-bottom: 50px;margin-top: 30px;">
                <a href="<?php echo facebook(); ?>"><img class="" src="<?php echo base_url('assets/img/social/fb.png');?>"></a>
                <a href="<?php echo site_url('omni/twitter/twitter/') ?>"><img class="" src="<?php echo base_url('assets/img/social/twitter.png');?>"></a>
                <a href="<?php echo google(); ?>"><img class="" src="<?php echo base_url('assets/img/social/google.png');?>"></a>
                <a href="https://www.instagram.com/oauth/authorize/?client_id=850e5e114a0b4f6a8e409a57af9e1f6c&redirect_uri=<?php echo site_url('omni/instagram/instagram')?>&response_type=code"><img class="" src="<?php echo base_url('assets/img/social/instagram.png');?>"></a> 
                <a href=""><img class="" src="<?php echo base_url('assets/img/social/yahoo.png');?>"></a>
              </div>

              <div class="col-sm-12 text-right">
                <button class="btn btn-success btn-fill btn-lg btn-block" type="submit">Masuk
                </button>

                <a class="btn btn-warning btn-fill btn-lg btn-block" type="submit">Daftar
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

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

