<div class="modal fade" id="addUser" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add new section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Full Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Eric Joe">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">E-mail Address</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="name@example.com">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Phone Number</label>
                        <input type="number" name="phone" id="email" class="form-control" placeholder="0700000000">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" id="" class="form-control" placeholder="*******">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Confirm Password</label>
                        <input type="password" name="confirm_password" id="" class="form-control"
                            placeholder="*******">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Role</label>
                        <select name="is_admin" id="is_admin" class="form-control">
                            <option value="1">Admin</option>
                            <option value="2">Manager</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" style="width: 100%">Save
                    changes</button>
                <button type="button" class="btn btn-danger" style="width: 100%" data-bs-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
