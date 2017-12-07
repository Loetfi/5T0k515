    <?php echo $this->session->flashdata('message'); ?>
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
              <li class="active">
                <a href="#">
                  My POS
                </a>
              </li>  
            </ol>
          </div>
        </div>
        <div class="card card-posts">
          <div class="header"> 
            <div class="row"> 
              <div class="col-md-12">
                <form class="form-inline pull-right"> 
                  <a href="<?php echo site_url('pos/order') ?>" class="btn btn-primary btn-fill"><img src="<?php echo base_url('assets/img/icon/plus-add_btn.svg');?>" class="icon-plus" alt="icon"> Buat Order Baru
                  </a>  
                </form>
              </div>
            </div>
          </div>
          <div class="content table-responsive table-full-width">
            <!-- <table class="table"> -->
              
             

              <table class="table table-hover " id="example" width="100%" cellspacing="0">
                <thead> 
                  <th>No. Invoice
                  </th>
                  <th>Nama Produk
                  </th>
                  <th>Saluran Penjualan
                  </th> 
                  <th>
                  </th> 
                </thead>
                <tbody class="text-center">

                  <?php foreach ($invoice as $inv) { ?>

                  <tr>  
                    <td><?php echo $inv['InvoiceNumber']; ?></td>
                    <td><?php echo $inv['ProductId']; ?></td> 
                    <td><?php echo $inv['ChannelId']; ?>
                      <!-- <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"> Instagram -->
                    </td>    
                    <td class="td-actions text-right"> 
                      <a class="btn btn-default btn-simple" href="<?php echo site_url('pos/detail/'.$inv['SalesId']) ?>">
                        <i style="color: #333;" class="fa fa-angle-right">
                        </i>
                      </a>  
                    </td>
                  </tr> 

                  <?php } ?> 
                </tbody>
              </table>
              
            </div>


          </div>
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

