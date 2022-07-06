@extends("layouts.app")

@section("content")
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">Option</th>


          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route("admin.post.show",$post) }}">Show</a>
                    <a class="btn btn-info" href="{{ route("admin.post.edit",$post) }}">edit</a>
                </td>

              </tr>
            @endforeach


        </tbody>
      </table>
</div>
@endsection
