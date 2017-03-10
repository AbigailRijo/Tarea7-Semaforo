<html>
<head>
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
    background: rgba(255, 255, 255, 0.5);
    height: 200px;
    margin-top: 50px;
}


h2{
	color: #0000FFF;
    text-align: center;
}

h1{
    margin-top: 10px;
}
        
        input {
            text-align: center;
            margin-left: 590px;
            margin-top: 30px;
        }
        
        #btnNuevo{
            margin-left: 530px;
            margin-top: 20px;
        }
        
        #btnGuardar{
            margin-left: 50px;
            margin-top: 20px;
        }
    </style>
   
    
    <title>SemaforoOnline</title>
    
</head>
    
<body>
    <header>
    <div id="menu">
        <div class="container">
            
		<ul>
            <li><h1>Tu Semafaro Online</h1></li>
			<li><a href="indexAdministrador.php">Inicio</a></li>
            <li><a href="#">Configurar semaforos</a></li>
            <li>Bienvenid@ admin</li>
            <li><a href="index.php">Salir</a></li>
		</ul>
	</div>
	</div>
        
</header>
    
        <div  class="contenedor">
            <h2>Tiempo actual del semaforo</h2>
        <input id="inputTiempo" type="number" min= "0" readonly value="0"> 
            <br>
            <br>
        <button id="btnNuevo" class="btn btn-success">Nuevo tiempo</button>
        <button id="btnGuardar" class="btn btn-success"  disabled="true"> Guardar Cambios</button>
         </div>

    
<script language=javascript>
    
    var tiempo = localStorage.getItem('tiempoIntervalo');
    var miTiempo = JSON.parse(tiempo);
    var btnGuardar = document.getElementById('btnGuardar');
    var btnNuevo = document.getElementById('btnNuevo');
    
    document.querySelector('#inputTiempo').value = miTiempo; 
    
    btnNuevo.addEventListener('click', nuevo);
    btnGuardar.addEventListener('click', guardar);
    
    function nuevo(){
        
         var input = document.querySelector('#inputTiempo');
       input.removeAttribute('readonly');
       input.focus();
        btnNuevo.disabled = true;
        btnGuardar.disabled = false;
        
    }
    
    function guardar(){
        
    var input = document.querySelector('#inputTiempo').value;
        
     if(input != ''){
         localStorage.setItem('tiempoIntervalo', parseInt(input));
         document.querySelector('#inputTiempo').setAttribute('readonly', ''); 
          btnNuevo.disabled = false;
          btnGuardar.disabled = true;
         
          var nuevaVentana = 0;  
       var nuevaVentana1= 1;
      
          if(nuevaVentana == 0){
        nuevaVentana = window.open('semaforo.php','Calle A', 'height=400,width=470');      
        nuevaVentana.close();
        if(nuevaVentana1 == 1){
            nuevaVentana1 = window.open('semaforo.php','Calle B', 'height=400,width=470');
            nuevaVentana1.close();
        }
    }
     } 
        
    }
</script>
</body>
</html>

