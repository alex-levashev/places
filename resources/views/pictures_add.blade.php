@section('title', 'Add picture')

@section('content')
<h2>Add a picture to a place {{ $number }}</h2>

<form method="post" action="/places/{{ $number }}/pictures" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group row">
    <label for="nameid" class="col-sm-3 col-form-label">Name</label>
    <div class="col-sm-9">
      <input name="name" type="text" class="form-control" id="nameid" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="pictureid" class="col-sm-3 col-form-label">Picture</label>
    <div class="col-sm-9">
      <input name="picture" type="file" class="form-control" id="pictureid" placeholder="Picture">
    </div>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>


@endsection

@include('master')
