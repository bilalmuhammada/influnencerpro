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
<div class="modal fade" id="addcategory" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" id="add-category-form">
                    <div class="form-group form-focus">
                      
                        <input type="text" class="form-control floating" name="name" id="name" autocomplete="off"
                               {{-- placeholder="Name" --}}
                               >
                               <label for="name" class="form-label inner_label focus-label">Category Name</label>
                    </div>
                    <div class="form-group form-focus">
                       
                        <input type="text" class="form-control floating" name="slug" id="slug" autocomplete="off"
                               {{-- placeholder="Category #" --}}
                               >
                        <label for="slug" class="form-label inner_label focus-label">Category #</label>
                    </div>
                    <div class="mb-3">
                        {{-- <div class="form-group form-focus"> --}}
                            <label for="image" class="form-label  inner_label focus-label">Category Image</label>
                        <input type="file" id="myDropify"   accept="image/*" class="floating" name="image"/>
                        
                    </div>

                    {{-- <div class="mb-3">
                        <div class="form-check form-switch mb-2">
                            <input type="checkbox" class="form-check-input" id="formSwitch1" name="status">
                            <label class="form-check-label" for="formSwitch1">Active</label>
                        </div>
                    </div> --}}
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary me-2" id="add-category-submit">Submit</button>
                    </div>
                   
                    {{-- <button class="btn btn-danger" data-bs-dismiss="modal">Cancel</button> --}}
                </form>
            </div>
            <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
        </div>
    </div>
</div>
