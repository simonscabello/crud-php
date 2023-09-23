<!DOCTYPE html>
<html>
<head>
    <title>Edição de Usuário</title>
</head>
<body>
<h1>Edição de Usuário</h1>
<form action="{{ route('users.update', $user->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" required value="{{ $user->name }}"><br><br>

    <label for="phone_number">Número de Telefone:</label>
    <input type="text" id="phone_number" name="phone_number" required value="{{ $user->phone_number }}"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required value="{{ $user->email }}"><br><br>

    <input type="submit" value="Salvar Alterações">
</form>
</body>
</html>

