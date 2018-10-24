<?php
/*
 * 
Ověřování uživatelů
1. Vytvořte třídu Uzivatel, která obsahuje:
  1. atributy jmeno a heslo (nastavené přes konstruktor)
  2. metodu overeni, která:
    1. přejímá jako parametry zadané jméno a heslo
    2. vrací true pokud se jméno i heslo shodují
    3. nebo vrací false pokud se jméno a haslo neshodují
  3. metodu ziskejJmeno, která vrací jméno uživatele předané konstruktorem
  */
 class Uzivatel {
     public $jmeno;
     public $heslo;
     
     public function __construct($jmeno,$heslo){
         $this->jmeno = $jmeno;
         $this->heslo = $heslo;
     }
     
     public function overeni($jmeno, $heslo){
         if($jmeno==$this->jmeno && $heslo==$this->heslo){
             return true;
         } else {
             return false;
         }
     }
     
     public function ziskejJmeno($jmeno){
         return $this->jmeno;
     }
 }
 
 /*
2. Vytvořte třídu Prihlasovani, která obsahuje:
  1. atribut prihlaseniUzivatele (pole)
  2. metodu prihlas, která přejímá tři parametry:
    1. objekt vytvořený z třídy Uzivatel
    2. jméno jako string
    3. heslo jako string
  3. metodu zobrazPrihlaseneUzivatele, která vypíše obsah atributu prihlaseniUzivatele jako text: 
  Prihlaseni uzivatele: josef, karel, marek
*/

class Prihlasovani{
    public $prihlaseniUzivatele = [];
    private $obj1;

    public function prihlas (Uzivatel $obj1, $jmeno, $heslo){
        $this->obj1 = $obj1;
        $this->jmeno = $jmeno;
        $this->heslo = $heslo;
                

        if($this->obj1->overeni($jmeno,$heslo) && !(in_array($this->jmeno,$this->prihlaseniUzivatele))){
            return $this->prihlaseniUzivatele[]=$jmeno;
        } 
    }
    
    /*{
        $this->obj1 = $obj1;
        
        return $this->prihlaseniUzivatele[]=$jmeno;

        if ($obj1->overeni($jmeno, $heslo)) {
            $this->prihlaseniUzivatele[] = $jmeno;
       }
        return $this->prihlaseniUzivatele;
    }*/
   
    public function zobrazPrihlaseneUzivatele() {

        if(!empty($this->prihlaseniUzivatele)){
            echo 'Prihlaseni uzivatele: ';
            $lastElement = end($this->prihlaseniUzivatele);
            foreach ($this->prihlaseniUzivatele as $value) {
                echo $value;
                if($value != $lastElement){
                    echo ', ';
                }
            } 
        } else {
            echo 'Nejsou prihlaseni zadni uzivatele.';
        }
        }
    }


/*
3. Metoda prihlas pomocí metody overeni zjisti, zda zadané jméno a heslo (přijaté argumenty) odpovídá jménu a heslu, 
které má uživatel nastaven (nastavené konstruktorem). Pokud odpovídají, přidá login uživatele do svého atributu prihlaseniUzivatele.
4. Vytvořte objekt uživatele, konstruktorem předejte jméno josef a heslo josef1234.
5. Vytvořte objekt z třídy Prihlasovani. 
6. Vypište seznam přihlášených pomocí metody zobrazPrihlaseneUzivatele. 
Poté na objektu vytvořeném z třídy Prihlasovani pomocí metody prihlas zkuste uživatele přihlásit s údaji josef a josef1234. 
Nyní opět vypište seznam přihlášených uživatelů.
7. Vytvořte další objekt uživatele, zkuste ho přihlásit nejprve s chybnými údaji, poté se správnými údaji. Opět zkontrolujte vypsáním přihlášených uživatelů.
 */


$user1 = new Uzivatel('josef', 'josef1234');
$user2 = new Uzivatel('karel', 'karel1234');
$user3 = new Uzivatel('marek', 'marek1234');

$login = new Prihlasovani();


$login->zobrazPrihlaseneUzivatele();
echo '<br>';
// zadni uzivatele nejsou prihlaseni

$login->prihlas($user1,'josef','josef1234');
echo '<br>';
$login->zobrazPrihlaseneUzivatele();
// prihlaseni:josef (1)

$login->prihlas($user1,'josef','josef1234');
echo '<br>';
$login->zobrazPrihlaseneUzivatele();
// prihlaseni:josef (2)

$login->prihlas($user1,'karel','koko');

echo '<br>';
$login->zobrazPrihlaseneUzivatele();
// prihlaseni:josef (3)

$login->prihlas($user2,'karel','josef1234');

echo '<br>';
$login->zobrazPrihlaseneUzivatele();
// prihlaseni:josef (4)

$login->prihlas($user2,'karel','karel1234');

echo '<br>';
$login->zobrazPrihlaseneUzivatele();
// prihlaseni:josef, karel (5)

$login->prihlas($user3,'marek', 'marek1234');

echo '<br>';
$login->zobrazPrihlaseneUzivatele();
// prihlaseni:josef, karel, marek (6)

$login->prihlas($user3,'marek', 'marek1234');

echo '<br>';
$login->zobrazPrihlaseneUzivatele();
// prihlaseni:josef, karel, marek (7)



$user3 = new Uzivatel('veronika', 'veroniky_heslo');

$login->prihlas($user3,'veronika', 'veroniky_heslo');
echo '<br>';
$login->zobrazPrihlaseneUzivatele();
// prihlaseni:josef, karel, marek, veronika (8)





