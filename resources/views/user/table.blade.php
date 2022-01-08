<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-4">
                        <h5 class="card-title">Account Details</h5>
                    </div>
                    <div class="col-md-2">
                        <a href="#" style="margin-right:0" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#addUser"><i class="fa fa-plus-circle me-2"></i>Add New User</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-light table-bordered">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($accounts as $user)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>
                                    @if ($user->is_admin == 1)
                                        Admin
                                    @else
                                        manager
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-info " data-bs-toggle="modal"
                                            data-bs-target="#edit{{ $user->id }}"><i class="fas fa-edit">
                                            </i></a>
                                        <a href="#" class="btn btn-danger " data-bs-toggle="modal"
                                            data-bs-target="#delete{{ $user->id }}"><i class="fas fa-trash">
                                            </i></a>

                                    </div>
                                </td>
                            </tr>
                            {{-- Edit User Modal --}}
                            <!-- Modal -->

                            @include('user.edit&delete')

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
