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