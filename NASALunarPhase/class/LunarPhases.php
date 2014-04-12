<div style="text-align: center;">
<?php
    $now = new DateTime($date, new DateTimeZone('America/El_Salvador'));
    $dateinit = new DateTime("01/01/2014", new DateTimeZone("America/El_Salvador"));
    
    //tmpfecha
    $tmplastdate = $dateinit;
    $piv = NULL;
    while($dateinit->format("Ymd")<$now->format("Ymd")):
        $dateinit->modify("+29 days");
        $dateinit->modify("+12 hours");
        if($now->format("Ymd")<=$dateinit->format("Ymd")):
            $dateinit->modify("-29 days");
            $dateinit->modify("-12 hours");
            //echo $dateinit->format("M/d/Y")."<br/>";
            break;
        endif;
    endwhile;

    $int = $dateinit->diff($now);
    
    $r = $int->days-1;
    $n = new DateTime($date, new DateTimeZone("America/El_Salvador"));
    echo "<h1> Fecha Calculada es:".$n->format("d/m/Y")."</h1>";
    if($r==0):
        $r = "especial";
    endif;
    $aux = new DateTime("01/01/2014", new DateTimeZone("America/El_Salvador"));
    $intaux = $aux->diff($now);
    echo "horas".$intaux->h;
    echo "dias x 24".$intaux->days * 24 ."<br>";
    echo $hours = ($intaux->days * 24) + $intaux->h ."<br/>";
    //var_dump($intaux);.
    $dayhour = $hours * 107.826 ;
    $difporc = ((100 * $dayhour)/ 944555.76); 
    echo "La Tierra a recorrido ".$dayhour."km desde el 01/01/2014 a la fecha de hoy, "
            . "<br/> equivalente a ".number_format($difporc, 2, '.', '')."% de rotación anual";
    switch ($r){
        case $r == "especial":
            echo "<p class='lead'>Luna Nueva</p>";
            break;
        case $r>=1 && $r<=4:
            echo "<p class='lead'>Luna Creciente</p>";
            break;
        case $r>=5 && $r<=7:
            echo "<p class='lead'>Cuarto Creciente</p>";
            break;
        case $r>=8 && $r<=10:
            echo "<p class='lead'>Segundo Cuarto Creciente</p>";
            break;
        case $r>=11 && $r<=14:
            echo "<p class='lead'>Luna llena</p>";
            break;
        case $r>=15 && $r<=18:
            echo "<p class='lead'>Tercer Menguante</p>";
            break;
        case $r>=19 && $r<=22:
            echo "<p class='lead'>Cuarto Menguante</p>";
            break;
        case $r>=23 && $r<=26:
            echo "<p class='lead'>Creciente Menguante</p>";
            break;
        case $r>=27 && $r<=28:
            echo "<p class='lead'>Luna Nueva</p>";
            break;
    }
    
?>
    <br/><img src="assets/images/Moon/Luna<?=($r+2)?>.png"><br/>
    <img src="assets/images/table-range.png"/>
</div>
