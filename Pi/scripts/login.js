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

}

function condicoes(){
    if (document.cadastro.nome.value. lenght <5) {
        cadastro.innerHTML= `Porfavor insira nome completo`
    }
    if (document.cadastro.nome.value == "") {
        cadastro.innerHTML= `Nome não pode estar vazio`
    }

    if (document.cadastro.cpf.value. lenght <11) {
        cadastro.innerHTML= `CPF incorreto`
    }
    if (document.cadastro.cpf.value == "") {
        cadastro.innerHTML= `CPF não pode estar vazio`
    }

    if (document.cadastro.email.value.indexOf('.com') == -1) {
        cadastro.innerHTML= `E-mail incorreto`
    }
    if (document.cadastro.email.value == "") {
        cadastro.innerHTML= `E-mail não pode estar vazio`
    }

}


/*==================================BTN EXPANDIR E RETRAIR==============================*/
function openFormlog(){   
    document.getElementById("esconde").style.display = "block";
  }

function closeFormlog() {
  document.getElementById("esconde").style.display = "none";
  }

