<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Pagination</title>
    <style>
        body{
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card text-center">
        <div class="card-header">
            Tabela de Clientes
        </div>
            <div class="card-body">
                <h5>Exibindo {{$clientes -> count()}} clientes de {{$clientes -> total()}} ( {{$clientes ->firstItem()}} a {{$clientes -> lastItem()}})</h5>
                <table class="table table-hover">
                    <thead>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">E-mail</th>
                    </thead>
                    <tbody>
                    @foreach($clientes as $c)
                        <tr>
                            <td>{{$c->id}}</td>
                            <td>{{$c->nome}}</td>
                            <td>{{$c->sobrenome}}</td>
                            <td>{{$c->email}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        <div class="card-footer">{{$clientes->links()}}</div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
