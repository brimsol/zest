<div class="innerLR">
      <h1 class="pull-left">Projects &nbsp; <a href="<?php echo site_url('manage_projects/create');?>" class="btn btn-success">Add Project <i class="fa fa-plus"></i> </a> </h1>
      
      <div class="clearfix"></div>
      <div class="innerTB">
        <div class="row">
      <?php if (isset($projects) && count($projects->result())) { ?>
          <?php foreach ($projects->result() as $p) { ?>   
          <div class="col-md-6">
            <div class="widget widget-primary widget-small">
              <div class="innerAll">
                <div class="media">
                  <div class="pull-left innerR half"> <i class="icon-tv fa-4x icon-faded"></i> </div>
                  <div class="media-body ">
                    <h4><a href="<?php echo site_url('manage_projects/view');?>/<?php echo $p->project_id;?>" class="media-heading"><?php echo $p->project_name;?></a></h4>
                    <p class="margin-none text-muted"><?php echo $p->short_description;?></p>
                  </div>
                </div>
                <form class="form-horizontal" role="form">
                  <div class="widget widget-none bg-gray innerAll half margin-slim">
                    <div class="row">
                      <label class="col-sm-2 control-label text-left">Progress:</label>
                      <div class="col-md-4 col-sm-6 col-xs-10 innerT half">
                        <div class="progress progress-mini">
                          <div class="progress-bar progress-bar-primary" style="width: <?php echo $p->project_progress;?>%;"></div>
                        </div>
                      </div>
                      <label class="control-label text-left strong text-normal"><?php echo $p->project_progress;?> &#37;</label>
                    </div>
                  </div>
                  <div class="widget widget-none bg-gray innerAll half margin-slim">
                    <div class="row">
                      <label class="col-sm-2 control-label text-left padding-top-none">Type:</label>
                      <div class="col-md-4 col-sm-6 col-xs-10 strong"> <?php echo $p->project_type_name;?> </div>
                    </div>
                  </div>
                  <div class="widget widget-none bg-gray innerAll half margin-slim">
                    <div class="row">
                      <label class="col-sm-2 control-label text-left">Client:</label>
                      <div class="col-md-4 col-sm-6 col-xs-10">
                        <p class="lead margin-none"><?php echo $p->client_name;?> <span class="text-small text-muted-dark strong">(<?php echo $p->client_country;?>)</span> </p>
                      </div>
                    </div>
                  </div>
                  <div class="widget widget-none bg-gray innerAll half margin-slim">
                    <div class="row">
                      <label class="col-sm-2 control-label text-left innerT">Assigned:</label>
                      <div class="col-md-4 col-sm-6 col-xs-10"> 
                          <?php  $profile_images = $p->profile_images; $profile_images_array =   explode( ',', $profile_images ); ?>
                          <?php if(count($profile_images_array)>0){?>
                          <?php foreach ($profile_images_array as $key=>$value){ ?>
                         <img src="<?php echo base_url($this->config->item('IMAGES_UPLOAD_PATH')); ?>/<?php echo $value;?>" class="img-circle" style="width:40px;"> 
                          
                          <?php } } ?>
                          
                         
                      
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <?php } ?>   
            <?php } else { echo '<div class="alert alert-danger">No Records Found !!!</div>';}  ?>
   
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
    </div>