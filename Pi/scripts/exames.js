var btn = document.getElementById('show');
var caixa = document.getElementById('exam');

btn.addEventListener('click', function() {
    if (caixa.style.display === 'block')
        caixa.style.display = 'none'
    else {
        caixa.style.display = 'block'
    }
})

