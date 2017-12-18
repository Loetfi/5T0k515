<div class="modal fade" id="tempatkantoko" tabindex="-1" role="dialog" aria-labelledby="">
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

          <table class="table table-hover " id="" width="100%" cellspacing="0">
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
              <th>
              </th> 
            </thead>


            <tbody class="text-center">
              <?php foreach ($store as $r) { ?>
              <tr> 
                <td>

                  <?php if (isset($r['Photo'])) {
                    echo '<img src="'.$r['Photo'].'" class="img-width-50">';
                  } else {
                    echo "<img src='".base_url('assets/img/user.jpg')."'>";
                  } ?>
                  
                </td>
                <td><?php echo $r['StoreName']; ?>
                  <input type="hidden" name="Store[]" value="<?php echo @$r['StoreId']?>">
                </td>
                <td><?php echo date('d F Y' , strtotime($r['AddDate']));  ?></td>
                <td><?php  echo count($r['StoreAccess']); ?> </td> 
                <td>belum</td>
                <td>
                  belum
                </td>   
                <td class="td-actions text-right">
                  <input id="checkbox1" type="checkbox" name="toko[]" value="<?=$r['StoreId']?>" <?php echo @getassigntoko_by_session($r['StoreId']) ? 'checked=""' : ''; ?>>
                  <label for="checkbox1"> 
                  </label>
                </td>
              </tr>
              <?php } ?>
            </tbody> 
          </table> 

        </div>
      </div>
      <div class="modal-footer text-center m-l-r-15"> 
        <a type="button" class="btn btn-primary" data-dismiss="modal">OK</a>
      </div> 
    </div>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
      "order": [[ 2, "desc" ]]
    });
  } );
</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

