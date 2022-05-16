@extends('layouts/app')

@section('content')
<div class="container">
  
  <div class="row justify-content-center">
    <div class="p-4 border bg-white">
      <h1>{{$blog->title}}</h1>
      <div class="card">
        <div class="card-body">
            <p>
              {{$blog->body}}
            </p>
        </div>
    </div>
  </div>

</div>
@endsection
