<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor da comissão</title>
</head>
<body>
    <form action="" method="post">
        Custo da fábrica: <input type="text" name="cf">
       <!-- Parcela do distribuidor: <input type="text" name="pd">
        Impostos majoritarios: <input type="text" name="im">-->
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
<?php /*10. Uma revendedora de carros usados paga a seus funcionários vendedores um salário fixo por mês, mais uma comissão também fixa para cada carro vendido e mais 5% do valor das vendas por ele efetuadas. Escrever um algoritmo que leia o número de carros por ele vendidos, o valor total de suas vendas, o salário fixo e o valor que ele recebe por carro vendido. Calcule e escreva o salário final do vendedor.*/
$custoF = $_POST['cf'];
$pd = 0.28;
$im = 0.45;
$pdccf = ($custoF * $pd) + $custoF;
$tv = ($pdccf*$im) + $pdccf;
echo "<br><br>Valor totaal a ser pago é de : {$tv}";




?>