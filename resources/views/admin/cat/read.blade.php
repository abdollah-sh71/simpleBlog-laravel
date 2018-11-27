        @extends('admin.layout')
        @section('content')

          <!-- Content Column -->
          <div class="col-lg-6">
            <h2>Section Heading</h2>
            <table class="table table-striped table-bordered">
              <tr>
                <td><strong>#</strong></td>
                <td><strong>name</strong></td>
              </tr>

              @foreach($cats as $cat)
              <tr>
                <td>{{ $cat->id }}</td>
                <td> {{$cat->name}} </td>
              </tr>
              @endforeach
            </table>
          </div>

          <form method="POST" action="{{ route('cat_created') }}" >
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="name">Category</label>
                <input type="text" class="form-control" name="name" placeholder="category">
                <span class="error"> {{$errors->first('name')}} </span>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-success" name="delete" >
              </div>

            </div>
          </form>

        @endsection