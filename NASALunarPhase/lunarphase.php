<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<!--<link rel="shortcut icon" href="assets/assets/ico/favicon.ico">-->

		<title>Starter Template for Bootstrap</title>
		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="assets/css/starter-template.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                <script src="http://eternicode.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	</head>
	<body>
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <div class="container">
                            <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#">NASA Lunar Phase</a>
                            </div>
                            <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav">
                                            <li class="active"><a href="#">Home</a></li>
                                            <li><a href="#about">About</a></li>
                                            <li><a href="#contact">Contact</a></li>
                                    </ul>
                            </div><!--/.nav-collapse -->
                    </div>
            </div>
		<div class="container">
                    <div class="stater-template">
                        <?php
                        if($_POST):
                                $date = $_POST['date'];
                                echo "<div class='starter-template'>";
                                include './class/LunarPhases.php';
                                echo "</div>";
                        else:
                        ?>
                        <form method="post" action="lunarphase.php">
                            <input class="datepicker" type="text" name="date" />
                            <input type="submit" name="enviar" value="Calcular"/>
                        </form>
                        <?php
                        endif;
                        ?>				
                    </div>
		</div>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="assets/js/bootstrap.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $('.datepicker').datepicker({
                            format: "mm/dd/yyyy",
                            todayBtn: "linked",
                            autoclose: true,
                            todayHighlight: true
                        });
                    });
                </script>
	</body>
</html>