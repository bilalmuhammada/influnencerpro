<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog" style="border:0px solid red;width:500px;padding:10px;">
        <div class="modal-content">
            <div style="float: right;margin:5px;">
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="margin-top:-20px;">
                <h5 class="text muted text-center"><b>Add User</b> </h5>
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder=" Name" name="name" id="name" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder=" Email" name="email" id="email" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder=" Mobile" name="mobile" id="mobile" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder=" Country" name="country" id="country" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder=" City" name="city" id="city" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder=" Nationality" name="nationality" id="nationality" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder=" Age" name="age" id="age" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="role" id="role" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                            <option value="" style="padding:5px;">Select Role</option>
                            <option value="" style="padding:5px;">Buyer</option>
                            <option value="" style="padding:5px;">Seller</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="status" id="status" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                            <option value="" style="padding:5px;">Select Status</option>
                            <option value="" style="padding:5px;">Active</option>
                            <option value="" style="padding:5px;">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder=" password" name="pwd" id="pwd" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <div class="form-group">
                        <textarea name="desc" id="desc" cols="30" rows="10" class="form-control" placeholder=" Description" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;height:70px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary " style="font-size: 13px;">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 13px;">Close</button>

                </form>
                <!---body end---->
            </div>
        </div>
    </div>
</div>