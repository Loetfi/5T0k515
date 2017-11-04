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
                  <li class="active">Atur Tim
                  </li>
                </ol>
              </div>
            </div>
            <div class="card card-posts">
              <div class="header"> 
                <div class="row"> 
                  <div class="col-md-12">
                    <form class="form-inline pull-right">
                      <div class="form-group">
                        <label class="sr-only">Search
                        </label>
                        <input type="input" style="width: 220px;" class="form-control bordered" placeholder="&#xf002; Cari Anggota Tim Disini">
                      </div>
                      <a href="<?php echo site_url('setting/tim/add') ?>" class="btn btn-primary btn-fill"><img src="<?php echo base_url('assets/img/icon/plus-add_btn.svg');?>" class="icon-plus" alt="icon"> Tambah Tim
                      </a> 
                    </form>
                  </div>
                </div>
              </div>
              <div class="content table-responsive table-full-width">
                <table class="table">
                  <thead>
                    <th>
                    </th> 
                    <th>Nama Tim
                    </th>
                    <th>Tanggal Dibuat
                    </th>
                    <th>Ditugaskan di
                    </th> 
                    <th>
                    </th> 
                  </thead>
                  <tbody class="text-center">
                    <tr> 
                      <td>
                        <img src="<?php echo base_url('assets/img/user.jpg');?>"/>
                      </td>
                      <td>Zola Zoli
                      </td>
                      <td>18 September 2017
                      </td> 
                      <td>XYZ Mega Store
                      </td>    
                      <td class="td-actions text-right">
                        <!-- edittim.html -->
                        <a href="<?php echo site_url('setting/tim/edit') ?>" class="font-30" rel="tooltip" title="Edit">
                          <img src="<?php echo base_url('assets/img/icon/icon-edit.svg');?>" class="icon-edit" alt="icon">
                        </a>
                        <a href="#" class="font-30" rel="tooltip" title="Hapus" data-toggle="modal" data-target="#hapus">
                          <img src="<?php echo base_url('assets/img/icon/icon-delete.svg');?>" class="icon-delete" alt="icon">
                        </a>   
                      </td>
                    </tr>
                    <tr> 
                      <td>
                        <img src="<?php echo base_url('assets/img/user.jpg');?>"/>
                      </td>
                      <td>Zola Zoli
                      </td>
                      <td>18 September 2017
                      </td> 
                      <td>XYZ Mega Store
                      </td>    
                      <td class="td-actions text-right">
                        <a href="<?php echo site_url('setting/toko/tim') ?>" class="font-30" rel="tooltip" title="Edit">
                          <img src="<?php echo base_url('assets/img/icon/icon-edit.svg');?>" class="icon-edit" alt="icon">
                        </a>
                        <a href="#" class="font-30" rel="tooltip" title="Hapus" data-toggle="modal" data-target="#hapus">
                          <img src="<?php echo base_url('assets/img/icon/icon-delete.svg');?>" class="icon-delete" alt="icon">
                        </a>   
                      </td>
                    </tr>
                    <tr> 
                      <td>
                        <img src="<?php echo base_url('assets/img/user.jpg');?>"/>
                      </td>
                      <td>Zola Zoli
                      </td>
                      <td>18 September 2017
                      </td> 
                      <td>XYZ Mega Store
                      </td>    
                      <td class="td-actions text-right">
                        <a href="<?php echo site_url('setting/toko/tim') ?>" class="font-30" rel="tooltip" title="Edit">
                          <img src="<?php echo base_url('assets/img/icon/icon-edit.svg');?>" class="icon-edit" alt="icon">
                        </a>
                        <a href="#" class="font-30" rel="tooltip" title="Hapus" data-toggle="modal" data-target="#hapus">
                          <img src="<?php echo base_url('assets/img/icon/icon-delete.svg');?>" class="icon-delete" alt="icon">
                        </a>   
                      </td>
                    </tr> 
                  </tbody>
                </table>
                <div class="row">
                  <div class="col-md-12">
                    <ul class="pagination pull-right">
                      <li>
                        <a href="#">«
                        </a>
                      </li>
                      <li class="active">
                        <a href="#">1
                        </a>
                      </li>
                      <li>
                        <a href="#">2
                        </a>
                      </li>
                      <li>
                        <a href="#">3
                        </a>
                      </li>
                      <li>
                        <a href="#">4
                        </a>
                      </li>
                      <li>
                        <a href="#">5
                        </a>
                      </li>
                      <li>
                        <a href="#">»
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal brandmodal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog" role="document" style="width: 28%;">
        <div class="modal-content">
          <div class="modal-header">
            <a type="button" class="boxclose" data-dismiss="modal">
            </a>
            <h4 class="modal-title m-t-40 font-thin">
              Hapus Tim
            </h4>
          </div>
          <div class="modal-body" style="padding-right: 50px;padding-left: 50px;">
            <h6 class="text-center m-10 m-b-30">Apakah Anda yakin untuk menghapus anggota tim ini?</h6>
            <div class="form-group m-b-15">
                <button id="signupSubmit" type="submit" class="btn btn-danger btn-fill">Batal
                </button>
                <button id="signupSubmit" type="submit" class="btn btn-info btn-fill">Ya
                </button>
             </div> 
          </div> 
        </div>
      </div>
    </div>
  </body>