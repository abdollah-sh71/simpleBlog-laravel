        @extends('admin.layout')
        @section('content')

<form method="POST" action="{{ route('post_created') }}">

          <!-- Content Column -->

          <div class="col-lg-8">
              
   <!-- <input type="hidden" name="_method" value="PUT"> -->
   <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title" value="">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" name="content" placeholder="content"></textarea>
  </div>
  <input class="btn btn-success btn-lg" type="submit" value="EDIT POST">

          </div>

          <div class="col-lg-4">
            @foreach($cats as $cat)
            <div class="checkbox">
              <label>
                <input name="cat[{{$cat->id}}]" type="checkbox" value="{{$cat->id}}"> {{$cat->name}}
              </label>
            </div>
            @endforeach
          </div>

</form>

        @endsection