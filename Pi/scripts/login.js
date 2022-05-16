/*==============================================VALIDAÇÕES DE LOGIN==========================*/
function validar(){
    if (document.login.usuario.value == "") {
        bot.innerHTML= `Login não pode estar vazio`
        return false
    }

    if (document.login.senha.value == "") {
        bot.innerHTML= `Senha não pode estar vazia`
        return false
    }

    if (document.login.usuario.value.indexOf('Teste') == -1) {
        bot.innerHTML= `Login incorreto`
        return false
    }

    if (document.login.usuario.value.indexOf('abcde')== -1) {
        bot.innerHTML= `Senha Incorreta`
        return false
    }
}

function condicoes(){
    if (document.cadastro.nome.value. lenght <5) {
        cadastro.innerHTML= `Porfavor insira nome completo`
    }
    if (document.cadastro.nome.value) {
        cadastro.innerHTML= `Box vermelha caso vazio`
    }

    if (document.cadastro.cpf.value. lenght <11) {
        cadastro.innerHTML= `CPF incorreto`
    }
    if (document.cadastro.cpf.value) {
        cadastro.innerHTML= `CPF não pode vazio box vermelha`
    }

    if (document.cadastro.email.value.indexOf('.com') == -1) {
        cadastro.innerHTML= `E-mail incorreto`
    }
    if (document.cadastro.email.value) {
        cadastro.innerHTML= `E-mail vazio box vermelha`
    }

    if (document.cadastro.data_nas.value) {
        cadastro.innerHTML= `data vazia box vermelha`
    }


}


/*==================================BTN EXPANDIR E RETRAIR==============================*/
var link = document.querySelector('#aparecer');
var cadastro = document.querySelector('.desaparecer');

link.addEventListener('click', function() {
    if (cadastro.style.display === 'block')
        cadastro.style.display = 'none'
    else {
        cadastro.style.display = 'block'
    }
})

