<html>

    <body>
        <form method="post" action="/enviar-contato">
            {{ csrf_field() }}
            <p>Nome: <input type="text" name="nome" /></p>
        </form>
    </body>

</html>