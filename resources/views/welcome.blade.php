@extends('layouts/app')

@section('content')
<div class="container">
  
  <div class="row justify-content-center">
    <div class="p-4 border bg-white">
      <h1>Bloggr Landing Page</h1>
      @include('blog.allBlogs')
  </div>

</div>
@endsection
