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
              <a href="<?php echo site_url('setting/tim/') ?>">
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
            <form id="" action="<?php echo site_url('setting/tim/addassign') ?>" method="POST">
              <?php $this->load->view('asignmodalstaff'); ?>

              <div class="row">
                <div class="text-center">
                  <div class="author">

                    <?php if (empty($image_path) or $image_path=="") { ?>
                    <img class="avatar-toko border-gray" src="<?php echo base_url('assets/img/icon/icon-basictim.svg');?>" alt=".Profile Tim Avatar">
                    <?php } else { ?>
                    <img class="avatar-toko border-gray" src="<?=$image_path?>" alt=".Profile Tim Avatar">
                    <?php } ?>

                    <a href="#"> 
                      <h4 class="title font-thin font-16" style="line-height: 20px;"><?=$nama;?>
                        <br>
                        <small class="font-12 color-black"><?php echo $status;?>
                        </small>
                      </h4>
                    </a>
                  </div>
                  <br>
                  <div class="col-md-4 col-md-offset-4">

                   <!--  <a href="" class="color-grey-light button-edit-tim" data-toggle="modal" data-target="#tempatkantoko"> 
                      <img src="<?php echo base_url('assets/img/icon/plus.svg');?>" class="icon-edit" alt="icon"> Tempatkan Pada Toko 
                    </a> 
                  -->

                  <img class="" src="<?php echo base_url('assets/img/icon/icon-daftartoko.svg');?>" alt="Gambar daftar toko" style="width: 43px;">
                  <a href="" class="color-black" data-toggle="modal" data-target="#tempatkantoko">
                    <img class="" src="<?php echo base_url('assets/img/icon/plus.svg');?>" alt="..." style="width: 33px">
                  </a>
                  <br>
                  <a href="" class="font-12" data-toggle="modal" data-target="#tempatkantoko" style="color: #9A9A9A;">Tempatkan Pada Toko
                  </a>

                  <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong><?php echo @$memilih;?></strong>
                  </div>

                </div>
              </div>
            </div> 
            <br>
            <div class="row">
              <div class="text-center">
                <div class="footer">  

                   <a href="#" class="btn btn-warning btn-wd" rel="tooltip" title="SEBELUMNYA" data-href="<?php echo site_url('setting/tim/add?cleardata=yes');?>" data-toggle="modal" data-target="#confirm-delete">SEBELUMNYA
                </a> 
                  <!-- <a href="<?php echo site_url('setting/tim/addsummary') ?>" class="btn btn-warning btn-wd btn-fill">BERIKUTNYA</a>   -->
                  <button class="btn btn-warning btn-fill">BERIKUTNYA</button>
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



<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title m-t-40 font-thin">Apakah kamu yakin ? </h4>
      </div>

      <div class="modal-body">
        <h6 class="text-center m-10 m-b-30">Aksi ini akan mewajibkan kamu mengisi data pengguna kembali.</h6>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Tidak</button>
        <a class="btn btn-info btn-ok btn-fill">Ya</a>
      </div>
    </div>
  </div>
</div>


<script>
  $('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
  });
</script>



<script type="text/javascript">
  function onFinishTim(){
      //here you can do something, sent the form to server via ajax and show a success message with swal
      swal("Sukses", "Anda sukses menambahkan tim baru", "success");
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
