        @extends('admin.layout')
        @section('content')

          <!-- Content Column -->
          <div class="col-lg-12">
            <h2>Section Heading</h2>
              
<form method="POST" action="{{ route('save_new_user', ['post_id' => $id ]) }}">
   <input type="hidden" name="_method" value="PUT">
   <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title" value="{{$title}}">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" name="content"> {{$content}} </textarea>
  </div>
  <a class="btn btn-success btn-lg" type="submit" >EDIT POST</a>
</form>

          </div>

        @endsection