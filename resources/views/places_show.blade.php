@section('title', 'Places')

@section('content')
<div class='text-center'>
<h4>Title : {{ $id->title }}</h4><br>
<h4>Type : {{ $id->type }}</h4><br>
</div>

<a href="/places" class="btn btn-primary btn-block" role="button">Back</a>
@endsection

@include('master')
