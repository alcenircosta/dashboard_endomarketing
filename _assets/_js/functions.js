$.getJSON("_assets/_data/data.json", function(data) {
    var dados = data.data;
    var output = '';
    for (i = 0; i < dados.length; i++) {
        console.log(dados[i]);


        output += '<div class="releases">';
        output += '<img src="'+dados[i].files[0].file+'">';
        output += '<div class="release_info">';
        output += '<h3>'+dados[i].title+'</h3>';
        output += '<p class="alert"><span class="'+dados[i].type+'"> '+(dados[i].type == "event" ? "Evento" : "Publicação")+' </span> '+dados[i].date+' </p>';
        output += '<p> '+dados[i].description+' </p>';
        output += '</div>';
        output += '<img class="pontos" src="_assets/_images/pontos.png">';                      
        output += '<div class="clear"></div>';
        output += '</div>';
    }

    document.getElementById('release').innerHTML = output;
});