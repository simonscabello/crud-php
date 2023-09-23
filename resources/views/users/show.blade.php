<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Usuário</title>
</head>
<body>
<h1>Detalhes do Usuário</h1>
<table>
    <tr>
        <th>Nome:</th>
        <td>{{ $user->name }}</td>
    </tr>
    <tr>
        <th>Número de Telefone:</th>
        <td>{{ $user->phone_number }}</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>{{ $user->email }}</td>
    </tr>
</table>
<br>
<a href="{{ url()->previous() }}">Voltar</a>
</body>
</html>
