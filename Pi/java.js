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
/*VALIDAR PÁG EXAMES
function vazios(){
    if (document.exames.exame.value == "") {
        
    }
}*/

/*BTN EXPANDIR E RETRAIR*/
var btn = document.querySelector('#show');
var caixa = document.querySelector('.exam');

btn.addEventListener('click', function() {
    if (caixa.style.display === 'block')
    caixa.style.display = 'none'
    else {
        caixa.style.display = 'block'
    }
})

/*var link = document.querySelector('#aparecer');
var cadastro = document.querySelector('.desaparecer');

link.addEventListener('click', function() {
    if (cadastro.style.display === 'block')
    cadastro.style.display = 'none'
    else {
        cadastro.style.display = 'block'
    }
})*/