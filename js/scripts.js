// Arquivo com os comandos em js

/**
 * Conteúdo importante
 * 
 * 
 */


function loadingShow() {
    const div = document.createElement('div');      //comando para criar uma tag
    div.classList.add('loading');                        // comando para adicionar uma class
    
    const label = document.createElement('label');
    label.innerText = ("Carregando...");

    div.appendChild(label);

    document.body.appendChild(div);                       // comando para incluir alguma div

    setTimeout (() => loadingRemove(),2000);
}

function loadingRemove() {
    var loadings = document.getElementsByClassName('loading');
    if (loadings.length) {
        loadings[0].remove();
    }
}