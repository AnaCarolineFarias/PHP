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
        $peso1 = $_GET['p1'] ?? 1;
        $valor2 = $_GET['v2'] ?? 0;
        $peso2 = $_GET['p2'] ?? 1;

        // Cálculo da Média Aritmética Simples
        $media_simples = ($valor1 + $valor2) / 2;

        // Cálculo da Média Ponderada
        $media_ponderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);

        // Formatação com NumberFormatter
        $formatador = numfmt_create("pt_BR", NumberFormatter::DECIMAL);
        $media_simples_formatada = numfmt_format($formatador, $media_simples);
        $media_ponderada_formatada = numfmt_format($formatador, $media_ponderada);
    ?>
    <main>
        <h1 style="text-align: center;">Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" step="any" required value="<?=$valor1?>">
            <label for="v1">1° Peso</label>
            <input type="number" name="p1" id="p1" step="any" min="1" required value="<?=$peso1?>">
            <label for="v1">2° Valor</label>
            <input type="number" name="v2" id="v2" step="any" required value="<?=$valor2?>">
            <label for="v1">2° Peso</label>
            <input type="number" name="p2" id="p2" step="any" min="1" required value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="resultado">
        <h2 style="text-align: center;">Calculo das Médias</h2>
        <?php 
            echo "<ul><li>A sua média aritmética simples é: <strong>$media_simples_formatada</strong></li>";
            echo "<li>A sua média ponderada é: <strong>$media_ponderada_formatada</strong></li></ul>";
        ?>
    </section>
</body>
</html>
