<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios 4</title>
    <style>
        form input[type="number"] {
            width: calc(100% - 15px);
            padding: 10px; 
            margin-bottom: 15px; 
        }
    </style>
</head>
<body>
    <form action="exer4resposta.php" method="post">
        <input type="number" name="numero" placeholder="Digite um número entre 1 e 12">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>