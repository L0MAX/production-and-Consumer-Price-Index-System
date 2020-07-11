<!-- Modal -->
<div class="modal fade" id="deleteConsumerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="alert alert-warning">Are you sure, you want to remove this role?</h5>
                <form action="{{ route('users.destroy') }}" method="POST">
                    @csrf

                    <input type="hidden" name="delete_user_id" id="delete_user_id">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
