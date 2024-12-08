<!-- The Modal -->
<div class="modal" id="editUser">
    <div class="modal-dialog" style="border:0px solid red;width:500px;padding:10px;">
        <div class="modal-content">
            <div style="float: right;margin:5px;">
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="margin-top:-20px;">
                <h5 class="text muted"><b>Edit User</b> </h5>
                <form action="#">
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label" style="float: left;">Name</label>
                        <input type="text" class="form-control" value="Edoardo Rossi" name="name" id="name" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label" style="float: left;">Email</label>
                        <input type="text" class="form-control" value="Edoardo@gmail.com" name="email" id="email" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label" style="float: left;">Mobile</label>
                        <input type="text" class="form-control" value="+945577880" name="mobile" id="mobile" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label" style="float: left;">Country</label>
                        <input type="text" class="form-control" value="Dubai" name="country" id="country" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label" style="float: left;">City</label>
                        <input type="text" class="form-control" value="Ajman" name="city" id="city" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label" style="float: left;">Nationality</label>
                        <input type="text" class="form-control" value="Dubai" name="nationality" id="nationality" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label" style="float: left;">Age</label>
                        <input type="text" class="form-control" value="25" name="age" id="age" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label" style="float: left;">Saller Type</label>
                        <select class="form-control" name="role" id="role" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                            <option value="" style="padding:5px;">Select Role</option>
                            <option value="" style="padding:5px;">Buyer</option>
                            <option value="" style="padding:5px;" selected>Seller</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label" style="float: left;">Status</label>
                        <select class="form-control" name="status" id="status" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                            <option value="" style="padding:5px;">Select Status</option>
                            <option value="" style="padding:5px;" selected>Active</option>
                            <option value="" style="padding:5px;">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label" style="float: left;">Password</label>
                        <input type="password" class="form-control" value="*******" name="pwd" id="pwd" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label" style="float: left;">Description</label>
                        <textarea name="" id="desc" cols="30" rows="10" name="desc" class="form-control" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;height:70px;">SILVER Package sale by the user Abdul majeed kk and 543774123</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary " style="font-size: 13px;">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 13px;">Close</button>

                </form>
                <!---body end---->
            </div>
        </div>
    </div>
</div>