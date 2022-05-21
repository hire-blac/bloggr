@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <h1>User Profile</h1>

                    <div class="row justify-content-center">
                      <div class="p-4 border bg-white">
                        <h1>My Blogs</h1>
                        @if (count($blogs) > 0)
                            @foreach($blogs as $blog)
                                <div class="card my-3">
                                  <h4><a href="/blogs/{{$blog->id}}">{{$blog->title}}</a></h4>
                                  <p>{{$blog->body}}</p>

                                  <a class="btn" href="/blogs/{{$blog->id}}/edit">Edit blog</a>
                              
                                  {!!Form::open(['action' => ['App\Http\Controllers\BlogController@destroy', $blog->id], 'method'=> "POST", 'class'=>'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                  {!!Form::close()!!}
                                  
                                </div>
                            @endforeach
                        @else
                            <p>No blogs</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
