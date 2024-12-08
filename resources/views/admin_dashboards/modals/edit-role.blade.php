<!-- The Modal -->
<div class="modal edit-role-modal" id="edit-role">
    <div class="modal-dialog" style="border:0px solid red;width:500px;padding:10px;">
        <div class="modal-content">
            <div style="float: right;margin:5px;">
                <!--<h6>Add Role</h6>-->
                <!--<button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 13px;width:80px;float:right;">Close</button>-->
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="margin-top:-20px;">
                <h5 class="text muted"><b>Edit Role</b></h5>
                <form class="edit-role-form">
                    <input type="hidden" name="role_id" class="role_id">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control name" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Notes</label>
                        <input type="text" name="notes" class="form-control notes" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <a href="#" id="edit-role-submit" class="btn btn-primary text-white" style="font-size: 13px;">Submit</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 13px;">Close</button>
                </form>
                <!---body end---->
            </div>
        </div>
    </div>
</div>
