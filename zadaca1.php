<?php 

class GrandPa
{
    public $name='Tony Montana';  
}

class Daddy extends GrandPa
{
    function displayGrandPaName()
    {
        return $this->name; 
    }

}


$daddy = new Daddy;
echo $daddy->displayGrandPaName(); 

$outsiderWantstoKnowGrandpasName = new GrandPa;
echo $outsiderWantstoKnowGrandpasName->name; 

?>