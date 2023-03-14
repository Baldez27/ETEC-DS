function mensagem () {
    let msg = 'Hello pipou'
    return msg
}
console.log(mensagem())


const nome = () => {
    return 'Daniel'
}

console.log(nome())

function lindaMensagem (msg){
    return console.log("A sua mensagem é:", msg)
}

lindaMensagem("Java é bom! É incrível")
lindaMensagem(3)
lindaMensagem("Coitado do Juarez por me aguentar nas segundas")
