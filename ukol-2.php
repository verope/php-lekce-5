<?php

/*
 * 
Úkol 2
1. Pracujte v souboru `ukol-2.php`
2. Vytvořte rodičovskou třídu `GeometrickyUtvar`, která má atribut `pocetStran` viditelný pouze v této třídě
3. Počet stran nastavujte při vytváření instance (konstruktorem)
4. Vytvořte v této třídě veřejně přístupnou metodu `ziskejPocetStran()`, která vrací jako číselnou hodnotu počet stran geometrického tvaru
5. Vytvořte třídu `Ctverec`, která:
  1. Dědí z třídy `GeometrickyUtvar`
  2. V konstruktoru jako argument přebírá délku strany, kterou nastaví do svého atributu
  3. V konstruktoru volá rodičovskou třídu a nastaví správný počet stran
6. Vytvořte třídu `Trojuhelnik`, která:
  1. Dědí z třídy `GeometrickyUtvar`
  2. V konstruktoru přebírá jako argumenty délku všech tří stran a uloží je do svých atributů
  3. V konstruktoru volá rodičovskou třídu a nastaví správný počet stran
7. V obou třídách vytvořte metodu `ziskejObvod()`, která spočítá obvod pro čtverec/trojúhelník
8. Z obou tříd vytvořte objekty (čtverec s délkou strany 3 a trojúhelník s délkou stran 2, 4 a 5)
9. U obou objektů vypište jejich počet stran získaný rodičovskou metodou `ziskejPocetStran()` a obvod spočítaný metodami `ziskejObvod()`
 */


interface GeometrickyUtvarIF{

    public function ziskejObvod();
}



abstract class GeometrickyUtvar implements GeometrickyUtvarIF{
    
    private $pocetStran;
    
    public function __construct($pocetStran){
        $this->pocetStran = $pocetStran;
    }
    
    public function ziskejPocetStran(){
        return $this->pocetStran;
    }
}

class Ctverec extends GeometrickyUtvar{
    
    public $delkaStrany;
    
    public function __construct($delkaStrany){
        $this->delkaStrany = $delkaStrany;
        parent::__construct(4);
        
    }
    
    public function ziskejObvod(){
        return $this->delkaStrany * $this->ziskejPocetStran();
    }
    
}

class Trojuhelnik extends GeometrickyUtvar{
    
    public $delkaStrany1;
    public $delkaStrany2;
    public $delkaStrany3;
    
    public function __construct($delkaStrany1,$delkaStrany2,$delkaStrany3){
        $this->delkaStrany1 = $delkaStrany1;
        $this->delkaStrany2 = $delkaStrany2;
        $this->delkaStrany3 = $delkaStrany3;
        parent::__construct(3);

    }
    
        public function ziskejObvod(){
        return $this->delkaStrany1*$this ->delkaStrany2*$this ->delkaStrany3;
    }
    
}


/*
 * 8. Z obou tříd vytvořte objekty (čtverec s délkou strany 3 a trojúhelník s délkou stran 2, 4 a 5)
9. U obou objektů vypište jejich počet stran získaný rodičovskou metodou `ziskejPocetStran()` a obvod spočítaný metodami `ziskejObvod()`
 */


$ctverec = new Ctverec (3);
echo '<b>Ctverec ma</b>:<br>Pocet stran: ' . $ctverec->ziskejPocetStran() . '<br>Obvod: ' . $ctverec->ziskejObvod() . '<br><hr>';

$trojuhelnik = new Trojuhelnik (2,4,5);

echo '<b>Trojuhelnik ma</b>:<br>Pocet stran: ' . $trojuhelnik->ziskejPocetStran() . '<br>Obvod: ' . $trojuhelnik->ziskejObvod();


/*
 * 
Úkol 3
1. Upravte řešení úkolu 2 (případně jej zkopírujte z GitHubu) tak, aby:
  1. Z třídy `GeometrickyUtvar` nebylo možné vytvořit objekt
  2. Všechny třídy implementovaly společné rozhraní ve kterém budou předepsány veřejné metody `ziskejObvod()` a `ziskejPocetStran()`
2. Vytvořte funkci `vypisDetail()`:
  1. Tato funkce přejímá jediný argument implementující vámi definované rozhraní
  2. Tato funkce vypíše typ geometrického útvaru (typ proměnné v případě třídy zjistíte pomocí funkce 
    `get_class($objekt)`), počet stran a obvod
3. Vytvořte objekty:
  1. čtverec s délkou strany 7
  2. trojúhelník s délkou stran 3, 4 a 9
4. Pomocí funkce `vypisDetail()` vypište detaily obou objektů
 */



function vypisDetail(GeometrickyUtvarIF $objekt){
    echo '<h3>' .  get_class($objekt) . '<h3>';
    echo 'Pocet stran: ' . $objekt->ziskejPocetStran() . '<br>';
    echo 'Obvod: ' . $objekt->ziskejObvod() . '<br><br>';
}

$ctverec2 = new Ctverec(7);

$trojuhelnik2 = new Trojuhelnik(3,4,9);

vypisDetail($ctverec2);
vypisDetail($trojuhelnik2);

















