@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible mb-2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="d-flex align-items-center">
            <i class="bx bx-like"></i>
            <span>
                 {{ session('success') }}
            </span>
        </div>
    </div>
@endif

@if(session()->has('warning'))
    <div class="alert alert-block alert-warning">
        <button type="button" class="close" data-dismiss="alert">
            <i class="ace-icon fa fa-times"></i>
        </button>
        <strong class="green">
            {{ session('warning') }}
        </strong>
    </div>
@endif


