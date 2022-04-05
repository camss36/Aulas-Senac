/*
window.alert ('oie SEr')
var nome= window.prompt('Digite seu nome')
var idade= window.prompt('Digite sua idade')
if (idade >= 18) {
window.confirm('deseja visualizar?')
window.alert('Bem vindo ' + nome)
document.write('Olá' + nome + '<br>')
document.write('Sua idade é' + idade)
} else {
window.alert('Idade não permitida')
}*/

/*var num1= window.prompt('digite um nurmero')
var num2= window.prompt('Digitew um numeor')

num1= parseInt(num1)
num2= parseInt(num2)
document.write('Resultado;' + (num1+num2))*/

/*var user= window.prompt('informe o usuário')
var senha= (window.prompt('informe sua senha'))
if (user && senha == 'admin') {
    var idade= prompt('Qual o ano do seu nascimento?')
    var ano_atual= 2022
    var total= ano_atual - idade
    
    if (total >= 18) {
    var email= prompt('informe seu e-mail')
    document.write('você tem ' + total + 'anos')  
    }
    else
    alert('idade inválida')
} else {
    var cadastro= alert('usuário não existe')
}*/

function somar (){
    n1= window.document.getElementById('n1')
    n2= window.document.getElementById('n2')
    res= window.document.getElementById('resultado')
    num1= Number(n1.value)
    num2= Number(n2.value)
    total= num1 + num2
    res.innerHTML= `soma de ${num1} com ${num2} é ${total}`
    }