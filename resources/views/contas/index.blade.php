<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Contas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<a href=" {{ route('conta.create')}} ">Cadastrar</a><br>


    <h2>Listar as Contas</h2>

    <a href=" {{ route('conta.show')}} ">Visualizar</a><br>
    <a href=" {{ route('conta.edit')}} ">Editar</a><br>
    <!-- <a href=" {{ route('conta.destroy')}} ">Apagar</a><br> -->

</body>
</html>