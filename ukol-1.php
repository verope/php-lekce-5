<?php

/*
 * 

1. Vytvořte nový soubor `ukol-1.php`, třídu i objekt vytvářejte v tomto souboru
2. Vytvořte třídu `Ctverec` obsahující atribut `delkaStrany`, který se nastavuje na výchozí hodnotu pomocí konstruktoru
3. V této třídě vytvořte metodu `spocitejObsah()`, která vrátí spočítaný obsah
4. Vytvořte objekt čtverce s délkou strany `6`
5. Vypište větu Obsah ctverce o delce strany X je Y, přičemž:
  1. délku strany získejte z atributu objektu
  2. obsah získejte voláním metody objektu
 */


class Ctverec
{
    public $delkaStrany;
    public function __construct($delkaStrany)
    {
        $this->delkaStrany = $delkaStrany;
    }
    
    public function spocitejObsah(){
        return $this->delkaStrany * $this->delkaStrany;
    }
}


$ctverec = new Ctverec(6);

echo 'Obsah ctverce o delce strany ' . $ctverec->delkaStrany . ' je ' . $ctverec->spocitejObsah() . '.';

