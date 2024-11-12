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
        $minimo = 1_412.00;
        $salario = $_GET['sal'] ?? 0;
    ?>
    <main>
        <h1 style="text-align: center;">Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Salário R$</label>
            <input type="number" name="sal" id="sal" step="0.01" value="<?=$salario?>">
            <p>Considerando o Salário Mínimo de R$<strong> <?=number_format($minimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
            <?php 
             
            ?>
        </form>
    </main>
    <section id="resultado">
        <h2 style="text-align: center;">Resultado final</h2>
        <?php 
            $total = intdiv($salario, $minimo);
            $dif = $salario % $minimo;

            echo "<p>Quem recebe um salário de <strong>R\$". number_format($salario, 2, ",", ".") . "</strong>,<br> ganha <strong>$total salários mínimos</strong> + <strong>R\$". number_format($dif, 2, ",", "."). "</strong></p>";
        ?>
    </section>
</body>
</html>
