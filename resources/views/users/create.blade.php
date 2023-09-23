<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
</head>
<body>
<h1>Cadastro de Usuário</h1>
<form action="{{route('users.store')}}" method="post">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="phone_number">Número de Telefone:</label>
    <input type="text" id="phone_number" name="phone_number" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <input type="submit" value="Cadastrar">
</form>
</body>
</html>
