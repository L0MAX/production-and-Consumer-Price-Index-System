@if(Session::has('info'))
    <div class="row">
        <div class="col-md-6 offset-3 mt-5">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('info') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
@elseif(Session::has('error'))
    <div class="row">
        <div class="col-md-6 offset-3 mt-5">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('error') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
@endif
