<html>
    <head>
        <style>
 body {
    background-image: url(4.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

header {
	background:#2EFE2E;
	color: #fff;
}
            
#menu ul {
	margin: 0;
	padding: 50px 0px 0px 0px;
	list-style: none;
	line-height: normal;
    display: block;
}

#menu li {
	float: left;
    margin-left: 20px;
}
        
#menu a {
	display: block;
	width: 170px;
	height: 30px;
	margin-left: 30px;
	text-decoration: none;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #FFFFFF;
	border: none;
}

.contenedor{
       margin-top: 60px;
    background: rgba(255, 255, 255, 0.5);
    height: 150px;
}

#btnCalleA{
	margin-top: 50px;
	margin-left: 590px;
           
}
#btnCalleB{
	margin-top: 50px;
    margin-left: 40px;      
}

h2{
	color: #0000FFF;
	/*margin-left: 150px;*/
    margin-top: 100px;
    text-align: center;
}

h1{
    margin-top: 10px;
}
        </style>
        
        <script
      src="https://code.jquery.com/jquery-3.1.1.js"
      integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
      crossorigin="anonymous"></script>

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <title>SemaforoOnline</title>

    </head>

    <body>
        <header>
        <div id="menu">
            <div class="container">
            <ul>
                <li><h1>Tu Semafaro Online</h1></li>
                <li><a href="indexAdministrador.php">Inicio</a></li>
                <li><a href="administrador.php">Configurar semaforos</a></li>
                <li>Bienvenid@ admin</li>
                <li><a href="index.php">Salir</a></li>
            </ul>
        </div>
        </div>
    </header>

            <div  class="contenedor">   
                <h2>¿Cual calle quieres ver?</h2>
                <button id="btnCalleA" class="btn btn-success"  onclick = "javascript:abrir()">Calle A</button>
                <button id="btnCalleB" class="btn btn-success"  onclick =  "javascript:abrirOtro()"> Calle B</button>    
            </div>
        
    <script language=javascript>
        
         localStorage.removeItem('tiempoSemaforo');
         var tiempoInterval = localStorage.getItem('tiempoIntervalo');
        
     if(tiempoInterval){

         tiempoIntervalo = JSON.parse(tiempoInterval);
         localStorage.setItem('tiempoIntervalo', tiempoIntervalo);
          
          }else{
              
          var tiempoIntervalo = 12;
          localStorage.setItem('tiempoIntervalo', tiempoIntervalo);

          }
 
        var  nuevaVentana = 1;
        var nuevaVentana1 = 0;
 
       nuevaVentana = window.open('semaforo.php','Calle A', 'height=400,width=470'); 
         nuevaVentana.close();
       nuevaVentana1 = window.open('semaforo.php','Calle B', 'height=400,width=470');
         nuevaVentana1.close();
    

    function abrir(){

        nuevaVentana = window.open('semaforo.php','Calle A', 'height=400,width=470',"menubar=no, status=no, directories=no");
        var positionY = window.innerHeight/2-115;
        nuevaVentana.moveTo(0,positionY);
        document.getElementById('btnCalleA').disabled = true;
        document.getElementById('btnCalleB').disabled = false;
        
    }

    function abrirOtro(){

        nuevaVentana1 = window.open('semaforo.php','Calle B', 'height=400,width=470');
        var positionY = window.innerHeight/2-115;
        nuevaVentana1.moveTo(900,positionY);
        document.getElementById('btnCalleB').disabled = true;
        document.getElementById('btnCalleA').disabled = false;

    }

    </script>
    </body>
</html>
