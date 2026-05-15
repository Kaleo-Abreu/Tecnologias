let valor = Number(prompt("Digite o valor da prestação:"));
let dias = Number(prompt("Quantos dias de atraso?"));
let taxa = 2;

if (dias > 0) {
    let total = valor + (valor * (taxa / 100) * dias);

    alert("Prestação em atraso.\nTotal: R$ " + total.toFixed(2));
} else {
    alert("Prestação em dia.");
}