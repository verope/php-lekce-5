<?php
// trida je sablona pro objekt

class Auto
{
    public $rokVyroby;
    public $barvaAuta;
    
    public function __construct($rokVyroby,$barvaAuto)
    {
        $this->rokVyroby = $rokVyroby;
        $this->barvaAuto = $barvaAuto;
    }
    
    
    public function spocitejVek()
    {
        return date('Y') - $this->rokVyroby;
    }
    
    private function dnesniRok(){
        return date('Y');
    }    
    public function nastavVek($novyVek)
    {
        $this-> $rokVyroby = $novyVek;
    }
}


$skodaFabia = new Auto(2001, 'zelena');
echo $skodaFabia->spocitejVek();

$skodaFabia->rokVyroby = 2015;


/*
exit();

$skodaFabia = [
    'rokVyroby' => 2001,
    'barva' => 'bila'
];

function spocitejVek($auto){
    return date('Y') - $auto['rokVyroby'];
}


$vek = date('Y') - $skodaFabia['rokVyroby'];

echo $vek;

$vek2 = spocitejVek($skodaFabia);
echo ' ' . $vek2;


echo '<hr>';


echo 'objekty: <br><hr>';











*/







?>
