@extends('stylist.Stylist')

@section('main')
  <div class="container"><br>
    <h3 style="text-align: center">Stylist Manager</h3>
    @include('stylist.Stylistmessage')
    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
        <th scope="col">SID</th>
        <th scope="col">Stylist name</th>
        <th scope="col">dob</th>
        <th scope="col">contact</th>
        <th scope="col">email</th>
        <th scope="col">history</th>
        <th scope="col">urlimg</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      @foreach($stylist as $a)
        <tr>
          <td>{{$a->SID}}</td>
          <td>{{$a->name}}</td>
          <td>{{$a->dob}}</td>
          <td>{{$a->contact}}</td>
          <td>{{$a->email}}</td>
          <td>{{$a->history}}</td>
          <td>{{$a->urlimg}}</td>
            <td><a type="button" class="btn btn-success btn-sm"
                   href="{{route('stylist.edit', ['SID' => $a->SID])}}">Edit</a></td>
            <td><a type="button" class="btn btn-danger btn-sm"
                   href="{{route('stylist.confirm', ['SID' => $a->SID])}}">Delete</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
@endsection
