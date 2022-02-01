<?php

class serVivo
{
    public function respirar()    
    {
        echo "Estoy respirando";
    }
}

class serHumano
{
    public function razonar()
    {
        echo "Yo estoy razonando";
    }

}

$objeto = new serVivo();
//$objeto->respirar();

echo "<br>";

$objeto = new serHumano();
$objeto->razonar();