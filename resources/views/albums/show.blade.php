<!DOCTYPE html>
<html>
<head>

<title>Detalhes</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h1>{{ $album->nome }}</h1>

<p><strong>Artista:</strong> {{ $album->artista }}</p>

<p><strong>Ano:</strong> {{ $album->ano_lancamento }}</p>

@if($album->url_imagem)

<img src="{{ $album->url_imagem }}" width="300">

@endif

<br><br>

<a href="{{ route('albums.index') }}" class="btn btn-secondary">
Voltar
</a>

</div>

</body>
</html>