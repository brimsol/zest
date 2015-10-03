<h3 class="page-header">Candidates - <?php echo $school_data->school_name.' (ID: '.$school_data->school_id.') - '.$school_data->place;?>

</h3>
<div class="col-lg-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
               class="collapsed">Summary <i class="fa fa-chevron-down"></i> </a>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" aria-expanded="true" style="height: 0px;">
            <div class="panel-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </div>
        </div>
    </div>

</div>
<div class="col-lg-12">
    <div class="panel">
        <div class="form-inline">
            <div class="form-group">


                <input class="form-control" type="text" id="search_text" name="search_text" placeholder="Search anything"/>
            </div>
            <!-- <button type="button" onclick="school_filter();" class="btn btn-primary">
                 Filter
             </button>-->
            <button type="button" onclick="refresh();" class="btn btn-info">
                Clear
            </button>


        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            List
            <div class="pull-right">
                <a type="button" class="btn btn-default btn-xs" href="<?php echo site_url('admin/candidates/gen_pdf/'.$school_id);?>">
                    <i class="fa fa-download"></i> PDF
                </a>
                <a type="button" class="btn btn-default btn-xs" href="<?php echo site_url('admin/candidates/gen_excel/'.$school_id);?>">
                    <i class="fa fa-download"></i> Excel
                </a>
            </div>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive" id="school_list_table">
                <?php if (isset($candidates) && count($candidates)) { ?>
                    <table class="table table-hover" id="list_table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>ID</th>
                            <th>Mark</th>
                            <th>Award</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $c = 1; ?>
                        <?php foreach ($candidates as $cand) { ?>
                            <tr>
                                <td>
                                    <?php echo $c; ?>
                                </td>
                                <td class="table-bordered">
                                    <?php echo $cand->candidate_name; ?>
                                </td>
                                <td class="table-bordered">
                                    <?php echo $cand->candidate_class; ?>
                                </td>
                                <td class="table-bordered">
                                    <?php echo $cand->candidate_id; ?>
                                </td>
                                <td class="table-bordered">

                                </td>
                                <td class="table-bordered">

                                </td>

                                <td class="table-bordered">


                                    <a href="<?php echo site_url('admin/candidates/update/' . $cand->candidate_id.'/'.$cand->school_id); ?>"
                                       class="btn btn-primary btn-circle" title="Edit"><i class="fa fa-edit"></i></a>

                                    <a href="<?php echo site_url('admin/candidates/delete/' . $cand->candidate_id.'/'.$cand->school_id); ?>"
                                       onclick="return confirm('Are you sure ?');"
                                       class="btn btn-danger btn-circle btn-icon" title="Delete"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php $c++; ?>
                        <?php } ?>
                        </tbody>
                    </table>

                <?php } else {
                    echo '<div class="alert alert-danger">No Records Found !!!</div>';
                } ?>

            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>

