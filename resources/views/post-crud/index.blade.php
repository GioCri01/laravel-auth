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
                <td>XXX</td>

              </tr>
            @endforeach


        </tbody>
      </table>
</div>
@endsection
