let peso = Number(prompt("Digite seu peso:"));
let altura = Number(prompt("Digite sua altura:"));

const imc = peso / (altura * altura);
alert("Seu IMC é: " + imc.toFixed(2));