<div style="text-align: center;">
<?php
$now = new DateTime($fecha, new DateTimeZone('America/El_Salvador'));
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
$n = new DateTime($fecha, new DateTimeZone("America/El_Salvador"));
echo "<div> Fecha Actual: ".$n->format("d/m/Y")."</div>";
if($r==0):
    $r = "especial";
endif;

//echo $int->days-1 ."<br/>";

switch ($r){
    case $r == "especial":
        echo "Luna Nueva";
        break;
    
    case $r>=1 && $r<=4:
        echo "Luna Creciente";
        break;

    case $r>=5 && $r<=7:
        echo "Cuarto Creciente";
        break;
 
    case $r>=8 && $r<=10:
        echo "Segundo Cuarto Creciente";
        break;
    
    case $r>=11 && $r<=14:
        echo "Luna llena";
        break;
    
    case $r>=15 && $r<=18:
        echo "Tercer Menguante";
        break;
    
    case $r>=19 && $r<=22:
        echo "Cuarto Menguante";
        break;
    
    case $r>=23 && $r<=26:
        echo "Creciente Menguante";
        break;
    case $r>=27 && $r<=28:
        echo "Luna Nueva";
        break;
    
}
?>
<br/><img src="assets/images/Moon/Luna<?=($r)+3?>.png"/>
<br/><img src="assets/images/table-range.png"/>
</div>