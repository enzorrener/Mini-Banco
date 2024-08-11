<?php

$nome = "Enzo Ronaldo";
$saldo = 3150.00;

echo "************************\n";
echo "Titular: $nome\n";
echo "Saldo atual: R$$saldo,00\n";
echo "************************\n";

do {
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "Escolha um número: ";

    $escolha = (int) fgets(STDIN);

    if ($escolha < 1 || $escolha > 4) {
        echo "Número inválido, digite novamente\n";
    } else {
switch ($escolha) {
    case 1:
        echo "Seu saldo atual é: R$" . number_format($saldo,2, "," , ".") ."\n";
        break;
    case 2:
        echo "Quanto o Sr. Deseja sacar hoje?\n";
        $valorSaque = (float) fgets(STDIN);   
    if ($valorSaque > $saldo) {
        echo "Saldo insuficiente!\n";
    } elseif ($valorSaque <= 0) {
        echo "Valor inválido";
}   else {
    $saldo -= $valorSaque;
    echo "Saque realizado com sucesso, seu saldo agora é de R$" . number_format($saldo,2,",",".") ."\n";
}
        break;
    case 3:
        echo "Quanto o Sr. Deseja depositar hoje? \n";
        $valorDeposito = (float) fgets(STDIN);
        $saldo += $valorDeposito;
        echo "Valor depositado com sucesso, seu saldo agora é de R$" . number_format($saldo,2,",",".") ."\n";
        break;
    case 4:
        echo "Saindo do Sistema...\n";
        break;
        }
    }
} while ($escolha != 4);

echo "Obrigado por usar nossos serviços!\n";