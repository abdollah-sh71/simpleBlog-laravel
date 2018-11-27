        @extends('admin.layout')
        @section('content')

          <!-- Content Column -->
          <div class="col-lg-12">
            <h2>Section Heading</h2>
            <table class="table table-striped table-bordered">
              <tr>
                <td><strong>#</strong></td>
                <td><strong>title</strong></td>
                <td><strong>name</strong></td>
                <td><strong>edit</strong></td>
                <td><strong>delete</strong></td>
              </tr>

              @foreach($posts as $post)
              <tr>
                <td>{{ $post->id }}</td>
                <td> {{$post->title}} </td>
                <td>abdollah shams</td>
                <td>
                  <form>
                    <a class="btn btn-info" href="{{ route('edit_post', ['post_id' => $post->id ]) }}">EDIT</a>
                  </form>
                </td>
                <td>
                  <form>
                    <a class="btn btn-danger" href="{{ route('delete_post', ['post_id' => $post->id ]) }}">DELETE</a>
                  </form>
                </td>
              </tr>
              @endforeach
            </table>
          </div>

        @endsection