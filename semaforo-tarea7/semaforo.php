<!DOCTYPE html>
<html>
    <head>
        <style>

            body {
        background-image: url(5.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

         #rojo{
            width: 82px;
            height: 82px;
            border-radius: 41px;
            background-color: #3B0B0B;
            margin-left: 170px;
            margin-top: 17px;
         }

         #amarillo{
            width: 82px;
            height: 82px;
            border-radius: 41px;
            background-color: #3A2F0B;
            margin-left: 165px;
            margin-top: 22px;
         }

         #verde{
            width: 82px;
            height: 82px;
            border-radius: 41px;
            background-color: #00FF00;
            margin-left: 164px;
            margin-top: 21px;
         }

        </style>
        <title>SemaforoOnline</title>
    </head>
    <body>
            <div id="rojo"></div>
            <div id="amarillo"></div>
            <div id="verde"></div>

    <script>

        var divRojo = document.querySelector('#rojo');
        var divAmarillo = document.querySelector('#amarillo');
        var divVerde = document.querySelector('#verde');
        var tiempoI = localStorage.getItem('tiempoIntervalo');
        var tiempoIntervalo = JSON.parse(tiempoI);
        var tiempoSem= localStorage.getItem('tiempoSemaforo');
        
        if (tiempoSem){

        tiempoSem= JSON.parse(tiempoSem);
        malCopiar(tiempoSem);    

    }else{
        
        console.log('Entre aqui');
        var sem = new Semaforo(tiempoIntervalo);
        sem.empezar();
        localStorage.setItem('tiempoSemaforo', JSON.stringify((new Date()).getTime())) ;

    }

    function Semaforo(tiempoDeCiclo){
        
        this.colores=["Verde", "Amarillo", "Rojo"];
        this.tiempoColores=[ Math.round(tiempoDeCiclo * 0.3), Math.round(tiempoDeCiclo * 0.2),  Math.round(tiempoDeCiclo * 0.5)];
        this.color = this.colores[0];
        this.intervalo;
        this.inicio =0;
        var yomimp = this;


    this.empezar = function(){
        
        this.intervalo = setInterval(function(){ 
    
            /*var tiempo = yomimp.inicio % tiempoIntervalo;    

    if(tiempo <= tiempoIntervalo * 0.30 ){
    
        console.log("ENTONCES SOY Verde porque mi companiero es  Rojo");
        divVerde.style.background='#00FF00';
        divRojo.style.background='#3B0B0B';

    }else if(tiempo <= tiempoIntervalo * 0.50 ){
    
        console.log("ENTONCES SOY Amarillo porque mi companiero es Rojo");  
        divAmarillo.style.background='#FFFF00'; 
        divVerde.style.background='#173B0B';

     } else{

        console.log("ENTONCES SOY Rojo, porque mi companiero es Verde o amarillo")
        divRojo.style.background='#FF0000';
        divAmarillo.style.background='#3A2F0B';
        
     } */     


    if(yomimp.color == yomimp.colores[0] & yomimp.inicio == yomimp.tiempoColores[0] ){ 
        
        yomimp.color= yomimp.colores[1];
        divVerde.style.background='#173B0B';
        divAmarillo.style.background='#FFFF00';
        yomimp.inicio = 0;
     }

    if(yomimp.color == yomimp.colores[1] & yomimp.inicio == yomimp.tiempoColores[1]){ 
        
        yomimp.color= yomimp.colores[2];
        divAmarillo.style.background='#3A2F0B';
        divRojo.style.background='#FF0000';
        yomimp.inicio = 0;
        
     }


    if(yomimp.color == yomimp.colores[2] & yomimp.inicio == yomimp.tiempoColores[2]){ 
        
        yomimp.color= yomimp.colores[0];
        divRojo.style.background='#3B0B0B';
        divVerde.style.background='#00FF00';
        yomimp.inicio = 0;
        
     }
        yomimp.inicio++;
            
    }, 1000);
    }

    }

    function malCopiar(tiempoSem){
        
        localStorage.removeItem('tiempoSemaforo');
        var intervalo = setInterval(function(){
        var tiempo = (((new Date()).getTime() - tiempoSem) / 1000) % tiempoIntervalo;

    if(tiempo <= tiempoIntervalo * 0.50 ){

        divRojo.style.background='#FF0000';
        divVerde.style.background='#173B0B';
        divAmarillo.style.background='#3A2F0B';

    }else if(tiempo <= tiempoIntervalo * 0.80 ){

        divVerde.style.background='#00FF00';
        divRojo.style.background='#3B0B0B';

     } else{

        divAmarillo.style.background='#FFFF00'; 
        divVerde.style.background='#173B0B';

     }

     },1000);

    }

                
       /* var bPreguntar = true;
     
    window.onbeforeunload = preguntarAntesDeSalir;
     
    function preguntarAntesDeSalir()
    {
      if (bPreguntar)
        return "¿Seguro que quieres salir?";
    }*/
    </script>
    </body>
</html>