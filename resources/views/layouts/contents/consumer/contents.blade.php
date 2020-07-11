@include('modals.consumer.createConsumerModal')
@include('modals.consumer.viewConsumerModal')
@include('modals.consumer.editConsumerModal')
@include('modals.consumer.deleteConsumerModal')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Consumer Price</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Consumer Price</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createConsumerModal">
                          <i class="fa fa-plus-circle"> Record Consumer Price</i>
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tables" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Product Name</th>
                                <th>Recorded by</th>
                                <th>Image</th>
                                <th>Create At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($consumers as $consumer)
                            <tr>
                                <td id="td">{{ $consumer->id }}</td>
                                <td id="td">{{ $consumer->name }}</td>
                                <td id="td">{{ $consumer->user }}</td>
                                <td id="td">{{ $consumer->price }}</td>
                                <td id="td">
                                    @if($consumer->images)
                                        <img class="img" src="{{ asset('assets/uploads/products/' . $consumer->name . '/' . $consumer->images) }}" alt="{{ $consumer->image }}">
                                    @else
                                    <img class="img" src="{{ asset('assets/dist/img/avatar.png') }}" alt="">
                                    @endif
                                </td>
                                <td id="td">{{ $consumer->created_at }}</td>
                                <td id="td">{{ $consumer->updated_at->diffForHumans() }}</td>
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
                                <th>Product Name</th>
                                <th>Recorded by</th>
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
