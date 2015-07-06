<div class="portlet light">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Schools</span>
        </div>

    </div>
    <div class="portlet-body">
        <div class="table-responsive">
            <?php if (isset($table_rows) && count($table_rows)) { ?>
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
                        Pricipal
                    </th>
                    <th>
                        Place
                    </th>
                    <th>
                        Table heading
                    </th>
                    <th>
                        Table heading
                    </th>
                    <th>
                        Table heading
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        Table cell
                    </td>
                    <td>
                        Table cell
                    </td>
                    <td>
                        Table cell
                    </td>
                    <td>
                        Table cell
                    </td>
                    <td>
                        Table cell
                    </td>
                    <td>
                        Table cell
                    </td>
                </tr>

                </tbody>
            </table>
            <?php } else { echo '<div class="alert alert-danger">No Records Found !!!</div>';}  ?>
        </div>
    </div>
</div>


