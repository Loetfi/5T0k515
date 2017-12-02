<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?php echo @$title; ?></title>
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png') ?>">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" /> 

  <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" />
  <!-- Animation library for notifications   -->
  <link href="<?php echo base_url('assets/css/animate.min.css');?>" rel="stylesheet"/>

  <link href="<?php echo base_url('assets/css/bootstrap-reset.css');?>" rel="stylesheet"/>
  <link href="<?php echo base_url('assets/css/my-style.css');?>" rel="stylesheet"/>
  <link href="<?php echo base_url('assets/css/helper.css');?>" rel="stylesheet"/>
  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url('assets/css/pe-icon-7-stroke.css');?>" rel="stylesheet" />

  <link href="<?php echo base_url('assets/css/components-md.css');?>" rel="stylesheet" id="style_components" type="text/css" />


  <link href="<?php echo base_url('assets/css/login.css');?>" rel="stylesheet" type="text/css" /> 

  <?php 
  $login = array('assets/js/jquery.min.js');
  $bukan = array('assets/js/jquery-1.10.2.js', 'assets/js/jquery.validate.min.js');
  $jquery = ( (strtolower($this->uri->segment(2)) == 'login') or (strtolower($this->uri->segment(2)) == '') or (strtolower($this->uri->segment(2)) == 'register') ) ? $login : $bukan ; 

  foreach ($jquery as $key) { 
    echo '<script src="'.base_url($key).'" type="text/javascript"></script>'; 
  }

  ?>

  <!-- js -->  
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?> " type="text/javascript"></script> 
  <script src="<?php echo base_url('assets/js/backstretch/jquery.backstretch.min.js')?> " type="text/javascript"></script>
 

  <script src="<?php echo base_url('assets/js/sweetalert2.js')?> "></script>
  <script src="<?php echo base_url('assets/js/login.js')?> " type="text/javascript"></script>

  <!-- alert sweet -->
  <?php echo $this->session->flashdata('message'); ?>

  <!-- end  --> 
  <link rel="shortcut icon" href="" /> 

</head>
<!-- END HEAD -->
