@if(count($errors) > 0)
<div class="alert alert-danger mx-auto" role="alert" style="width:95%; padding:20px; display: flex; justify-content: space-between;">
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="false">&times;</span>
    </button>
</div>
@endif
