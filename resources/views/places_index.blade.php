@section('title', 'Places')

@section('content')
<table class='table'>
  <th>Title</th><th>Type</th><th>Pictures</th><th>Options</th>
  @foreach ($places as $place)
    <tr>
      <td>{{ $place->title }}</td>
      <td>{{ $place->type }}</td>
      <td>0</td>
      <td>
        <a href="/places/{{ $place->id}}">
          <span class="glyphicon glyphicon-eye-open"></span>
        </a>
        <a href="#">
          <span class="glyphicon glyphicon-edit"></span>
        </a>
        <a href="/places/{{ $place->id}}/delete">
          <span class="glyphicon glyphicon-remove"></span>
        </a>
      </td>
    </tr>
  @endforeach
</table>
<a href="/places/create" class="btn btn-primary btn-block" role="button">Add place</a>

@endsection

@include('master')
