<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preço = $_REQUEST['preco'] ?? '0';
        $reaj = $_REQUEST['reaj'] ?? '0';
    ?>
    <main>
        <h1 style="text-align: center;">Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
          <label for="preco">Preço do Produto (R$)</label>
          <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preço?>">
          <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
          <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>">
          <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
        $aumento = ($preço * $reaj) / 100;
        $novo_preço = $preço + $aumento ;
    ?>
    <section>
        <h1 style="text-align: center">Resultado do Reajuste</h1>
        <p>O produto que custava <strong>R$<?=number_format($preço, 2, ",", ".")?></strong>, com <strong><?=$aumento?>% de aumento</strong>
        <br> vai passar a custar <strong>R$<?=number_format($novo_preço, 2, ",", ".")?></strong> a partir de agora.</p>
    </section>
    <script>
        //Declarações automáticas
        mudaValor()
        
        function mudaValor(){
            p.innerText = reaj.value
        }
    </script>
</body>
</html>
