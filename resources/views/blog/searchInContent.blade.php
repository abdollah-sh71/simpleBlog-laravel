@extends('blog.app')
@section('content')
    <!-- Page Content -->
    <div class="container">
      <br><br><br><br>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Blog Home 1</li>
      </ol>

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
@foreach($posts as $post)
          <!-- Blog Post -->
          <div class="card mb-4">
            @if($post->image_url)
            <img class="card-img-top img-responsive" src="{{$post->image_url}}" alt="Card image cap">
            @endif            <div class="card-body">
              <h2 class="card-title"> {{$post->title}} </h2>
              <p class="card-text"> {{$post->excerpt}} </p>
            </div>
            <div class="card-footer text-muted">
              {{$post->created_at}}
              <a href="#">Start Bootstrap</a>
            </div>
              <a class="btn btn-info" href="{{ route('single_page', ['post_id'=> $post->id])}}">read more...</a><hr>
          </div>
@endforeach
         
        
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <form action="{{route('search_in_content')}}" method="GET">
                  <input type="text" name="word" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit">Go!</button>
                  </span>
                </form>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    @foreach($cats as $cat)
                    <li>
                      <a href="{{route('search_by_category', ['cat_id' => $cat->id])}}">{{$cat->name}} <span class="badge"> {{$cat->posts->count()}} </span></a>
</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
