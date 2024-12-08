<!-- Modal -->
<div class="modal fade" id="editStatusModal" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Status Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" id="edit-status-form-data">
                    <input type="hidden" class="id" name="id" value="">
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Status</label>
                        <select name="status" class="status form-control">
                            <option value="ACTIVE">Active</option>
                            <option value="INACTIVE">Inactive</option>
                            <option value="POPULAR">Popular</option>
                            <option value="PENDING">Pending</option>
                            <option value="RATED">Rated</option>
                            <option value="FAVORITE">Favorite</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button type="button" data-bs-dismiss="modal" aria-label="btn-close" class="btn btn-danger">Cancel
                    </button>
                </form>
            </div>
            <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
        </div>
    </div>
</div>
