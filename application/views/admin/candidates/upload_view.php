<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h2 class="page-header">Upload
   
</h2>
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
           Upload Excel
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" class="form-horizontal"  enctype="multipart/form-data">
						<div class="form-group">
                            <label class="col-sm-2 control-label form-label">School Name</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="school_id" disabled>
                                    <option value="" <?php echo  set_select('school_id', ''); ?>>Select School</option>

                                    <?php if(count($all_schools) > 0){foreach ($all_schools as $school) {?>

                                        <option value="<?php echo $school->school_id;?>"  <?php echo  set_select('school_id', $school->school_id,is_same($school->school_id, $school_id)); ?>><?php echo $school->school_name;?> - (ID:<?php echo $school->school_id;?>) - <?php echo $school->place;?></option>

                                    <?php } }?>

                                </select>
                                <?php echo form_error('school_id'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label form-label">Candidate Excel</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="userfile">
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-success"  onclick="return confirm('Are you sure ?');" type="submit">Upload</button>
                                <a class="btn btn-danger" href="<?php echo site_url('admin/candidates');?>">Cancel</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>