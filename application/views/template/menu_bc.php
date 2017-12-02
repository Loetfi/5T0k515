  <?php 
          $menu = $this->session->userdata('menu');
          foreach ( $menu as $men ) {  ?>
          <li class="">

            <?php if (count(@$men['detailmenu']) > 0) { ?>
            <a data-toggle="collapse" href="#componentsExamples" aria-expanded="false">
              <?php } else { ?>
              <a href="<?php echo site_url('dashboard') ?>"> 
                <?php } ?>
                <img src="<?php echo base_url('assets/img/icon/icon-dashboard_nonaktif.svg');?>" class="" alt="icon">
                <p><?php echo $men['menu'] ?>
                </p>
              </a>
              <?php if (count(@$men['detailmenu']) > 0) { ?>
              <div class="collapse in" id="componentsExamples">
                <ul class="nav">
                  <?php foreach ($men['detailmenu'] as $detailmenu) { ?>
                  <li class="">
                    <a href="<?php echo site_url('setting/toko'); ?>">
                      <img src="<?php echo base_url('assets/img/icon/icon-toko-nonaktif.svg');?>" class="" alt="icon">
                      <p><?php echo $detailmenu['menu'] ?>
                      </p>
                    </a>
                  </li>  
                  <?php } ?>
                </ul>
              </div>
              <?php } ?>
            </li>
            <?php } ?>
