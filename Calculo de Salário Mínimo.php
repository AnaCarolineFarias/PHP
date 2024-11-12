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
        $salário = 1418;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Salário R$</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <input type="submit" value="Calcular">
            <?php 
             $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "<br>Considerando o salário mínimo de <strong>" . numfmt_format_currency($padrão, $salário, "BRL") . "</strong>";
            ?>
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
             if ($valor1 > 0) {
                 // Calcular a quantidade de salários mínimos
                 $quantidade_salarios = floor($valor1 / $salário);
                 $adicional = $valor1 % $salário;

                 // Formatar a quantidade de salários mínimos
                 $formatador = numfmt_create("pt_BR", NumberFormatter::DECIMAL);
                 $quantidade_formatada = numfmt_format($formatador, $quantidade_salarios);
                 $adicional_formatado = numfmt_format_currency($padrão, $adicional, "BRL");

                 // Exibir o resultado
                 echo "<p>Com um salário de <strong>" . numfmt_format_currency($padrão, $valor1, "BRL") . "</strong>" . ", você ganha <strong>$quantidade_formatada</strong> <strong> salários mínimos </strong>+ <strong>$adicional_formatado</p></strong>";
             } else {
                 echo "<p>Por favor, insira um valor válido para o salário.</p>";
             }
        ?>
    </section>
</body>
</html>
