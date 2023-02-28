// Uma função que receba 2 ou mais parametros e realize uma operação matemática qualquer

function calc () {
    let n1 = 2
    let n2 = 2
    let soma = n1 + n2
    return soma
}
console.log("A soma é igual a", calc())



function calc1 (sub, soma) {
    let result = sub - soma
    return console.log("A subtração entre", sub, "e", soma, "é igual a", result)
}
calc1(3, 5)



function mult (n1, n2) {
    let result1 = n1 * n2
    return console.log(n1, "X", n2, "=", result1)
}
mult(5, 5)



function conta (numero1, numero2) {
    let resultado = numero1 + numero2
    return console.log("O resultado da soma é: ", resultado)
}
conta(10, 7.6)



function test (numero3, numero4) {
    let test1 = numero3 + numero4
    return console.log(test1)
}
test(15, 6)
