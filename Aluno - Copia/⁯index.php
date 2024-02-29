<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Mundo em PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
        }
        h1 {
            color: #ffffff;
            font-size: 3rem;
            margin-bottom: 20px;
        }
        p {
            color: #ffffff;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            $mensagem = "FE!N";
            echo "<h1>$mensagem</h1>";
        ?>
        <p></p>
    </div>
</body>
</html>