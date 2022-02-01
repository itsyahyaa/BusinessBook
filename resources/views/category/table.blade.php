<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mt-1">Account Details</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Category Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Category Price</label>
                        <input type="number" name="price" id="price" class="form-control">
                        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title mt-1">Account Details</h5>
                    </div>
                    <div class="col-md-4">
                        <form action="" method="get">
                            <input class="form-control" type="text" name="" id="" placeholder="Search..."
                                style="float: right">

                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-light table-bordered">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Updated_at</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->price }}</td>
                                <td>{{ $category->created_at->toDateString() }}</td>
                                <td>{{ $category->updated_at->toDateString() }}</td>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-info " data-bs-toggle="modal"
                                            data-bs-target="#edit{{ $category->id }}"><i class="fas fa-edit">
                                            </i></a>
                                        <a href="#" class="btn btn-danger " data-bs-toggle="modal"
                                            data-bs-target="#remove{{ $category->id }}"><i class="fas fa-trash">
                                            </i></a>
                                    </div>
                                </td>
                            </tr>
                            {{-- Edit User Modal --}}
                            <!-- Modal -->

                            @include('category.edit&delete')

                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>
