@extends('layouts/app')

@section('content')
<div class="container">
  
  <div class="row justify-content-center">
    <div class="p-4 border bg-white">
      <div class="card">
        <h3>{{$blog->title}}</h3>
        <div class="card-body">
            <p>
              {{$blog->body}}
            </p>
        </div>
    </div>
    <a class="btn" href="/blogs/{{$blog->id}}/edit">Edit blog</a>

    {!!Form::open(['action' => ['App\Http\Controllers\BlogController@destroy', $blog->id], 'method'=> "POST", 'class'=>'pull-right'])}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
  </div>

</div>
@endsection
