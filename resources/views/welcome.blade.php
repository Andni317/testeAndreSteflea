<!DOCTYPE html>
<html>
    <head>
        <title>Teste</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Teste</h1>
            <hr/>
            <form action="/enviar" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="nome_produto">Nome Produto</label>
                    <input type="text" id="nome_produto" name="nome_produto" class="form-control" placeholder="nome_produto">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" id="categoria" name="categoria" class="form-control" placeholder="categoria">
                </div>
                <div class="form-group">
                    <label for="preco_unitario">Preco Unitario</label>
                    <input type="text" id="preco_unitario" name="preco_unitario" class="form-control" placeholder="preco_unitario">
                </div>
                <div class="form-group">
                    <textarea id="descricao" name="descricao" class="form-control" placeholder="Digite a sua descricao"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
        </div>
    </body>
</html>

