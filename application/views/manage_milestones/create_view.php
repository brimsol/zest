<div class="innerLR">
      <h1 class="">Update Milestone</h1>
      <div class="innerTB">
        
        <div class="row">
        <div class="col-lg-12">
        	<div class="widget innerAll half widget-primary widget-small">
            
                    <form class="form-horizontal form_padtop" method="post">
            
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="">Milestone Name</label>
                    <div class="col-sm-4">
                        <input type="text"  name="milestone_name" class="form-control" value="<?php echo set_value('milestone_name');?>">
                        <input type="hidden"  name="project_id" class="form-control" value="<?php echo $project_id;?>">
                         <?php echo form_error('milestone_name'); ?>
                    </div>
                </div>
                
                
                
		<div class="form-group">
                    <label class="col-sm-2 control-label" for="to">Priority</label>
                    <div class="col-sm-4">
                    	 <select class="form-control" name="milestone_priority" type="text" id="department">
                             <option value="">Select</option>
                              
                                    <?php if(count($this->config->item('PRIORIY'))){
                                
                                foreach($this->config->item('PRIORIY') as $key=>$value){ ?>
                                    
                                    <option value="<?php echo $key;?>"  <?php if(set_value('milestone_priority') == $key){echo "selected='true'";}?>><?php echo $value;?></option>
                               
                                <?php } }?>
                                </select>
                         <?php echo form_error('milestone_priority'); ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for=""></label>
                    <div class="col-sm-4">
                    	<input type="submit" class="btn btn-primary" value="Submit">
                        <a href="#" class="btn btn-inverse">Cancel</a>
                    </div>
                </div>
                
                <div class="clearfix"></div>
                
            </form>    
                
            </div><!--widget-->
        </div>
        </div>
        
    </div>
</div>