@extends("layouts.app")

@section("content")
    <div class="container">
        <h1>Nuovo Post</h1>
        <form  action="{{ route("admin.post.store") }}" method="POST">
            @csrf
            <div class="mb-3 ">
              <label for="exampleInputEmail1" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il Titolo" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Inserisci Contenuto</label>
                <textarea class="form-control " name="content" id="content" cols="30" rows="10"></textarea>
            </div>





            <button type="submit" class="btn btn-primary">Invia</button>
          </form>
    </div>
@endsection
