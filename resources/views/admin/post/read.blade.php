        @extends('admin.layout')
        @section('content')

          <!-- Content Column -->
          <div class="col-lg-12">
            <h2>Section Heading</h2>
            <table class="table table-striped table-bordered">
              <tr>
                <td><strong>#</strong></td>
                <td><strong>TITLE</strong></td>
                <td><strong>FULL NAME</strong></td>
                <td><strong>PHONE</strong></td>
              </tr>

              @foreach($posts as $post)
              <tr>
                <td>{{ $post->id }}</td>
                <td> {{$post->title}} </td>
                <td>abdollah shams</td>
                <td>
                  <form>
                    <a class="hollow button" href="{{ route('edit_post', ['post_id' => $post->id ]) }}">EDIT</a>
                  </form>
                </td>
              </tr>
              @endforeach
            </table>
          </div>

        @endsection