<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Calculadora de Salário</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nome_funcionario">Nome do Funcionário:</label><br>
        <input type="text" id="nome_funcionario" name="nome_funcionario" required><br><br>
       
        <?php for ($i = 1; $i <= 4; $i++) { ?>
            <label for="semana<?php echo $i; ?>">Vendas Semanais (Semana <?php echo $i; ?>):</label><br>
            <input type="number" id="semana<?php echo $i; ?>" name="semana<?php echo $i; ?>" required><br><br>
        <?php } ?>
       
        <label for="total_vendas">Total de Vendas no Mês:</label><br>
        <input type="number" id="total_vendas" name="total_vendas" required><br><br>
       
        <input type="submit" value="Calcular Salário">
    </form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['nome_funcionario'], $_POST['total_vendas'])) {
            $nome_funcionario = $_POST['nome_funcionario'];
            $vendas_semanais = [];
            for ($i = 1; $i <= 4; $i++) {
                $vendas_semanais[] = $_POST['semana' . $i];
            }
            $total_vendas = $_POST['total_vendas'];
            $salario_base = 1856.94;
            $meta_semanal = 20000;
            $meta_mensal = 80000;
            $bonus_semanal = 0;
            $bonus_mensal = 0;
           
            foreach ($vendas_semanais as $vendas_semanal) {
                if ($vendas_semanal >= $meta_semanal) {
                    $bonus_semanal += ($vendas_semanal - $meta_semanal) * 0.05; 
                    $bonus_semanal += $meta_semanal * 0.01; 
                }
            }
           
            if ($total_vendas >= $meta_mensal) {
                $excesso_vendas = $total_vendas - $meta_mensal;
                $bonus_mensal = $excesso_vendas * 0.1; 
            }
           
            $salario_final = $salario_base + $bonus_semanal + $bonus_mensal;
           
            echo "<div class='result'>";
            echo "<p>Nome do Funcionário: $nome_funcionario</p>";
            echo "<p>Salário Final: R$ " . number_format($salario_final, 2) . "</p>";
            echo "</div>";
        }
    }
    ?>
</body>
</html>
