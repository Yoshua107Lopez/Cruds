<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/styless.css')}}">
    <title>MI PRIMER CRUD</title>
</head>

<body>
<h1>Ingreso de Post</h1>
    <br><br><br>
<!-- 
    @if ($errors->any())
        @foreach ($errors->all() as $errors)
        <div class="alert alert-danger">
            {{error}}
        </div>
        @endforeach 
    @endif -->
    <form action="{{route('post.store')}}"  method="post">
    <label for="">Titulo</label>
    <input type="text" name="title">
    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror

    <label for="">Url Corta</label> 
    <input type="text" name="slug">
    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror

    <label for="">Contenido</label> 
    <textarea name="content"></textarea>
    @error('content')
        <small class="text-danger">{{$message}}</small>
    @enderror

    <label for="">Descripcion</label>
    <textarea name="description"></textarea>
    @error('description')
        <small class="text-danger">{{$message}}</small>
    @enderror
    <button type="submit">Enter</button>
    </form>
</body>
</html>