@extends('layouts.app')

@section('content')
  <ul>
    @foreach($filters as $key => $value)
      <li>{{ $value->name }} ---- {{ $value->description }}</li>
    @endforeach
  </ul>
@endsection