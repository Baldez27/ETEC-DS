let pivo = true;

if (pivo) {
    console.log("Olá pessoal");
} else {
    console.log("Bye bye bye");
}

let nome = "Hétero top"

if (nome) {
    console.log("Hétero top na área")
} else {
    console.log*("Hétero top nos deixou")
}

// function testezinho (entrada) {
//     if (entrada) {
//         return console.log("Sua entrada foi", entrada);
//     }
//     console.log("Nada entrou");
// }

// testezinho(true)
// testezinho(false)

function testezinho (entrada) {
    if (entrada) {
        return console.log("Sua entrada foi", entrada);
    }
    if (entrada ==="Figo"){
        return console.log("Nenhum nome confere");
    }
    console.log("Nada entrou");
}

testezinho('joese');
testezinho(1);


let num = 2;
let msg;

num === 1 ? msg = "O número é 1 " : msg = "O número mão é 1";

console.log(msg);

num = 1;

switch (num) {
    case num === 1: 
        msg = "um";
        break;
    case num === 2: 
        msg = "dois";
        break;
    case num === 3: 
        msg = "três";
        break;
    case num === 4: 
        msg = "Quatro";
        break;
        default: 
            msg = "Seu número";
}

console.log(msg);
