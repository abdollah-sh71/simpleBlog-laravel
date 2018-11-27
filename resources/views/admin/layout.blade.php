<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <style type="text/css">
      .error{
        color:red;
      }
    </style>
    <!-- Custom styles for this template -->
    <!-- <link href="{{asset('css/modern-business.css')}}" rel="stylesheet"> -->

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-inverse">
      <div class="container">
     
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">management</a>
        </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('create_post')}}">add post <span class="sr-only">(current)</span></a></li>
        <li><a href="{{route('all_post')}}">all posts</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
      </ul>
    </div>

      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Content Row -->
      <div class="row">
        @yield('content')
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src=" {{asset('js/bootstrap.min.js')}} "></script>

  </body>

</html>
