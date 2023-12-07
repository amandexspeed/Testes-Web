const horas = document.getElementById('horas');
const minutos = document.getElementById('minutos');
const segundos = document.getElementById('segundos');
const AmPm = document.getElementById('AmPm');

const relogio = setInterval(function time(){

    let datahoje = new Date();
    let hora = datahoje.getHours();
    let minuto = datahoje.getMinutes();
    let segundo = datahoje.getSeconds();

 
    let time;

    if(hora<12){

        if(hora<10){

            horas.textContent="0"+hora;

        }else{

            horas.textContent=hora;

        }
        
        time="AM";
        

    }
    else{

        if(hora-12<10){

            horas.textContent="0"+(hora-12);

        }else{

            horas.textContent=hora-12;

        }
        time="PM";

    }
    
    AmPm.textContent=time;

    if(minuto<10){

        minutos.textContent="0" + minuto;

    }else{

        minutos.textContent=minuto;

    }
    
    if(segundo<10){

        segundos.textContent="0"+segundo;

    }else{

        segundos.textContent=segundo;

    }

});