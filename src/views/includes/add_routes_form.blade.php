<div class="modal fade" id="addRoutesModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <div style="font-size: 16px; font-weight: bold;">
                    <i class="fa fa-filter"></i>
                    <span style="font-size: 18px; margin-left: 5px;">Add Route</span>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <form action="{{ route('lui-add-routes') }}" class="form-horizontal" role="form" method="POST">

                        {{ csrf_field() }}

                        <div class="form-group required">
                            <label class="col-md-4 control-label">Method Type
                                <sup>*</sup></label>

                            <div class="col-md-6">
                                <select type="text" name="method_type" placeholder="Action Type" class="form-control">
                                    <option value="GET">GET</option>
                                    <option value="POST">POST</option>
                                    <option value="PUT">PUT</option>
                                    <option value="DELETE">DELETE</option>
                                    <option value="PATCH">PATCH</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-md-4 control-label">URL
                                <sup>*</sup></label>

                            <div class="col-md-6">
                                <input type="text" name="url" placeholder="/user/{user_id}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-md-4 control-label">Uses
                                <sup>*</sup></label>

                            <div class="col-md-6">
                                <input type="text" name="action" placeholder="controller@action"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-md-4 control-label">As
                                <sup>*</sup></label>

                            <div class="col-md-6">
                                <input type="text" name="as" placeholder="Alias" class="form-control">
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-md-4 control-label">Middleware
                                <sup>*</sup></label>

                            <div class="col-md-6">
                                <input type="text" name="middleware" placeholder="auth | guest (Optional)"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-md-4 control-label">Group Name</label>

                            <div class="col-md-6">
                                <input type="text" name="group" placeholder="Group Name (Optional)"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>

                            <div class="col-md-8">
                                <button class="btn btn-primary" id="authSignupButton">
                                    Add Route
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="form-group required">
                        <label class="col-md-4 control-label"></label>

                        <div class="col-md-6">
                            <div class="errors text-danger text-left"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>