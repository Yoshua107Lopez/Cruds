<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/styless.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>MI PRIMER CRUD</title>
</head>

<body>
<h1>Ingreso de Post</h1>
    <br><br><br>

    <form action="{{route('post.store')}}"  method="post">
    @csrf

    <label for="">Titulo</label><br><br>
    <input type="text" name="title">
    @error('title')
    <small style="color:red" class="text-danger">{{$message}}</small>
    @enderror

    <label for="">Url Corta</label> <br><br>
    <input type="text" name="slug">
    @error('slug')
        <small style="color:red" class="text-danger">{{$message}}</small>
    @enderror

    <label for="">Contenido</label> <br><br>
    <textarea name="content"></textarea>
    @error('content')
        <small style="color:red" class="text-danger">{{$message}}</small>
    @enderror

    <label for="">Descripcion</label><br><br>
    <textarea name="description"></textarea>
    @error('description')
        <small style="color:red" class="text-danger">{{$message}}</small>
    @enderror
    <br><br>
    <button type="submit">
         Enviar
    </button>

    </form>

</body>
</html>