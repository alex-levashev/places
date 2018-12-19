@section('title', 'Pictures')

@section('content')
<div class="container">
  @foreach ($pictures as $picture)
  <div class='row'>
    <div class='col-sm-6 text-left'>
      Title : {{ $picture->name }}<br>
      Uploaded : {{ $picture->updated_at }}
    </div>
    <div class='col-sm-6'>
      <img class="img-thumbnail" src="/pictures/{{ $picture->path }}">
      <!-- <h4>Type : {{ $picture->placeid }}</h4><br> -->
    </div>
  </div>
  @endforeach
</div>
<br>
<a href="/places" class="btn btn-primary btn-block" role="button">Back</a>
@endsection

@include('master')
