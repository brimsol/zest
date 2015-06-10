<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if IE 7]> <html class="ie lt-ie9 lt-ie8 paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if IE 8]> <html class="ie lt-ie9 paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if gt IE 8]> <html class="ie paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if !IE]><!-->
<html class="">
<!-- <![endif]-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>PM Dashboard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/icons/fontawesome/assets/css/font-awesome.min.css"/>
<link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/icons/glyphicons/assets/css/glyphicons_filetypes.css"/>
<link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/icons/glyphicons/assets/css/glyphicons_regular.css"/>
<link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/icons/glyphicons/assets/css/glyphicons_social.css"/>
<link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/icons/pictoicons/css/picto.css"/>
<link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/less/pages/serveStyles.css" />


</head>

<body class="loginWrapper">

<!-- Main Container Fluid -->
<div class="container-fluid ">


<!-- Content -->
<div id="content">

<div class="row innerT inner-2x mlr_minus">
<div class="col-md-4 col-md-offset-4 innerT inner-2x">
<div class="innerT inner-2x">
<div class="widget innerLR innerB margin-none">
<h3 class="innerTB text-center">Login</h3>
<div class="lock-container">
<div class=" text-center">
<a href="#" > <!--<img src="assets/images/people/100/8.jpg" alt="people" class=""/>--></a>
<form method="post">
<div class="innerAll">

<?php echo $this->ci_alerts->display('error'); ?>

<input class="form-control text-center bg-gray" type="text" value="<?php echo set_value('email_id');?>" placeholder="Email" name="email_id"/>
 <?php echo form_error('email_id'); ?>
<div class="innerB half"></div>
<input class="form-control text-center bg-gray" type="password" placeholder="Enter Password" name="password" />
 <?php echo form_error('password'); ?>
</div>
<div class="innerT half">
<button class="btn btn-primary" type="submit">Login <i class="fa fa-fw fa-unlock-alt"></i></button>
</div>

</div>

</div>
</div>
<div class="text-right innerT half">
Forgot your password? <a href="reset-password.php" class=" strong margin-none">Reset Password</a>
</div>
</div>

</div>
</div>



</div>
<!-- // Content END -->

<div class="clearfix"></div>
<!-- // Sidebar menu & content wrapper END -->

<div id="footer" class="hidden-print">

<!--  Copyright Line -->
<div class="copy">&copy;2014 - Verbat Technologies. All Rights Reserved. </div>
<!--  End Copyright Line -->

</div>

<!-- // Footer END -->

</div>
<!-- // Main Container Fluid END -->



<
</body>


</html>