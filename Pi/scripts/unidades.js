function nomeDaFuncao(elem)
{var indiceDoSelectEscolhido = elem.selectedIndex;
var valorDoElementoEscolhido = elem.options[indiceDoSelectEscolhido];

alert("Indice: "+indiceDoSelectEscolhido + 
"\n"+"Valor: "+valorDoElementoEscolhido.value +
"\n"+"Texto dentro do Select: "+valorDoElementoEscolhido.innerHTML );
}
    
<select id="selectSpan" onchange='nomeDaFuncao(this)'>
    <option value="-1" selected>Nenhum</option>
    <option value="0">span1</option>
    <option value="1">span2</option>
    <option value="2">span3</option>
</select>