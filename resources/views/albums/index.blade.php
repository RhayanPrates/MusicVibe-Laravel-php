<!DOCTYPE html>
<html>
<head>
    <title>Álbuns</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Catálogo de Álbuns</h1>

    <a href="{{ route('albums.create') }}" class="btn btn-success mb-3">
        Novo Álbum
    </a>

    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Artista</th>
            <th>Ano</th>
            <th>Ações</th>
        </tr>

        @foreach($albums as $album)

        <tr>

            <td>{{ $album->id }}</td>
            <td>{{ $album->nome }}</td>
            <td>{{ $album->artista }}</td>
            <td>{{ $album->ano_lancamento }}</td>

            <td>

                <a href="{{ route('albums.show',$album) }}" class="btn btn-primary">
                    Ver
                </a>

                <a href="{{ route('albums.edit',$album) }}" class="btn btn-warning">
                    Editar
                </a>

                <form action="{{ route('albums.destroy',$album) }}" method="POST" style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger">
                        Excluir
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>