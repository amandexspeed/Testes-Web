const key = "2ac17ea9fb8c54323bd6ddedd4107f3e"

function pesquisarCidade(){

    let cidade = document.querySelector('.input-cidade').value
    buscaClima(cidade)

}

async function buscaClima(cidade){

    console.log(cidade)
    let clima = await fetch(`https://api.openweathermap.org/data/2.5/weather?q=${cidade}&appid=${key}&lang=pt_br&units=metric`).then(Response => Response.json());
    console.log(clima)
    imprimeClima(clima)
}

function imprimeClima(clima){

    console.log(clima);
    document.querySelector(".titulo-previsao").innerHTML = "Tempo em " + clima.name
    document.querySelector(".graus").innerHTML = Math.floor(clima.main.temp) + "°c"
    document.querySelector(".texto-previsao").innerHTML= clima.weather[0].description
    document.querySelector(".img-previsao").src=`https://openweathermap.org/img/wn/${clima.weather[0].icon}.png`
    document.querySelector(".umidade").innerHTML = "Umidade: " + Math.floor(clima.main.humidity) + "%"

}


function buscaCidade(){

    let dados //= await fetch(`https://api.hgbrasil.com/geoip?key=d9b8a050&address=remote&precision=false `).then(Response => Response.json());
    
    
    navigator.geolocation.getCurrentPosition(function (position) {

        primeiraBusca(position.coords.latitude,position.coords.longitude);

    },function(error){ // callback de erro
       
        buscaClima("Aracaju");

    });
    
    
    console.log(dados);
    
}

async function primeiraBusca(lat,long){


    let dados = await fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${long}&limit=1&appid=${key}&lang=pt_br&units=metric`).then(Response => Response.json());
    imprimeClima(dados);

}





