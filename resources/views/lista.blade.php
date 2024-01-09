<!DOCTYPE html>
<html>
    <head>
        <title>Teste</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Lista de mensagens</h1>
            <hr/>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Codigo Produto</th>
                        <th>Nome Produto</th>
                        <th>Categoria</th>
                        <th>Preco Unitario</th>
                        <th>Descricao</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registars as $row)
                    <tr>
                        <th scope="row">{{ $row->codigo_produto }}</th>
                        <th>{{ $row->nome_produto }}</th>
                        <th>{{ $row->categoria }}</th>
                        <th>{{ $row->preco_unitario }}</th>
                        <th>{{ $row->descricao }}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>