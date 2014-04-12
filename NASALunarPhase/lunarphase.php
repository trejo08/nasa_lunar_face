<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script>
            $(function() {
              $("#datepicker" ).datepicker();
            });
        </script>
    </head>
    <body>
        <?php
        if($_POST):
            $fecha = $_POST['fecha'];
            include './class/LunarPhases.php';
        else:
            ?>
        <form method="post" action="lunarphase.php">
            <input type="input" id="datepicker" name="fecha"/>
            <input type="submit" name="enviar" value="Calcular"/>
            </form>
        <?php
        endif;
        ?>
    </body>
</html>