<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> {{ $posteo->name }} </title>
  </head>
  <body>
    <h1> {{ $posteo->name }} </h1>
    <p> {{ $posteo->message }} </p>
    {{-- <p> {{ $posteo->avatar }} </p> --}}
    <form class="" action="/admin/posteos/{{$posteo->id}}" method="post">
      {{ csrf_field() }}
      {{ method_field('delete') }}
      <button type="submit" name="button">Borrar</button>
    </form>
    <img src="{{ asset('storage/' . $posteo->avatarpath) }}" alt="">
  </body>
</html>
