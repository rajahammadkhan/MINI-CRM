<div class="container-fluid">
    <div class="row">
        <div class="col-12">


            @if ($errors->any())
                <div class="alert alert-danger alert-dismissibl fade show" role="alert">
                    <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="alert-heading">Error!</h4>
                    <hr class="my-3">
                    @foreach ($errors->all() as $error)
                        <p class="mb-0">{{ $error }}</p>
                    @endforeach

                </div>
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">Success!</h4>
                    <hr>
                    <p class="mb-0">{!! \Session::get('success') !!}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (\Session::has('wrong'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">Error!</h4>
                    <hr>
                    <p class="mb-0 text-white">{!! \Session::get('wrong') !!}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>
</div>
