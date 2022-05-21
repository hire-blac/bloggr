<div class="row justify-content-center">
  <div class="p-4 border bg-white">
    <h1>All Blogs</h1>
    @if (count($blogs) > 0)
        @foreach($blogs as $blog)
            <div class="card my-3">
              <h4><a href="/blogs/{{$blog->id}}">{{$blog->title}}</a></h4>
            </div>
        @endforeach
        {{$blogs->links()}}
    @else
        <p>No blogs</p>
    @endif
</div>