<?php
if($_POST):
    include './class/LunarPhases.php';
else:
    ?>
<form method="post" action="lunarphase.php">
    <input type="submit" name="enviar" value="Calcular"/>
    </form>
<?php
endif;