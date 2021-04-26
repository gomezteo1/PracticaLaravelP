@if($errors->any())
        @foreach($errors->all() as $error)
            <p aling="center" class="btn btn-warning">¡{{  $error  }}!</p>
        @endforeach
@endif