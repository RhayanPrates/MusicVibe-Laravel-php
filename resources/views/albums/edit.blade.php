<!DOCTYPE html>
<html>
<head>

<title>Editar</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h1>Editar Álbum</h1>

<form action="{{ route('albums.update',$album) }}" method="POST">

@csrf
@method('PUT')

<input
class="form-control mb-2"
type="text"
name="nome"
value="{{ $album->nome }}">

<input
class="form-control mb-2"
type="text"
name="artista"
value="{{ $album->artista }}">

<input
class="form-control mb-2"
type="number"
name="ano_lancamento"
value="{{ $album->ano_lancamento }}">

<input
class="form-control mb-2"
type="text"
name="url_imagem"
value="{{ $album->url_imagem }}">

<button class="btn btn-primary">
Atualizar
</button>

</form>

</div>

</body>
</html>