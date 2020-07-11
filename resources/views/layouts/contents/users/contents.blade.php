@include('modals.users.createUserModal')
@include('modals.users.viewUserModal')
@include('modals.users.editUserModal')
@include('modals.users.deleteUserModal')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Users</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createUserModal">
                          <i class="fa fa-plus-circle"> Create User</i>
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tables" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Image</th>
                                <th>Email</th>
                                <th>Create At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td id="td">{{ $user->id }}</td>
                                <td id="td">{{ $user->name }}</td>
                                <td id="td">{{ $user->role->name ?? 'N/A' }}</td>
                                <td id="td">
                                    @if($user->images)
                                        <img class="img" src="{{ asset('assets/uploads/' . $user->name . '/' . $user->images) }}" alt="{{ $user->image }}">
                                    @else
                                    <img class="img" src="{{ asset('assets/dist/img/avatar.png') }}" alt="">
                                    @endif
                                </td>
                                <td id="td">{{ $user->email }}</td>
                                <td id="td">{{ $user->created_at }}</td>
                                <td id="td">{{ $user->updated_at->diffForHumans() }}</td>
                                <td>
                                    <button type="button" class="btn btn-default btn-xs viewUserModal"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-primary btn-xs editUserModal"><i class="fa fa-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-danger btn-xs deleteUserModal"><i class="fa fa-minus-circle"></i></button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Create At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
