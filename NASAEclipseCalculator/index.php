<?php

include '../DecoratorPattern/class/ITitleDecorator.php';
$datejd =gregoriantojd(10, 03, 2005);
echo "Fecha Juliana: ".$datejd;
$periodosinodicolunar =  2953058868;

$k = (2014-1900)*123685;

$periodo = $datejd * $k;
echo "<h1>".$periodo."</h1>";
echo '<h1>'.$k.'</h1>';


echo $periodosinodicolunar;

$text = new SimpleTextWithHeader(new SimpleText("".$periodosinodicolunar.""));
echo $text->getTitle();