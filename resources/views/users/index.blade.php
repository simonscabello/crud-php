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
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->phone_number }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.show', $user->id) }}">Visualizar</a> |
                <a href="{{ route('users.edit', $user->id) }}">Editar</a> |
                <form action="{{ route('users.destroy', $user->id) }}" method="post" style="display: inline;">
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
