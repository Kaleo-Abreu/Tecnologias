let numero = Number(prompt("Digite um número:"));
let desconto = 12;
const desc = numero * (desconto / 100);
const total = numero - desconto;

alert("Valor do desconto: R$ " + desconto.toFixed(2));
alert("O valor total com desconto é: R$ " + total.toFixed(2));