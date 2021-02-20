<div class="" style="width:95%; margin: auto; padding:20px;">
    @if(session()->has('success'))
        <div class="alert alert-success" style="" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="false">&times;</span>
            </button>
        </div>
    @endif

    @if(session()->has('danger'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('danger') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="false">&times;</span>
            </button>
        </div>
    @endif
</div>
