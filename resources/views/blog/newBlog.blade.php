@extends('layouts/app')

@section('content')
<div class="container">
  
  <div class="row justify-content-center">
    <div class="p-4 border bg-white">
      <h1>Create New Blog</h1>
      {!! Form::open(['action' => 'BlogController@store', 'method' => 'post']) !!}
          <div class="form-group">
            <h2>form</h2>
          </div>
      {!! Form::close() !!}
  </div>

</div>
@endsection
