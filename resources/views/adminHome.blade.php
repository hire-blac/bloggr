@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 px-4 py-2 border bg-white">
          <div class="border-bottom text-center">
            <p>Users</p>
          </div>
          <div class="border-bottom text-center">
            <p>Blogs</p>
          </div>
        </div>
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

                    <h1>Admin Homepage</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
