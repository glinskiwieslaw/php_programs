<?php
/**
 * Created by PhpStorm.
 * User: wg
 * Date: 2015-11-26
 * Time: 02:47
 */
/*Zadanie 14. Napisz funkcje o nazwie FooBar, przyjmującą jedną zmienną. Funkcja ta ma wypisywać kolejne liczby, ale:
 W miejsce liczb podzielnych przez 3 wypisywać Foo
 W miejsce liczb podzielnych przez 5 wypisywać Bar
 W miejsce liczb podzielnych przez 3 i 5 wypisywać FOOBAR
Np. Dla parametru $x = 15 wynik ma być:
12Foo4BarFoo78FooBar11Foo1314FOOBAR*/

function fooBar($arg) {
    for ($i=1; $i<=$arg; $i=$i+1){
        if ($i % 3==0 && $i % 5!=0 ){
            echo "Foo";
        }
        elseif ($i % 5==0 && $i % 3!=0){
            echo "Bar";
        }
        elseif ($i % 3==0 && $i % 5==0){
            echo "FooBar";
        }
        else {
            echo $i;
            }
    }
/*    return TRUE;*/
}
echo fooBar(15);

