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
};


// echo getRandEmail(getRandName());

function getRandFiscalCode(){
    $i = 6;
    $res = '';
    $day = getRandDay();
    $mounth = chr(mt_rand(65, 76));
    $fiscaldate = getRandNum();
    $comune = chr(mt_rand(65, 90)) . mt_rand(0, 9). mt_rand(0, 9). mt_rand(0, 9). chr(mt_rand(65, 90));


    while ($i > 0) {
        $res .= chr(mt_rand(65,90));

        $i--;
    }


    return $res.$fiscaldate.$mounth.$day.$comune;
};

echo getRandFiscalCode();

function getRandNum() {
    $num1 = mt_rand(0, 9);
    $num2 = mt_rand(0, 9);

    return $num1.$num2;
}

// echo getRandNum() .'<br>';

function getRandDay()
{
    $num = mt_rand(0, 31);

    if ($num < 10){
        $num = '0'.$num;
    }
    return $num;
}

// echo getRandDay();
