<!-- The Modal -->
<div class="modal add-role-modal" id="add-role">
    <div class="modal-dialog" style="border:0px solid red;width:500px;padding:10px;">
        <div class="modal-content">
            <div style="float: right;margin:5px;">
                <!--<h6>Add Role</h6>-->
                <!--<button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 13px;width:80px;float:right;">Close</button>-->
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="margin-top:-20px;">
                <h5 class="text muted"><b>Add Role</b></h5>
                <form class="add-role-form">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control name" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <label for="role_key" class="form-label">Role Key</label>
                        <input type="text" name="role_key" class="form-control role_key" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <label for="notes" class="form-label">Notes</label>
                        <input type="text" name="notes" class="form-control notes" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <a class="btn btn-primary text-white" id="add-role-submit" style="font-size: 13px;">Submit</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 13px;">Close</button>
                </form>
                <!---body end---->
            </div>
        </div>
    </div>
</div>
