<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" name="marca" placeholder="Marca do carro!">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" placeholder="preço do carro">Preço do carro
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" placeholder="Teto solar">Teto Solar
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" placeholder="Blindado">Blindado
        </div>
        
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>