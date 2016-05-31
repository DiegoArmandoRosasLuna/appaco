<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../assets/images/favicon.ico">

  <title>Academic Consulting</title>

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/navbar-fixed-top.css" rel="stylesheet">
  <link href="../assets/css/sticky-footer.css" rel="stylesheet">
  <link href="../assets/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" href="../bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body onload="nobackbutton();">
      <!-- Fixed navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div id="navbar">
            <ul class="nav navbar-nav inline">
              <li class="inline"><a href="#" class="glyphicon glyphicon-nav glyphicon-home"></a></li>
              <li class="inline"><a href="#" class="glyphicon glyphicon-nav glyphicon-list"></a></li>
              <li class="inline"><a href="#" class="glyphicon glyphicon-nav glyphicon-bullhorn"></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right inline right">
              <li><a href="#"><img src="../assets/images/profile.png" class="profilepic" alt=""></a></li>
              <li><a href="#" class="txt-white" id="username" style="padding-left: 4px; padding-right:4px;"><?php echo $_SESSION['login'];?></a></li>
              <li class="dropdown" id="profileop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-down txt-white"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;&nbsp;Ver Perfil</a></li>
                  <li><a href="#"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;&nbsp;Editar Perfil</a></li>
                  <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i>&nbsp;&nbsp;&nbsp;Centro de Ayuda</a></li>
                  <li role="separator" class="divider block"></li>

                  <li><a href="../include/db/logout.php"><i class="glyphicon glyphicon-off red"></i>&nbsp;&nbsp;&nbsp;Salir</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>