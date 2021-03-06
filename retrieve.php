<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recuperar Contraseña | Academic Consulting</title>

        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/login/form-elements.css">
        <link rel="stylesheet" href="assets/css/login/style.css">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="top-content">	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Recuperar contraseña</h3>
                            		<p>Escribe tu email, enviaremos tu clave de acceso</p>
                        		</div>
                        		<div class="form-top-right" >
                        			<img src="assets/images/Acologo.png" alt="Academic Consulting" class="logo">
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="javaScript:sendpass()" method="post" class="login-form">
                                <div id="errorLog"></div>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="email">Email:</label>
			                        	<input type="text" name="email" placeholder="Email" class="form-username form-control" id="email">
			                        </div>
                                    <div class="form-group center"> 
                                        <button type="submit" class="btn" id="btn-enviar">ENVIAR</button> <br/> <br/>   
                                        <a href="index.php" class="txt-cancel txt-right">Cancelar</a>
                                    </div>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/jquery-1.12.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>