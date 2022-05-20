@extends('layouts/app')

@section('content')
<div class="container">
  
  <div class="row justify-content-center">
    <div class="col-md-8 p-4 border bg-white">
      <h1>Edit {{$blog->title}}</h1>
      {!! Form::open(['action' => ['\App\Http\Controllers\BlogController@update', $blog->id], 'method' => 'post']) !!}
          <div class="form-group mt-2 mb-4">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $blog->title, ['class'=>'form-control', 'placeholder'=>'Blog Title'])}}

            {{Form::label('body', 'Blog Body')}}
            {{Form::textarea('body', $blog->body, ['class'=>'form-control', 'placeholder'=>'Blog Body'])}}
            
          </div>
          {{Form::hidden('_method', 'PUT')}}
          {{Form::submit('Post blog', ['class'=>'btn btn-primary']);}}

      {!! Form::close() !!}
  </div>

</div>
@endsection
