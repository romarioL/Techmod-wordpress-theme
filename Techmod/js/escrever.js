var div = document.getElementById('main-screen');
var texto = 'Sistema  hackeado com sucesso.  Agora  você está  fodido. Para sair daqui, terá  que se render a mim.';

function escrever(str, el) {
  var char = str.split('').reverse();
  var typer = setInterval(function() {
    if (!char.length) return clearInterval(typer);
    var next = char.pop();
    el.innerHTML += next;
  }, 100);
}

escrever(texto, div);