<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 3.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8">
    <title>Zest | Hope for the Best</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css">
    <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- END PAGE LEVEL PLUGIN STYLES -->

    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="/assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
    <link href="/assets/global/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/layout.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
    <link href="/assets/css/custom.css" rel="stylesheet" type="text/css">
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="/assets/favicon.ico">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body class="page-header-menu-fixed">
<!-- BEGIN HEADER -->
<div class="page-header">
    <!-- BEGIN HEADER TOP -->
    <div class="page-header-top">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="index.html"><img src="/assets/img/logo-tisa.jpg" alt="logo" class="logo-default"></a>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler"></a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">

                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-circle" src="/assets/img/avatar9.jpg">
                            <span
                                class="username username-hide-mobile"><?php echo $this->session->userdata('first_name'); ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">

                            <!--<li>
                                <a href="extra_lock.html">
                                <i class="icon-lock"></i> Lock Screen </a>
                            </li>-->
                            <li>
                                <a href="<?php echo site_url('auth/logout'); ?>">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END HEADER TOP -->
    <!-- BEGIN HEADER MENU -->
    <div class="page-header-menu">
        <div class="container-fluid">
            <!-- BEGIN HEADER SEARCH BOX -->
            <form class="search-form" action="extra_search.html" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
                </div>
            </form>
            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN MEGA MENU -->
            <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
            <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
            <div class="hor-menu ">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo site_url('dashboard'); ?>">Dashboard</a>
                    </li>
                    <li class="">
                        <a href="<?php echo site_url('schools'); ?>">Schools</a>
                    </li>
                    <li class="">
                        <a href="<?php echo site_url('students'); ?>">Students</a>
                    </li>
                    <li class="">
                        <a href="#">Reports</a>
                    </li>
                    <li class="">
                        <a href="#">Accounts</a>
                    </li>

                    <!--<li class="menu-dropdown">
                        <a href="angularjs" target="_blank" class="tooltips" data-container="body" data-placement="bottom" data-html="true" data-original-title="AngularJS version demo">
                        AngularJS Version </a>
                    </li>-->
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">

    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container-fluid">
            <!-- BEGIN PAGE BREADCRUMB -->
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-blue-hoki"></i>
                        <span class="caption-subject font-blue-hoki bold uppercase">Add School</span>
                        <span class="caption-helper"></span>
                    </div>

                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form class="horizontal-form" action="" method="post">
                        <div class="form-body">
                            <!-- <h3 class="form-section">Person Info</h3>-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">School</label>
                                        <input type="text" placeholder="School Name" class="form-control"
                                               name="school_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Principal</label>
                                        <input type="text" placeholder="Principal Name" class="form-control"
                                               name="principal_name" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Place</label>
                                        <input type="text" placeholder="Place" class="form-control" name="place"
                                               required>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label">State</label>
                                        <select class="form-control" name="state_id">
                                            <option value="1">Kerala</option>
                                            <option value="2">Tamil Nadu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">District</label>
                                        <select class="form-control" name="district_id">
                                            <option value="1">Trivandrum</option>
                                            <option value="2">Other</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input type="text" placeholder="Email" class="form-control" name="email" email>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Contact Person</label>
                                        <input type="text" placeholder="Contact Person Name" class="form-control" name="contact_person">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Contact Number</label>
                                        <input type="text" placeholder="Contact Number" class="form-control" name="contact_number">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        <textarea placeholder="Address" class="form-control" name="address">
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Other Details</label>
                                        <textarea placeholder="Address" class="form-control" name="details" >
                                        </textarea>
                                    </div>
                                    
                                    <div class="pull-right">
                                        <button class="btn default" type="button">Cancel</button>
                                        <button class="btn blue" type="submit"><i class="fa fa-check"></i> Save</button>
                                    </div>

                                </div>


                    </form>

                </div>


            </div>

            <!-- END FORM-->
        </div>
    </div>
    <!-- END PAGE CONTENT INNER -->
</div>
</div>
<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- BEGIN FOOTER -->

<div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/assets/global/plugins/respond.min.js"></script>
<script src="/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"
        type="text/javascript"></script>
<script src="/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/assets/scripts/layout.js" type="text/javascript"></script>
<script src="/assets/scripts/demo.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core componets
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>