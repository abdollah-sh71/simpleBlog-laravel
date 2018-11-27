        @extends('admin.layout')
        @section('content')
<form method="POST" action="{{ route('post_edited', ['post_id' => $id ]) }}">

          <!-- Content Column -->
          <div class="col-lg-8">
            <h2>Section Heading</h2>
              
   <input type="hidden" name="_method" value="PUT">
   <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title" value="{{$title}}">
    <small class="error">{{$errors->first('title')}}</small>
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" name="content"> {{$content}} </textarea>
    <small class="error">{{$errors->first('content')}}</small>
  </div>
  <input value="EDIT POST" class="btn btn-success btn-lg" type="submit" >

          </div>

          <div class="col-lg-4">
            <small class="error">{{$errors->first('cat')}}</small>  
             <?php $check= ''; ?> 
            @foreach($cats as $cat)
            <?php if ( in_array($cat->name, $post_cats) ) {
              $check = "checked";
            }else{
              $check = "";
            } 
            ?>
            <div class="checkbox">
              <label>
                <input name="cat[{{$cat->id}}]" type="checkbox" value="{{$cat->id}}" {{$check}} > {{$cat->name}}
              </label>
            </div>
            @endforeach
          </div>

</form>

        @endsection