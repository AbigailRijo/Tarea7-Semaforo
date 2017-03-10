<?php
    $usuario= "admin";
    $contraseña = "admin";
   
    if($_POST ){
         $datos = $_POST;
        
        if($datos['usuario'] == $usuario && $datos['contraseña'] == $contraseña){
            
         header('Location: indexAdministrador.php');
        }else{
            echo '<script type="text/javascript">alert("No pudimos verificar tus credenciales. Por favor, vuelve a verificar e inténtalo de nuevo.");</script>';
        }
    }
?>


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
}
        
        #menu a {
	display: block;
	width: 130px;
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

/*.contenedor{
    background: rgba(255, 255, 255, 0.5);
}
*/
        #form{
    width: 400px; 
    height: 250px;
    margin-left: 500px;
    margin-top: 30px;
	border-radius: 6px;
    text-align: center;
    background: rgba(255, 255, 255, 0.6);        
	
	
}
 
form{
    margin-top: 10px;
    height: 200px
}


h2{
	color: #0000FFF;
    text-align: center;
}

h1{
    margin-top: 10px;
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
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
			<li><a href="index.php">Inicio</a></li>
            <li><a href="#">Login</a></li>
		</ul>
	</div>
	</div>
        
</header>
    <div id="form">
        <br>
        <h2>login</h2>
    <form method="post">
        <div class="row">
            <div class="col col-sm-12">
                <div class="form-group input-group">
                    <span class="input-group-addon">Usuario</span>
                    <input type="text" required class="form-control" name="usuario"/>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon">Contraseña</span>
                    <input type="password"  required class="form-control" name="contraseña"/>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Ingresar</button>
                </div>
            </div>
        </div>
    </form>
        </div>
</body>
</html>

<!--Investigar como implementar un modelo Publish/Subscriber en esta practica.-->