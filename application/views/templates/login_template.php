<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if IE 7]> <html class="ie lt-ie9 lt-ie8 paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if IE 8]> <html class="ie lt-ie9 paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if gt IE 8]> <html class="ie paceSimple sidebar sidebar-fusion"> <![endif]-->
<!--[if !IE]><!-->
<html class="paceSimple">
    <!-- <![endif]-->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <title<?php
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
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/jquery-ui/css/jquery-ui.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/calendar_fullcalendar/css/fullcalendar.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/charts_easy_pie/css/jquery.easy-pie-chart.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/core_prettyprint/css/prettify.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_editors_wysihtml5/css/bootstrap-wysihtml5-0.0.2.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_bootstrap-datepicker/css/bootstrap-datepicker.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_bootstrap-select/css/bootstrap-select.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_bootstrap-switch/css/bootstrap-switch.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_bootstrap-timepicker/css/bootstrap-timepicker.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_colorpicker-farbtastic/css/farbtastic.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_jasny-fileupload/css/fileupload.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_multiselect/css/multi-select.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_select2/css/select2.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_file_dropzone/css/dropzone.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_file_plupload/jquery.plupload.queue/css/jquery.plupload.queue.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/maps_vector/css/elements.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/maps_vector/css/jquery-jvectormap-1.1.1.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/maps_vector/css/jquery-jvectormap-1.2.2.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/media_blueimp/css/blueimp-gallery.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/media_image-crop/css/jquery.Jcrop.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/media_owl-carousel/owl.carousel.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/media_owl-carousel/owl.theme.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/media_prettyphoto/css/prettyPhoto.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/admin_notifications_gritter/css/jquery.gritter.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/notifications_notyfy/css/jquery.notyfy.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/notifications_notyfy/css/notyfy.theme.default.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/other_page-tour/css/pageguide.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/tables_datatables/extras/ColReorder/media/css/ColReorder.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/tables_datatables/extras/ColVis/media/css/ColVis.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/tables_datatables/extras/TableTools/media/css/TableTools.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/tables_responsive/css/footable.core.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/ui_sliders_range_jqrangeslider/css/iThing.css"/>
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/less/pages/serveStyles.css" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/core_ajaxify_loadscript/script.min.js"></script>
        <script>var App = {};</script>
        <script data-id="App.Scripts">
            App.Scripts = {
                /* CORE scripts always load first; */
                core: [
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/jquery/jquery.min.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/modernizr/modernizr.js'
                ],
                /* PLUGINS_DEPENDENCY always load after CORE but before PLUGINS; */
                plugins_dependency: [
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/bootstrap/js/bootstrap.min.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/jquery/jquery-migrate.min.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/charts_flot/jquery.flot.js'
                ],
                /* PLUGINS always load after CORE and PLUGINS_DEPENDENCY, but before the BUNDLE / initialization scripts; */
                plugins: [
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/core_ajaxify_davis/davis.min.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/core_ajaxify_lazyjaxdavis/jquery.lazyjaxdavis.min.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/core_preload/pace.min.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/core_nicescroll/jquery.nicescroll.min.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/core_breakpoints/breakpoints.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/charts_flot/jquery.flot.resize.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/charts_flot/plugins/jquery.flot.tooltip.min.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/charts_flot/flotcharts.common.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_bootstrap-select/js/bootstrap-select.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_bootstrap-datepicker/js/bootstrap-datepicker.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/ui_modals/bootbox.min.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/admin_notifications_gritter/js/jquery.gritter.min.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/core_less-js/less.min.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/charts_flot/excanvas.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/core_browser/ie/ie.prototype.polyfill.js'
                ],
                /* The initialization scripts always load last and are automatically and dynamically loaded when AJAX navigation is enabled; */
                bundle: [
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/core_ajaxify/ajaxify.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/core_preload/preload.pace.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/charts_flot/flotchart-mixed-1.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/forms_elements_fuelux-checkbox/fuelux-checkbox.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/menus/sidebar.main.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/menus/sidebar.collapse.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/forms_elements_bootstrap-select/bootstrap-select.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/forms_elements_bootstrap-datepicker/bootstrap-datepicker.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/ui_modals/modals.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/admin_notifications_gritter/gritter.js',
                    '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/core/core.js',
                ]

            };
        </script>
        <script>
            $script(App.Scripts.core, 'core');

            $script.ready(['core'], function() {
                $script(App.Scripts.plugins_dependency, 'plugins_dependency');
            });
            $script.ready(['core', 'plugins_dependency'], function() {
                $script(App.Scripts.plugins, 'plugins');
            });
            $script.ready(['core', 'plugins_dependency', 'plugins'], function() {
                $script(App.Scripts.bundle, 'bundle');
            });
        </script>
        <script>if (/*@cc_on!@*/false && document.documentMode === 10) {
                document.documentElement.className += ' ie ie10';
            }</script>
    </head>

    <body class="loginWrapper">

        <!-- Main Container Fluid -->
        <div class="container-fluid menu-hidden">


            <!-- Content -->
            <div id="content">

                <div class="row innerT inner-2x mlr_minus">
                    <div class="col-md-4 col-md-offset-4 innerT inner-2x">
                        <div class="innerT inner-2x">
                            <div class="widget innerLR innerB margin-none">
                                <h3 class="innerTB text-center">Login</h3>
                                <div class="lock-container">
                                    <div class=" text-center">
                                        <a href="#" > <img src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/images/people/100/8.jpg" alt="people" class=""/></a>

                                        <div class="innerAll">
                                            <input class="form-control text-center bg-gray" type="text" placeholder="Username"/>
                                            <div class="innerB half"></div>
                                            <input class="form-control text-center bg-gray" type="password" placeholder="Enter Password"/>
                                        </div>
                                        <div class="innerT half">
                                            <a href="<?php echo site_url();?>manage_roles" class="btn btn-primary">Login <i class="fa fa-fw fa-unlock-alt"></i></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="text-right innerT half">
                                Forgot your password? <a href="#" class=" strong margin-none">Reset Password</a>
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



        <script data-id="App.Config">
            var basePath = '',
                    commonPath = '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/',
                    rootPath = '',
                    DEV = false,
                    componentsPath = '<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/';

            var primaryColor = '#f04848',
                    dangerColor = '#b55151',
                    successColor = '#609450',
                    infoColor = '#4a8bc2',
                    warningColor = '#ab7a4b',
                    inverseColor = '#45484d';

            var themerPrimaryColor = primaryColor;

            App.Config = {
                ajaxify_menu_selectors: ['#menu'],
                ajaxify_layout_app: false};
        </script>

        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/library/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/core_nicescroll/jquery.nicescroll.min.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/core_breakpoints/breakpoints.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/core_preload/pace.min.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/core_preload/preload.pace.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/forms_elements_bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/forms_elements_bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/ui_modals/bootbox.min.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/ui_modals/modals.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/plugins/admin_notifications_gritter/js/jquery.gritter.min.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/admin_notifications_gritter/gritter.js"></script>
        <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/components/core/core.js"></script>
    </body>


</html>