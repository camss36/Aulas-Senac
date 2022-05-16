var btn = document.querySelector('#show');
var caixa = document.querySelector('.exam');

btn.addEventListener('click', function() {
    if (caixa.style.display === 'block')
        caixa.style.display = 'none'
    else {
        caixa.style.display = 'block'
    }
})