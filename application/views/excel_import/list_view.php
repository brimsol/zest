<div class="innerLR">
    <h1 class="pull-left">Projects &nbsp;     

    </h1>

    <form action="<?php echo site_url('manage_projects'); ?>" method="POST" class="pull-left" style="margin-top: 32px;">
        <div class="col-md-12">
        
        <select class="form-control" name="project_type" onchange="this.form.submit()">
            <option value="">All Project types</option>
            <?php foreach ($project_types->result() as $project_type) { ?>
                <option value="<?php echo $project_type->project_type_id; ?>" <?php if ($p_type == $project_type->project_type_id) {
                echo "selected='true'";
            } ?>><?php echo $project_type->project_type_name; ?></option>
<?php } ?>     

        </select>
        </div>
        </form>
    <form action="<?php echo site_url('manage_projects'); ?>" method="POST" class="pull-left" style="margin-top: 32px;">
        <div class="col-md-8">
            <input type="text" class="form-control" name="p_name" placeholder="Project Name" value="<?php echo $p_name;?>">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success" > Search<i class="fa fa-search" style="margin-left: 10px"></i></button>
            
        </div>
        
    </form>

    <?php
    if (check_permission('manage_projects_create') && $this->session->userdata('role_id') == 1) {
        ?>
        <a href="<?php echo site_url('manage_projects/create'); ?>" class="btn btn-success pull-right" style="margin-top: 32px;">Add Project <i class="fa fa-plus"></i> </a> 
        <?php
    }
    ?>

    <div class="clearfix"></div>
    <div class="innerTB">

      
        
        <div class="row">
<?php if (isset($projects) && count($projects->result())) { ?>
    <?php foreach ($projects->result() as $p) { ?>  
             <?php 
       if($p->project_progress_color == "progress-bar-primary"){
           
          $widget = "widget-primary"; 
           
       }else if($p->project_progress_color == "progress-bar-success"){
           
           $widget = "widget-success"; 
           
       }else{
           
           $widget = "widget-none"; 
       }?>
                    <div class="col-md-6">
                        <div class="widget <?php echo $widget;?>  widget-small">
                            <div class="innerAll">
                                <div class="media">
                                    <div class="pull-left innerR half"> <i class="icon-tv fa-4x icon-faded"></i> </div>
                                    <div class="media-body  col-md-7">
                                        <h4><a href="<?php echo site_url('manage_projects/view'); ?>/<?php echo $p->project_id; ?>" class="media-heading"><?php echo $p->project_name; ?></a>
                                            
                                              
                                            
                                            <?php
                                            if (check_permission('manage_projects_create') && $this->session->userdata('role_id') == 1) {
                                                ?>
                                                <a href="<?php echo site_url('manage_projects/update'); ?>/<?php echo $p->project_id; ?>" class="martpsame"><i class="fa  icon-belt"></i></a>
                                                <?php
                                            }
                                            ?>
                                        </h4>
                                        
                                        <p class="margin-none text-muted"><?php echo $p->short_description; ?></p>
                                    </div>
                                    <div class="col-md-2 col-sm-6 col-xs-10 strong lefttpaddclear rightpaddclear pull-right">  
                                                <?php
                                                if ($p->project_mode == 'BL') {
                                                    $text = 'Billable';
                                                    $cls = 'billable';
                                                } else {
                                                     $text = 'Non-Billable';
                                                    $cls = 'non-billable';
                                                }
                                                ?>
                                                <div  class="mode <?php echo $cls; ?> pull-right lefttpaddclear rightpaddclear">
                                                    <?php echo $text; ?>
                                                </div>
                                            </div>
                                </div>
                                <form class="form-horizontal" role="form">
                                    <div class="widget widget-none bg-gray innerAll half margin-slim">
                                        <div class="row">
                                            <label class="col-sm-2 control-label text-left">Progress:</label>
                                            <div class="col-md-4 col-sm-6 col-xs-10 innerT half">
                                                <div class="progress progress-mini">
                                                    <div class="progress-bar <?php echo $p->project_progress_color; ?>" style="width: <?php echo $p->project_progress; ?>%;"></div>
                                                </div>
                                            </div>
                                            <label class="control-label text-left strong text-normal"><?php echo $p->project_progress; ?> &#37;</label>
                                        </div>
                                    </div>
                                    <div class="widget widget-none bg-gray innerAll half margin-slim">
                                        <div class="row">
                                            <label class="col-sm-2 control-label text-left padding-top-none">Type:</label>
                                            <div class="col-md-5 col-sm-6 col-xs-10 strong"> <?php echo $p->project_type_name; ?> </div>
                                           
                                          
                                        </div>
                                    </div>
                                    <div class="widget widget-none bg-gray innerAll half margin-slim">
                                        <div class="row">
                                            <label class="col-sm-2 control-label text-left">Client:</label>
                                            <div class="col-md-4 col-sm-6 col-xs-10">
                                                <p class="lead margin-none"><?php echo $p->client_name; ?> <span class="text-small text-muted-dark strong">(<?php echo $p->client_country; ?>)</span> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget widget-none bg-gray innerAll half margin-slim">
                                        <div class="row">
                                            <label class="col-sm-2 control-label text-left innerT">Assigned:</label>
                                            <div class="col-md-4 col-sm-6 col-xs-10"> 
                                                <?php
                                                $profile_images = $p->profile_images;
                                                $profile_images_array = explode(',', $profile_images);
                                                $profile_name_array = explode(',', $p->user_name);
                                                $j = 0;
                                                ?>

                                                <?php if (count($profile_images_array) > 0) { ?>
                                                    <?php foreach ($profile_images_array as $key => $value) {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>/uploads/images/<?php echo trim($value); ?>" class="img-circle" style="width:40px;" title="<?php echo $profile_name_array[$j] ?>  " > 

                                                        <?php
                                                        $j++;
                                                    }
                                                }
                                                ?>



                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>   
            <?php
            } else {
                echo '<div class="alert alert-danger">No Records Found !!!</div>';
            }
            ?>

        </div>
    </div>
    <!--<ul class="pagination pagination-centered margin-none">
      <li class="disabled"><a href="#">&laquo;</a></li>
      <li class="active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul>-->
    
    <?php echo $links;?>
</div>