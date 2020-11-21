<html>

    <body>
        <form method="post" action="/livro">
            {{ csrf_field() }}
            <p>Nome: <input type="text" name="nome" /></p>
        </form>
    </body>

</html>