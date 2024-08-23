<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //capturando os dados do Formulário Retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Número</label>
            <input type="number" name="v1" id="v1" step="any" value="<?=$valor1?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            if ($valor1 > 0) {
                // Calcula a raiz quadrada e cúbica
                $raiz_quadrada = sqrt($valor1);
                $raiz_cubica = pow($valor1, 1/3);

                $raiz_quadrada_formatada = sprintf("%.3f", $raiz_quadrada);
                $raiz_cubica_formatada = sprintf("%.3f", $raiz_cubica);

                echo "<p>A raiz quadrada de <strong>$valor1</strong> é <strong>$raiz_quadrada_formatada</strong>.</p>";
                echo "<p>A raiz cúbica de <strong>$valor1</strong> é <strong>$raiz_cubica_formatada</strong>.</p>";
            } else {
                echo "<p>Por favor, insira um valor válido para o cálculo.</p>";
            }
        ?>
    </section>
</body>
</html>
