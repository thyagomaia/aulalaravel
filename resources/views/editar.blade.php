<html>

    <body>
        <form method="post" action="/livro/{{ $id }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <p>Nome: <input type="text" name="nome" value="{{ $nome }}" /></p>
        </form>
    </body>

</html>