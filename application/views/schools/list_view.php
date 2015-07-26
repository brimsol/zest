<div class="portlet light">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Schools</span>
        </div>
        <a href="<?php echo site_url('schools/create');?>" class="btn green pull-right" type="button"><i class="fa fa-cogs"></i> Add School</a>
    </div>
    <div class="portlet-body">
        <div class="table-responsive">
            <?php if (isset($schools) && count($schools)) { ?>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Principal
                    </th>
                    <th>
                        Place
                    </th>
                    <th>
                        Contact Number
                    </th>
                    <th>
                        Action
                    </th>

                </tr>
                </thead>
                <tbody>
                <?php $c = 1;?>
                <?php foreach ($schools as $school) {?>
                <tr>

                    <td>
                        <?php echo $c;?>
                    </td>
                    <td>
                        <?php  echo $school->school_name;?>
                    </td>
                    <td>
                        <?php  echo $school->principal_name;?>
                    </td>
                    <td>
                        <?php  echo $school->place;?>
                    </td>
                    <td>
                        <?php  echo $school->contact_number;?>
                    </td>
                    <td>
                        <a href="<?php echo site_url('schools/update/'.$school->id);?>" class="btn btn-info btn-sm btn-icon" title="Edit"><i class="fa fa-edit"></i></a>

                        <a href="<?php echo site_url('schools/delete/'.$school->id);?>" onclick = "return confirm('Are you sure ?');" class="btn btn-danger btn-sm btn-icon" title="Delete"><i class="fa fa-trash"></i></a>
                    </td>

                </tr>
                    <?php $c++;?>
             <?php } ?>
                </tbody>
            </table>
            <?php } else { echo '<div class="alert alert-danger">No Records Found !!!</div>';}  ?>
        </div>
    </div>
</div>


