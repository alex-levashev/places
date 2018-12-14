@section('title', 'Places')

@section('content')
<table class='table'>
  <th>Title</th><th>Type</th>
  @foreach ($places as $place)
    <tr>
      <td>{{ $place->title }}</td>
      <td>{{ $place->type }}</td>
    </tr>
  @endforeach
</table>
@endsection

@include('master')
