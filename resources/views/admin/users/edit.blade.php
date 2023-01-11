<div class="modal fade" id="viewModel{{ $user->id }}" tabindex="-1" aria-labelledby="viewModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModelLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.users.update', $user) }}" method="POST">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="status">User Status</label>
                        <select name="status" id="status" class="form-control">
                            <option @selected($user->status) value="1">Active</option>
                            <option @selected(!$user->status) value="0">Disable</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update User</button>
                </div>
            </form>
        </div>
    </div>
</div>
