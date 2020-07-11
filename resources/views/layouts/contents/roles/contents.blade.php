@include('modals.roles.createRoleModal')
@include('modals.roles.viewRoleModal')
@include('modals.roles.editRoleModal')
@include('modals.roles.deleteRoleModal')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Roles</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Roles</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createRoleModal">
                          <i class="fa fa-plus-circle"> Create Role</i>
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tables" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Create At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td id="td">{{ $role->id }}</td>
                                <td id="td">{{ $role->name }}</td>
                                <td id="td">{{ $role->created_at }}</td>
                                <td id="td">{{ $role->updated_at->diffForHumans() }}</td>
                                <td>
                                    <button type="button" class="btn btn-default btn-xs viewRoleModal"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-primary btn-xs editRoleModal"><i class="fa fa-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-danger btn-xs deleteRoleModal"><i class="fa fa-minus-circle"></i></button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#ID</th>
                                <th>Name</th>
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
