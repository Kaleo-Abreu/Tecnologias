let hora_aula = Number(prompt("Qual seu valor da hora de aula?"));
let numero_aula = Number(prompt("Quantas de aulas já foram dadas?"));
let perc_INSS = 14;

let salarioBruto = hora_aula * numero_aula;
alert("O seu salário bruto é: " + salarioBruto);

let descontoINSS = salarioBruto * (perc_INSS / 100);
alert("O desconto do INSS no seu salário é: " + descontoINSS);

let salarioLiqido = salarioBruto - descontoINSS;
alert("Seu salário liquido é: " + salarioLiqido);
