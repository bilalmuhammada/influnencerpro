<!-- The Modal -->
<div class="modal" id="add-subcategory">
    <div class="modal-dialog" style="border:0px solid red;width:500px;padding:10px;">
        <div class="modal-content">
            <div style="float: right;margin:5px;">
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <h5 class="text muted"><b>Add Subcategory</b> </h5>

                <form class="add-subcategory-form">
                    <div class="form-group">
                        <select class="form-control" name="category_id" id="category_selector" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                            <option disabled selected>--Select Category--</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subcategory" name="name" id="subcategory" style="border:1px solid #eee;box-shadow:4px 2px 1px 1px #eee;">
                    </div>
                    <a class="btn btn-primary"id="add-subcategory-submit" style="font-size: 13px;">Submit</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 13px;">Close</button>
                </form>
                <!---body end---->
            </div>
        </div>
    </div>
</div>
