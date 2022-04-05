function validar(){
    if (document.formu.nome.value == "" || document.formu.nome.value. length <3){
        alert('Preencha o campo NOME')
        return false;
    }
    if(document.formu.email.value == "" || document.formu.email.value.indexOf('@')== -1) {
        alert('Preencha o campo E-MAIL corretamente')
        return false;
    }
    
    if (document.formu.email.value.indexOf('.') == -1) {
        alert('E-mail digitado de forma incorreta')
        return false;
    }
    
    if (document.formu.mensagem.value == "") {
        alert('Preencha algo em mensagens')
        return false;
    }
    
}


