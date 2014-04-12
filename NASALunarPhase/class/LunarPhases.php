<?php
class LunarPhases extends DateTime {
    
    public function __construct($time='now', DateTimeZone $object){
        parent::__construct($time, $object);
    }
    
    public function __toString() {
        return $this->format("d:m:y -- H:i:s");
    }
    
    public function getDiference(DateTime $date){
        $this->diff($date);
        $interval = $this->diff($date);
        return $interval;
    }   
}

//$date = new DateTime("03/01/2014", new DateTimeZone("America/El_Salvador"));
//echo $date->format("d/m/Y");

$LPhase = new LunarPhases("01/01/2014", new DateTimeZone("America/El_Salvador"));

$LPhases = new LunarPhases("01/01/2014", new DateTimeZone("America/El_Salvador"));
$LPhases->modify("+29 days");
$LPhases->modify("+12 hours");
echo "<h1>".$LPhases->format("M/d/Y")."</h1>";
$LPhases->modify("+29 days");
$LPhases->modify("+12 hours");
echo "<h1>".$LPhases->format("M/d/Y")."</h1>";

$LPhases->modify("+29 days");
$LPhases->modify("+12 hours");
echo "<h1>".$LPhases->format("M/d/Y")."</h1>";

$LPhases->modify("+29 days");
$LPhases->modify("+12 hours");
echo "<h1>".$LPhases->format("M/d/Y")."</h1>";
/*$LPhases->modify("+29 days");
echo "<h1>".$LPhases->format("m/d/Y")."</h1>";*/

$date = new DateTime("01/16/2014", new DateTimeZone('America/El_Salvador'));
$numero = $LPhase->getDiference($date);

echo "<h1>".$numero->days."</h1>";

var_dump($numero);
if($numero->days>=29):
    $res = $numero->days % 29;
    $res2 = $numero->days / 29;
else:
     $res = $numero->days;
     $res2 = $numero->days;
endif;

echo "<br/>Modulo: ".((int)$res)."<br/>";
echo "<br/>Cociente: ".$res2."<br/>";

$r= (int)$res;

if($r==0){
    $r = "especial";
}
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
    
    case $r>=23 && $r<=28:
        echo "Creciente Menguante";
        break;
    
}