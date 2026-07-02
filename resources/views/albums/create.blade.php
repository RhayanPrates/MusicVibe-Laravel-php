<!DOCTYPE html>
<html>
<head>

    <title>Novo Álbum</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h1>Novo Álbum</h1>

<form action="{{ route('albums.store') }}" method="POST">

@csrf

<input
class="form-control mb-2"
type="text"
name="nome"
placeholder="Nome">

<input
class="form-control mb-2"
type="text"
name="artista"
placeholder="Artista">

<input
class="form-control mb-2"
type="number"
name="ano_lancamento"
placeholder="Ano">

<input
class="form-control mb-2"
type="text"
name="url_imagem"
placeholder="URL da imagem">

<button class="btn btn-success">
Salvar
</button>

</form>

</div>

</body>
</html>