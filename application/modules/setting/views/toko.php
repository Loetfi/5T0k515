 <?php echo $this->session->flashdata('message'); ?>

<!-- <?php print_r($res); ?> -->
  
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
          <li class="active">Atur Toko
          </li>
        </ol>
      </div>
    </div>
    <div class="card card-posts">
      <div class="header"> 
        <div class="row"> 
          <div class="col-md-12">
            <div class="pull-right">

            <!-- <form class="form-inline ">
              <div class="form-group">
                <label class="sr-only">Search
                </label>
                <input type="input" class="form-control bordered" placeholder="&#xf002; Cari Toko Disini">
              </div>
            </form> -->
            <a href="<?php echo site_url('setting/toko/add') ?>" class="btn btn-primary btn-fill"><img src="<?php echo base_url('assets/img/icon/plus-add_btn.svg');?>" class="icon-plus" alt="icon"> Tambah Toko
            </a> 
          </div>
        </div>
      </div>
    </div>
    <div class="content table-responsive table-full-width">   

      <table class="table table-hover " id="example" width="100%" cellspacing="0">
        <thead>
          <th>Foto
          </th> 
          <th>Nama Toko
          </th>
          <th>Tanggal Dibuat
          </th>
          <th>Jumlah Staff
          </th>
          <th>Jumlah Produk
          </th>
          <th>Saluran Penjualan
          </th> 
          <th>Aksi
          </th> 
        </thead>


        <tbody class="text-center">

          <?php foreach ($res as $r) { ?>
            <tr> 
              <td>
                <img src="<?php echo $r['Photo']; ?>">
                <!-- <img src="<?php echo base_url('assets/img/user.jpg');?>"/> -->
              </td>
              <td><?php echo $r['StoreName']; ?></td>
              <td><?php echo date('d F Y' , strtotime($r['AddDate']));  ?></td>
              <td><?php  echo count($r['StoreAccess']); ?> </td>
              <td><?php  echo $r['CountProduct'][0]['total_product']; ?></td>
              <td>
                belum
               <!--  <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"/>
                <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>"/>
                <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>"/>
                <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>"/>
                <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>"/>
                <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>"/> -->
              </td>   
              <td class="td-actions text-right">
                <a href="<?php echo site_url('setting/toko/edit/'.$r['StoreId']) ?>" class="font-30" rel="tooltip" title="Edit">
                  <img src="<?php echo base_url('assets/img/icon/icon-edit.svg');?>" class="icon-edit" alt="icon">
                </a>
                <a href="#" class="font-30" rel="tooltip" title="Hapus" data-href="<?=site_url('setting/toko/delete?id=').$r['StoreId'];?>" data-toggle="modal" data-target="#confirm-delete"> 
                  <img src="<?php echo base_url('assets/img/icon/icon-delete.svg');?>" class="icon-delete" alt="icon">
                </a>   
              </td>
            </tr>
            <?php } ?>
          </tbody>
          
            <!-- echo count($r['StoreAccess']);
            echo $r['StoreId'];
            echo $r['StoreName'];
            echo $r['StoreAddress'];
            echo $r['Latitude'];
            echo $r['Longitude'];
            echo $r['Photo'];
            echo date('d F Y' , strtotime($r['AddDate'])); -->
            <!-- echo "<br>"; --> 

          </table> 
        </div> 
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title m-t-40 font-thin">Hapus Toko</h4>
      </div>

      <div class="modal-body">
        <h6 class="text-center m-10 m-b-30">Apakah anda yakin untuk menghapus toko ini?</h6>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cancel</button>
        <a class="btn btn-info btn-ok btn-fill">Delete</a>
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
</body>




<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
              "order": [[ 2, "desc" ]]
    });
  } );
</script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

