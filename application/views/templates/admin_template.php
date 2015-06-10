<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if IE 7]> <html class="ie lt-ie9 lt-ie8 paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if IE 8]> <html class="ie lt-ie9 paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if gt IE 8]> <html class="ie paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if !IE]><!-->
<html class="sidebar sidebar-fusion">
    <!-- <![endif]-->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <title><?php
            if (isset($title)) {
                echo $title;
            } else {
                echo $this->config->item('SITE_NAME');
            }
            ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/icons/fontawesome/assets/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/icons/glyphicons/assets/css/glyphicons_filetypes.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/icons/glyphicons/assets/css/glyphicons_regular.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/icons/glyphicons/assets/css/glyphicons_social.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/icons/pictoicons/css/picto.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/calendar_fullcalendar/css/fullcalendar.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_bootstrap-datepicker/css/bootstrap-datepicker.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_bootstrap-timepicker/css/bootstrap-timepicker.css"/> 
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/media_owl-carousel/owl.carousel.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/media_owl-carousel/owl.theme.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/less/pages/serveStyles.css" />
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/multi-select/css/multi-select.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_jasny-fileupload/css/fileupload.css"/>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script>if (/*@cc_on!@*/false && document.documentMode === 10) {
                document.documentElement.className += ' ie ie10';
            }</script>

        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/modernizr/modernizr.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/jquery/jquery-migrate.min.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/charts_flot/jquery.flot.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_validator/jquery-validation/dist/jquery.validate.min.js"></script>

        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/charts_flot/plugins/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/charts_flot/flotcharts.common.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/charts_flot/flotchart-mixed-1.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/forms_elements_bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/forms_elements_bootstrap-timepicker/bootstrap-timepicker.js"></script>
        <!--<script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/calendar_fullcalendar/js/fullcalendar.min.js"></script>-->
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/calendar/calendar.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/multi-select/js/jquery.multi-select.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/multi-select/js/jquery.quicksearch.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_jasny-fileupload/js/bootstrap-fileupload.js"></script>

        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/calendar/js/jquery-ui.js"></script>  
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/calendar/js/fullcalendar.js"></script> 
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/calendar/js/gcal.js"></script> 
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/calendar/js/jquery.calendar.js"></script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
         <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/datepicker/css/datetime.css" type="text/css" media="all" />

        <script type="text/javascript" src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/datepicker/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/datepicker/js/jquery-ui-timepicker-addon.js"></script>
        <script type="text/javascript" src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/datepicker/js/jquery-ui-sliderAccess.js"></script>

        <style>
            .error {

                color: rgb(255, 0, 0);
                display: inline-block;
                padding: 1px;
                width: 100%;
            }
        </style>

    </head>

    <body class="">
        <!-- Main Container Fluid -->
        <div class="container-fluid"> 

            <!-- Sidebar Menu -->
            <div id="menu" class="hidden-print hidden-xs">
                <div id="sidebar-fusion-wrapper"> 
                  <!--        <input class="form-control search" type="text" placeholder="Search...">-->
                    <!--  <div class="search-wrapper">
                       <div class="input-group">
                         <input type="text" class="form-control" placeholder="Search">
                         <span class="input-group-btn">
                         <button class="btn btn-inverse" type="button"> <i class="fa fa-search"></i> </button>
                         </span> </div>
                      
                     </div>--> 
                    <!--<div id="logoWrapper">
                        <div class="media"> <a href="#" class="pull-left"><img src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/images/people/50/2.jpg" alt="" class="img-circle" ></a>
                            <div class="media-body"> <a href="#" class="name">Adrian D.</a>
                                <p><i class="fa fa-fw fa-circle-o text-success"></i> Online</p>
                            </div>
                            <div class="clearfix"></div>
                            <a href="#" class="btn btn-xs btn-inverse "><i class="fa fa-user"></i></a> <a href="#" class="btn btn-xs btn-inverse "><i class="fa fa-clock-o"></i></a> <a href="#" class="btn btn-xs btn-inverse "><i class="fa fa-envelope"></i></a> </div>

                    </div>-->
                    <ul class="menu list-unstyled">
                        <?php
                        if (check_permission('overview_view')) {
                            ?>
                            <li class="<?php if (isset($menu) && $menu == 'dashboard') {
                                echo "active";
                            } ?>"> <a href="<?php echo site_url(); ?>" class="index"> <i class="fa fa-home"></i> <span>Overview</span> </a> </li>
                            <?php
                        }
                        if (check_permission('manage_projects_view')) {
                            ?>
                            <li class="<?php if (isset($menu) && $menu == 'manage_projects') {
                            echo "active";
                        } ?>"> <a href="<?php echo site_url('manage_projects'); ?>"> <i class="fa fa-th-large"></i> <span>Projects Grid</span> </a> </li>
                            <?php
                        }
                        if (check_permission('manage_task_view')) {
                            ?>
                            <li class="<?php if (isset($menu) && $menu == 'mytasks') {
                            echo "active";
                        } ?>"> <a href="<?php echo site_url('mytasks'); ?>"> <i class="fa fa-ticket"></i> <span>My Tasks</span> </a> </li>

                                <?php
                            }
                            if (check_permission('manage_roles_view')) {
                                ?>
                            <li class="<?php if (isset($menu) && $menu == 'manage_roles') {
                                echo "active";
                            } ?>" > <a href="<?php echo site_url('manage_roles'); ?>" > <i class="fa fa-user"></i> <span> Manage Roles</span> </a>
                                <?php
                            }
                            if (check_permission('manage_users_view')) {
                                ?>
                            <li class="<?php if (isset($menu) && $menu == 'manage_users') {
                                    echo "active";
                                } ?>" > <a href="<?php echo site_url('manage_users'); ?>" > <i class="fa fa-user"></i> <span> Manage Users</span> </a>            
    
                            <!--
                           <ul class="collapse" id="menu-user-manage">
                             <li class=""> <a href="<?php //echo site_url().'manage_roles'; ?>" class="no-ajaxify"> <i class="fa fa-lock"></i> <span>Task Wise</span> </a> </li>
                            <li class=""> <a href="#" class="no-ajaxify"> <i class="fa fa-pencil"></i> <span>User Wise</span> </a> </li>
                            <li class=""> <a href="#" class="no-ajaxify"> <i class="fa fa-pencil"></i> <span>Project Wise</span> </a> </li>
                          </ul>
                            -->
                        </li>
                        <?php
}
if (check_permission('manage_calendar_view')) {
?>
                        <li class="<?php if (isset($menu) && $menu == 'calendar') {
    echo "active";
} ?>" > <a href="<?php echo site_url('calendar'); ?>" class="calendar"> <i class="fa fa-calendar"></i> <span>Calendar</span> </a> </li>
 <?php
                            }
                            if (check_permission('manage_reports_view')) {
                                ?>                       
                        <li class="hasSubmenu"> <a href="#menu-961fc415c02658d90ce2bb9f7621a012" data-toggle="collapse"> <i class="fa fa-lock"></i> <span>Reports</span> </a>
                            <ul class="collapse" id="menu-961fc415c02658d90ce2bb9f7621a012">
                               <!-- <li class=""> <a href="#" class="no-ajaxify"> <i class="fa fa-lock"></i> <span>Task Wise</span> </a> </li>
                                -->
                                <li class=""> <a href="<?php echo site_url('manage_reports/projectwise_report');?>" class="no-ajaxify"> <i class="fa fa-pencil"></i> <span>Project Wise</span> </a> </li>
                                <li class=""> <a href="<?php echo site_url('manage_reports/userwise_report');?>" class="no-ajaxify"> <i class="fa fa-pencil"></i> <span>User Wise</span> </a> </li>
                            </ul>
                        </li>
                        <?php
                            }
                        ?>
   <?php if (check_permission('excel_import_create')) {
                                ?>
                            <li class="<?php if (isset($menu) && $menu == 'excel_import') {
                                echo "active";
                            } ?>" > <a href="<?php echo site_url('excel_import'); ?>" > <i class="fa fa-user"></i> <span> Excel Import</span> </a>
                                <?php
                            } ?>
                    </ul>
                </div>
            </div>
            <!-- // Sidebar Menu END --> 

            <!-- Content -->
            <div id="content">
                <div class="navbar hidden-print main navbar-default" role="navigation">
                    <div class="user-action user-action-btn-navbar pull-right">
                        <button class="btn btn-sm btn-navbar btn-inverse btn-stroke hidden-lg hidden-md"><i class="fa fa-bars fa-2x"></i></button>
                    </div>
                    <a href="<?php echo site_url('dashboard');?>" class="logo"> <img src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/images/logo/logo.gif" alt="Verbat" /> </a>
                    <!--<ul class="main pull-left hidden-xs ">
                        <li class="dropdown notif notifications hidden-xs"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <span class="badge badge-danger">5</span></a>
                            <ul class="dropdown-menu chat media-list">
                                <li class="media"> <a class="pull-left" href="#"><img class="media-object thumb" src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/images/people/100/15.jpg" alt="50x50" width="50" /></a>
                                    <div class="media-body"> <span class="label label-default pull-right">5 min</span>
                                        <h5 class="media-heading hidden-xs">Adrian D.</h5>
                                        <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </li>
                                <li class="media"> <a class="pull-left" href="#"><img class="media-object thumb" src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/images/people/100/16.jpg" alt="50x50" width="50" /></a>
                                    <div class="media-body"> <span class="label label-default pull-right">2 days</span>
                                        <h5 class="media-heading">Jane B.</h5>
                                        <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </li>
                                <li class="media"> <a class="pull-left" href="#"><img class="media-object thumb" src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/images/people/100/17.jpg" alt="50x50" width="50" /></a>
                                    <div class="media-body"> <span class="label label-default pull-right">3 days</span>
                                        <h5 class="media-heading">Andrew M.</h5>
                                        <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </li>
                                <li><a href="#" class="btn btn-primary"><i class="fa fa-list"></i> <span>View all messages</span></a></li>
                            </ul>
                        </li>
                        <li class="notifications"> <a href="#"><i class="fa fa-clock-o"></i> <span class="badge badge-warning">7</span></a> </li>
                        <li class="notifications"> <a href="#" ><i class="fa fa-user"></i> <span class="badge badge-info">2</span></a> </li>
                    </ul>-->
                    <ul class="main pull-right">
                         <?php
                        if (check_permission('manage_task_create') && $this->session->userdata('role_id') == 1) {
                            ?>
                        <li class="hidden-xs hidden-sm"><a href="<?php echo site_url('manage_tasks/new_task'); ?>" class="btn btn-info">Create / Update Task <i class="fa fa-fw icon-compose"></i></a></li>
                        <?php
                        }
                        ?>
                        <li class="dropdown username hidden-xs "> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/images/people/35/22.jpg" class="img-circle" alt="Profile" /> <?php echo $this->session->userdata('first_name');?> <span class="caret"></span></a>
                            <ul class="dropdown-menu pull-right">
                                <!--<li><a href="#" class="glyphicons user"><i></i> Account</a></li>
                                <li><a href="#" class="glyphicons envelope"><i></i>Messages</a></li>-->
                                <li><a href="<?php echo site_url('manage_projects'); ?>" class="glyphicons settings"><i></i>Projects</a></li>
                                <li><a href="<?php echo site_url('auth/logout'); ?>" class="glyphicons lock no-ajaxify"><i></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- // END navbar -->
                <?php /*
                  <?php echo $this->ci_alerts->display('error'); ?> <?php echo $this->ci_alerts->display('success'); ?> <?php echo $this->ci_alerts->display('warning'); ?>
                 */ ?>
<?php
if (isset($main_content)) {
    echo $main_content;
} else {

    echo $this->config->item('SITE_NAME');
}
?>
                <!------------------------//////////////////////////////--------------------->

                <!-- Dashboard Wrapper End -->

            </div>
            <!-- // Content END from header.php-->

            <div class="clearfix"></div>
            <!-- // Sidebar menu & content wrapper END -->

            <!--  <div id="footer" class="hidden-print"> 
               
           
               <div class="copy">&copy; 2014 Verbat Technologies. All Rights Reserved. </div>
               
               
             </div>-->

            <!-- // Footer END --> 

        </div>
        <!-- // Main Container Fluid END --> 


<script>

    function exportTableToCSV($table, title) {

        var $rows = $('#' + $table).find('tr:has(td,th)'),
                // Temporary delimiter characters unlikely to be typed by keyboard
                // This is to avoid accidentally splitting the actual contents
                tmpColDelim = String.fromCharCode(11), // vertical tab character
                tmpRowDelim = String.fromCharCode(0), // null character

                // actual delimiter characters for CSV format
                colDelim = '","',
                rowDelim = '"\r\n"',
                // Grab text from table into CSV formatted string
                csv = '"' + $rows.map(function(i, row) {
                    var $row = $(row),
                            $cols = $row.find('td,th');

                    return $cols.map(function(j, col) {
                        var $col = $(col),
                                text = $col.text();

                        return text.replace('"', '""'); // escape double quotes

                    }).get().join(tmpColDelim);

                }).get().join(tmpRowDelim)
                .split(tmpRowDelim).join(rowDelim)
                .split(tmpColDelim).join(colDelim) + '"',
                // Data URI
                csvData = 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv);
        Highcharts.post('<?php echo base_url(); ?>export_excel.php', {
            csv: csv,
            title: title,
        });
    }


</script>
    </body>

</html>