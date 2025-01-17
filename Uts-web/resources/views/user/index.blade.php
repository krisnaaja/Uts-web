@extends('layouts.app')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
        <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $user['username'] }}</td>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['email'] }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection