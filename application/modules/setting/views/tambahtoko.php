<script type="text/javascript">
  $(function(){
    $('#namatoko').keyup(function(){
      displayAll();
    });
    $('#namatoko').keyup(function(){
      displayAll();
    });

    function displayAll(){
      thisVal = $('#namatoko').val();
      $('#displaynamatoko').html(thisVal);
    }
  });
</script> 

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
              <a href="<?php echo site_url('setting/toko/') ?>">
                Atur Toko
              </a>
            </li> 
            <li class="active">Tambah Toko
            </li>
          </ol>
        </div>
      </div>
      <div class="row"> 

        <div class="col-md-12">
          <div class="card card-wizard" id="wizardCard"> 
            <div class="content">  
                <?php echo form_open_multipart('setting/toko/add'); ?>
                <div role="content">
                  <ul class="nav nav-pills">
                    <li class="active" style="width: 33.3333%;">
                      <a href="#home" data-toggle="tab" aria-controls="home">Identitas Toko
                      </a>
                    </li>
                    <li style="width: 33.3333%;">
                      <a href="#saluran" data-toggle="tab">Saluran Toko
                      </a>
                    </li>
                    <li class="width-29percent">
                      <a href="#buattoko" data-toggle="tab">Buat Toko
                      </a>
                    </li>
                  </ul> 

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                      <div class="tab-pane active" id="tab1"> 

                          <div class="row">
                            <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
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
                            <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                              <div class="form-group"> 
                                <input class="form-control" type="text" id="nama" name="namatoko" placeholder="Nama Toko" required="">
                              </div>
                            </div>
                          </div>
                          <div class="row"> 
                            <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                              <div class="form-group"> 
                              </div> 
                              <div class="input-group" style="width:100%;">
                                <input placeholder="Alamat" type="text" class="form-control" value="" name="alamat">
                                <span class="input-group-btn"> 
                                  <a href="#" data-toggle="modal" data-target="#alamattoko" class="icon-right" style="left: 5px;">
                                    <img src="<?php echo base_url('assets/img/icon/icon-lokasi.svg');?>" style="width: 20px !important;" class="" alt="User Image">
                                  </a> 
                                </span>          
                              </div>

                              <p align="center">
                                <br>
                                <a href="#saluran" data-toggle="tab" class="btn btn-warning btn-fill btn-wd btn-next">Selanjutnya</a>
                              </p>
                            </div> 
                          </div>
                          <!-- </form> -->

                          <div class="modal brandmodal fade" id="alamattoko" tabindex="-1" role="dialog" aria-labelledby="">
                            <div class="modal-dialog modal-lg" role="document" >
                              <div class="modal-content">
                                <div class="modal-header">
                                 <a type="button" class="boxclose" data-dismiss="modal"></a>  
                              </div>
                              <div class="modal-body p-t-0"> 

                                <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                                <div id="map"></div> 

                                  <input type="hidden" id="lat" readonly="yes" name="lat"> 
                                  <input type="hidden" id="lng" readonly="yes" name="long">
 

                              </div> 
                            </div>
                          </div>
                        </div>


                      </div>
                    </div>
                    <!-- ##### -->
                    <div role="tabpanel" class="tab-pane" id="saluran">
                      <h5 class="text-center color-grey-light">Pilih Saluran Tokomu
                      </h5> 
                      <div class="table-responsive">
                        <table class="table"> 
                          <tbody>
                            <tr> 
                              <td>
                                <a style="color: #333;" href="#" data-toggle="modal" data-target="#saluranOffline">
                                  <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"> Instagram
                                </a>
                              </td>   
                              <td class="td-actions text-right"> 
                                <a class="btn btn-default btn-simple p-0" href="#" data-toggle="modal" data-target="#saluranOffline">
                                  <i style="color: #333;" class="pe-7s-angle-right font-30">
                                  </i>
                                </a> 
                              </td>
                            </tr>
                            <tr> 
                              <td>
                                <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>"> Facebook
                              </td>   
                              <td class="td-actions text-right"> 
                                <a class="btn btn-default btn-simple p-0" href="#">
                                  <i style="color: #333;" class="pe-7s-angle-right font-30">
                                  </i>
                                </a> 
                              </td>
                            </tr>
                            <tr> 
                              <td>
                                <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>"> Twitter
                              </td>   
                              <td class="td-actions text-right"> 
                                <a class="btn btn-default btn-simple p-0" href="#">
                                  <i style="color: #333;" class="pe-7s-angle-right font-30">
                                  </i>
                                </a> 
                              </td>
                            </tr>
                            <tr> 
                              <td>
                                <a style="color: #333;" href="#" data-toggle="modal" data-target="#saluranOnline">
                                  <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>"> Blibli
                                </a>
                              </td>   
                              <td class="td-actions text-right"> 
                                <a class="btn btn-default btn-simple p-0" href="#" data-toggle="modal" data-target="#saluranOnline">
                                  <i style="color: #333;" class="pe-7s-angle-right font-30">
                                  </i>
                                </a> 
                              </td>
                            </tr>
                            <tr> 
                              <td>
                                <img class="social" src="<?php echo base_url('assets/img/icon/logo-bl.svg');?>"> Bukalapak
                              </td>   
                              <td class="td-actions text-right"> 
                                <a class="btn btn-default btn-simple p-0" href="#">
                                  <i style="color: #333;" class="pe-7s-angle-right font-30">
                                  </i>
                                </a> 
                              </td>
                            </tr>
                            <tr> 
                              <td>
                                <a style="color: #333;" href="#" data-toggle="modal" data-target="#Unlink">
                                  <img class="social" src="<?php echo base_url('assets/img/icon/logo-tokped.svg');?>"> Tokopedia
                                </a>
                              </td>   
                              <td class="td-actions text-right"> 
                                <a class="btn btn-default btn-simple p-0" href="#" data-toggle="modal" data-target="#Unlink">
                                  <i style="color: #333;" class="pe-7s-angle-right font-30">
                                  </i>
                                </a> 
                              </td>
                            </tr> 
                          </tbody>
                        </table>

                        <center>
                          <br>
                          <div class="btn-group">
                            <a href="#home" data-toggle="tab" class="btn btn-default btn-fill ">Sebelumnya</a>
                            <a href="#buattoko" data-toggle="tab" class="btn btn-warning btn-fill btn-wd btn-next">Selanjutnya</a>
                          </div>
                        </center>
                      </div>
                    </div>  

                    <div role="tabpanel" class="tab-pane" id="buattoko">
                     <!--  <div class="text-center">
                        <div class="author">
                          <img class="avatar-toko border-gray" src="<?php echo base_url('assets/img/icon/icon-notif_toko.svg');?>" alt="...">
                          <a href="#"> 
                            <h4 class="title">
                              <p id="nama"></p>
                              <br>
                              <small>Jalan Pajajaran No. 1 Bogor, West Java, Indonesia
                              </small>
                            </h4>
                          </a>
                        </div>
                      </div> -->
                     <!--  <div class="center">
                        <fieldset class="scheduler-border">
                          <legend class="scheduler-border">Saluran Penjualan
                          </legend>
                          <div class="text-center">
                            <img class="social" src="<?php echo base_url('assets/img/icon/icon-ig.svg');?>"> 
                            <img class="social" src="<?php echo base_url('assets/img/icon/icon-fb.svg');?>">
                            <img class="social" src="<?php echo base_url('assets/img/icon/icon-twitter.svg');?>"> 
                            <img class="social" src="<?php echo base_url('assets/img/icon/logo-blibli.svg');?>">
                          </div>
                        </fieldset> 
                      </div> -->

                      <center>
                        <br>
                        <div class="btn-group">
                          <a href="#saluran" data-toggle="tab" class="btn btn-default btn-fill ">Sebelumnya</a> 
                        </div>
                        <button class="btn btn-success btn-fill" >Buat</button> 
                      </center>

                    </form>
                  </div>
                </div>
              </div>

              <!-- ###### --> 

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
</body>



   <style>
      /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      #target {
        width: 345px;
      }
    </style>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLB-Nrm5Mz6DUnEphxji4YUiykmOOjytU&libraries=places" type="text/javascript"></script> 


<script type="text/javascript">

  // copy value



  //map.js

//Set up some of our variables.
var map; //Will contain map object.
var marker = false; ////Has the user plotted their location marker? 

//Function called to initialize / create the map.
//This is called when the page has loaded.
function initMap() { 

    //The center location of our map.
    var centerOfMap = new google.maps.LatLng(-6.158577928686365, 106.87774658203125);

    //Map options.
    var options = {
      center: centerOfMap, //Set center.
      zoom: 13 //The zoom value.
    };

    //Create the map object.
    map = new google.maps.Map(document.getElementById('map'), options);


      // Create the search box and link it to the UI element.
      var input = document.getElementById('pac-input');
      var searchBox = new google.maps.places.SearchBox(input);
      map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
       // Bias the SearchBox results towards current map's viewport.
       map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
      });


      var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });


    //Listen for any clicks on the map.
    google.maps.event.addListener(map, 'click', function(event) {                
        //Get the location that the user clicked.
        var clickedLocation = event.latLng;
        //If the marker hasn't been added.
        if(marker === false){
            //Create the marker.
            marker = new google.maps.Marker({
              position: clickedLocation,
              map: map,
                draggable: true //make it draggable
              });
            //Listen for drag events!
            google.maps.event.addListener(marker, 'dragend', function(event){
              markerLocation();
            });
          } else{
            //Marker has already been added, so just change its location.
            marker.setPosition(clickedLocation);
          }
        //Get the marker's location.
        markerLocation();
      });
  }

//This function will get the marker's current location and then add the lat/long
//values to our textfields so that we can save the location.
function markerLocation(){
    //Get location.
    var currentLocation = marker.getPosition();
    //Add lat and lng values to a field that we can save.
    document.getElementById('lat').value = currentLocation.lat(); //latitude
    document.getElementById('lng').value = currentLocation.lng(); //longitude
  }


//Load the map when the page has finished loading.
google.maps.event.addDomListener(window, 'load', initMap);
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
