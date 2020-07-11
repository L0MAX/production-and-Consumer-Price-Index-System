<!-- Modal -->
<div class="modal fade" id="viewRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Role Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id">
                <div>
                    <label>Role Name: </label>
                    <input type="text" class="readonly" id="name" readonly>
                </div>
                <div>
                    <label>Created At: </label>
                    <input type="text" class="readonly" id="created_at" readonly>
                </div>
                <div>
                    <label>Updated At: </label>
                    <input type="text" class="readonly" id="updated_at" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
