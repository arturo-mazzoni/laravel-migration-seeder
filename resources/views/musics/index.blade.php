@extends('layouts.app')

@section('title', 'Index page')

@section('content')
  
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($canzoni as $canzone)
        <tr>
          <td scope="row">{{ $canzone->id }}</td>
          <td>{{ $canzone->titolo }}</td>
          <td>{{ $canzone->album }}</td>
          <td>{{ $canzone->artista }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection