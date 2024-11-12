<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Divisão</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .division {
            font-family: monospace;
            font-size: 40px;
            margin-top: 30px;
            display: inline-block;
        }
        .division .top {
            text-align: right;
            padding-right: 10px;
        }
        .division .bottom {
            border-top: 2px solid black;
            display: flex;
            justify-content: space-between;
        }
        .division .quotient {
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 1; // Evitar divisão por zero
    ?>
    <main>
        <h1>Calculadora de Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" required>
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>" required>
            <input type="submit" value="Dividir">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            if ($valor2 != 0) {
                $quociente = intdiv($valor1, $valor2);
                $resto = $valor1 % $valor2;
                $divisorLength = strlen($valor2);
                $espacos = str_repeat("&nbsp;", $divisorLength + 1);
                
                echo "<div class='division'>";
                echo "<div class='top'>$valor1$espacos</div>";
                echo "<div class='bottom'>";
                echo "<div>$valor2</div>";
                echo "<div class='quotient'>$quociente</div>";
                echo "</div>";
                echo "</div>";
                
                if ($resto != 0) {
                    echo "<p>Resto: $resto</p>";
                }
            } else {
                echo "<p>Não é possível dividir por zero.</p>";
            }
        ?>
    </section>
</body>
</html>
