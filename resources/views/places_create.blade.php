@section('title', 'Add place')

@section('content')
<h2>Add a game</h2>

<form method="post" action="/places" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group row">
    <label for="titleid" class="col-sm-3 col-form-label">Place</label>
    <div class="col-sm-9">
      <input name="title" type="text" class="form-control" id="titleid" placeholder="Place">
    </div>
  </div>
  <div class="form-group row">
    <label for="typeid" class="col-sm-3 col-form-label">Type</label>
    <div class="col-sm-9">
      <select name="type"  id="typeid" class="form-control">
       <option>Работа</option>
       <option>Отдых</option>
       <option>По пути</option>
       <option>Иммиграция</option>
     </select>
    </div>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>


@endsection

@include('master')
