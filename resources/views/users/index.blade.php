<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários</title>
</head>
<body>
<h1>Lista de Usuários</h1>
<table>
    <thead>
    <tr>
        <th>Nome</th>
        <th>Número de Telefone</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->phone_number }}</td>
            <td>{{ $usuario->email }}</td>
            <td>
                <a href="{{ route('users.show', $usuario->id) }}">Visualizar</a> |
                <a href="{{ route('users.edit', $usuario->id) }}">Editar</a> |
                <form action="{{ route('users.destroy', $usuario->id) }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
