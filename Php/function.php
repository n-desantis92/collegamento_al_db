<?php


function getRandName() {
    $names = ['roberto','giovanni','giacomo','carlo','giulia','alessia'];

    $lastnames = ['rossi','cruz','bianchi','verdi','brown','lean'];

    $rand1 = mt_rand(0, count($names) - 1);
    $rand2 = mt_rand(0, count($lastnames) - 1);

    //return name + lastname in uppercase
    return strtoupper( $names[$rand1].' '.$lastnames[$rand2]) ;

}

// echo getRandName();


function getRandEmail($name){
    $domains = ['google.com','yahoo.com','hotmail.it','libero.it'];
    $rand1 = mt_rand(0, count($domains) -1);

    return strtolower(str_replace(' ','.',$name).mt_rand(10,99).'@'.$domains[$rand1]);
}

// echo getRandEmail(getRandName());

function getRandFiscalCode(){
    $i = 16;
    $res = '';

    while ($i > 0) {
        $res .= chr(mt_rand(65,90));

        $i--;
    }


    return $res;
}

echo getRandFiscalCode();