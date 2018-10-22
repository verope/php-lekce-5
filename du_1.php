<?php

/*
 * 
Trojrozměrné obrazce
1. Vytvořte interface TrojrozmernyObrazec který bude obsahovat veřejné metody ziskejObjem a ziskejPovrch
2. Naimplementujte třídu Kvadr ktery bude tento interface splňovat
3. Naimplementujte krychli (seznam matematických funkcí dostupných v PHP: http://php.net/manual/en/ref.math.php)
4. Naimplementujte kouli
5. Naimplementujte jehlan
6. Implementujte funkci pro výpis objemu a obsahu které budou vyžadovat TrojrozmernyObrazec jako parametr
7. Vypiste výpočet objemu a obsahu pro:
  1. Krychli o délce strany 5
  2. Kvádr o délkách stran 2, 3, 7
  3. Kouli o poloměru 6
  4. Jehlanu o délce strany 3 a výšce 4
 */


interface TrojrozmernyObrazec {
    public function ziskejObjem();
    public function ziskejPovrch();
}

class Kvadr implements TrojrozmernyObrazec{
    public $a;
    public $b;
    public $c;
    
    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    
    public function ziskejObjem(){
        return $this->a * $this->b * $this->c;
    }
    public function ziskejPovrch(){
        return 2*(($this->a * $this->b) + ($this->a * $this->c) + ($this->b * $this->c));
    }
}

class Krychle implements TrojrozmernyObrazec{
    public $a;
    
    public function __construct($a){
        $this->a = $a;
    }
    
    public function ziskejObjem(){
        return pow($this->a,3);
    }
    public function ziskejPovrch(){
        return pow($this->a,2)*6;
    }
}

class Koule implements TrojrozmernyObrazec{
    public $r;
    
    public function __construct($r){
        $this->r = $r;
    }
    
    public function ziskejObjem(){
        return pi()*4/3*pow($this->r,3);
    }
    public function ziskejPovrch(){
        return pi()*4*pow($this->r,2);
    }
}

class Jehlan implements TrojrozmernyObrazec{
    public $a;
    public $v;
    
    public function __construct($a,$v){
        $this->a = $a;
        $this->v = $v;
    }

    
    public function ziskejObjem(){
        return $this->v*1/3*$this->a*$this->a;
    }
    public function ziskejPovrch(){
        return (($this->a*$this->v)/2)*4 + $this->a*$this->a;
    }
}

$kvadr1 = new Kvadr(2, 3, 7);
$krychle1 = new Krychle(5);
$jehlan1 = new Jehlan(3,4);
$koule1 = new Koule(6);




echo 'Krychle ma objem ' . $krychle1 -> ziskejObjem();
echo '<br>';
echo 'Krychle ma povrch ' . $krychle1 -> ziskejPovrch();
echo '<br>';

echo 'Kvadr ma objem ' . $kvadr1 -> ziskejObjem();
echo '<br>';
echo 'Kvadr ma povrch ' . $kvadr1 -> ziskejPovrch();
echo '<br>';

echo 'Koule ma objem ' . $koule1 -> ziskejObjem();
echo '<br>';
echo 'Koule ma povrch ' . $koule1 -> ziskejPovrch();
echo '<br>';

echo 'Jehlan ma objem ' . $jehlan1 -> ziskejObjem();
echo '<br>';
echo 'Jehlan ma povrch ' . $jehlan1 -> ziskejPovrch();
echo '<br>';
