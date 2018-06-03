@extends('layouts.app')

@section('content')
  @if (count($errors))
    @foreach($errors->all() as $v)
      <strong>{{ $v }}</strong><br/>
    @endforeach
  @endif
  <form action="{{ route('filters.store') }}" method="post">
    {{ csrf_field() }}
    <input type="text" name="name" value="{{ old('name') }}"><br/>
    <textarea name="description">{{ old('description') }}</textarea>
    <button type="submit">提交</button>
  </form>
@endsection