            <!-- Modal -->

            <style>
                .modal-title{
        margin-left: 128px;
        color: blue;
    }
    .form-control:hover{
    border-color: blue !important;
    
}
.form-control:focus{
    border-color: blue !important;
    
}
.form-control{
    border-color: #997045;
    /* text-align: center; */
}
            </style>
            <div class="modal fade" id="editcategory" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="" id="edit-category-form">
                                <input type="hidden" name="category_id" class="category_id">
                                <div class="form-group form-focus">
                                    
                                    <input type="text" class="form-control name floating" name="name" id="exampleInputUsername1" autocomplete="off" value="Ads">
                                    <label for="exampleInputUsername1" class="form-label inner_label focus-label">Category Name</label>
                                </div>
                                <div class="form-group form-focus">
                                   
                                    <input type="text" class="form-control slug floating" name="slug" id="exampleInputUsername1" autocomplete="off" value="/category/adz">
                                    <label for="exampleInputUsername1" class="form-label inner_label focus-label">Category #</label>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label" class="form-control">Category Image</label><br />
                                    <img class="wd-80 ht-80 rounded-circle image" style="margin-left: 180px; margin-bottom:5px;">
                                    <br />
                                    <input type="file" class="form-control" id="myDropify"  accept="image/*" name="image"/>
                                </div>

                                {{-- <div class="mb-3">
                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input status" id="formSwitch1" name="status">
                                        <label class="form-check-label" for="formSwitch1">Active</label>
                                    </div>
                                </div> --}}
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary me-2" id="edit-category-submit">Submit</button>

                                </div>
                                
                                {{-- <button class="btn btn-danger" type="button" data-bs-dismiss="modal" aria-label="btn-close">Cancel</button> --}}
                            </form>
                        </div>
                        <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                    </div>
                </div>
            </div>
