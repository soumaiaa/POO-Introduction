<?php
class Formule1{
    private $speed=0;
  
    public function drive(){
        echo "Vroom vroom $this->speed km/h";
    }
    public function shiftGear(){
        return $this->speed++;
    }
}
$myFormule1=new Formule1();
echo $myFormule1->drive();
echo "<br>";
$myFormule1->shiftGear();
echo $myFormule1->drive();

?>