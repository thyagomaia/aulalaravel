<html>

    <body>
        <form method="post" action="/put">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <p>Nome: <input type="text" name="nome" /></p>
        </form>
    </body>

</html>