# Calculadora de Salário para Vendedores

Este é um projeto de uma calculadora de salário para vendedores, desenvolvido como parte de um processo de reformulação do plano de cargos e salários de uma empresa.

## Contexto

Exercício: A empresa, na qual Fabinho e Renata trabalhavam, passou por uma reformulação no negócio, incluindo a implantação de um sistema de meritocracia. Uma das mudanças significativas foi a reestruturação do plano de cargos e salários, com a implementação de benefícios, especialmente para os vendedores.

## Funcionamento

- Cada vendedor tem um salário mínimo definido como pagamento base pelos serviços prestados.  
- Cada vendedor tem uma meta de venda semanal de R$ 20.000, totalizando R$ 80.000 por mês.  
- Os vendedores que ultrapassarem as metas semanais receberão um percentual sobre o excedente da meta semanal.  
- Os vendedores que excederem o volume da meta mensal receberão uma bonificação, um percentual sobre o valor excedente da meta mensal, desde que cumpram todas as metas semanais.  

### Valores Definidos

- Cumprimento de meta semanal: 1% sobre o valor da meta.  
- Excedente de meta semanal: 5% sobre o excedente da meta semanal.  
- Excedente de meta mensal: 10% sobre o excedente da meta mensal.  

## Exemplo

Se um vendedor alcançar ou ultrapassar as metas todas as semanas do mês, com um valor de venda semanal de R$ 21.000,00, o cálculo do salário seria o seguinte:  

- Meta semanal: R$ 200,00 x 4 semanas = R$ 800,00  
- Excedente de meta semanal: R$ 50,00 x 4 semanas = R$ 200,00  
- Excedente de meta mensal: R$ 400,00  

O salário final seria a soma do salário mínimo, valor sobre a meta semanal, valor sobre o excedente de meta semanal e valor de excedente de meta mensal.

## Entrega

O sistema desenvolvido solicita o nome do vendedor, os valores de meta semanal e mensal, e, ao final, calcula o salário final e exibe ao usuário para efetuar o pagamento do salário.

## Fontes
[Operadores Aritméticos](https://www.php.net/manual/pt_BR/language.operators.arithmetic.php)   
[Php: Operadores](https://www.devmedia.com.br/php-operadores/25628)
### Autores
Este projeto foi desenvolvido como parte de um desafio de programação em PHP. Qualquer dúvida ou sugestão, fique à vontade para entrar em contato.    
[Emily Pessoa](https://github.com/emilypessoa)

