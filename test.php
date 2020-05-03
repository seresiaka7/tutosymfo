<?php
require "person.php";
require "enfant.php";


$p= new Enfant("sere","siaka");
$p1= new Enfant("ser","siaka");
echo Enfant::$count."\n";
$p->identite();
echo "\n";
$p->Setnom("chaka");
$p->identite();

?>