<?php

// Traccia 1
// $prova="ciao Mondo";
// echo($prova);
// var_dump($prova);
// $ciccioBombaPeso=160;
// $ciccioBombaH=5.7;
// $ciccioBombaGenio=false;
// $ciccioBombaCognome="Atomic";
// const CICCIOBOMBAPESO=160;
// const CICCIOBOMBAH=5.7;
// const CICCIOBOMBAGENIO=false;
// const CICCIOBOMBACOGNOME="Atomic";
// var_dump($ciccioBombaPeso);
// var_dump($ciccioBombaH);
// var_dump($ciccioBombaGenio);
// var_dump($ciccioBombaCognome);



// Traccia 2
// Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo,
//  attraverso l’accesso agli array sopra: “E possa la Fortuna essere sempre a vostro favore!“.




// $text = "Marco";
// $text2 = "hai";
// $text3 = "sete";
// $text4 = "?";
// $text5 = "Perchè";
// $text6 = '$text2';
// $text7 = 'bevuto';
// $text8 = "tutto";
// // echo ("$text $text2 $text3$text4 $text5 $text7 $text8.");

// Traccia 3

$words1 = [
    'vostro', 67, 'essere', 'colle', 'mi', 'sempre', [
        'oscura', 'era', 89, ['mezzo', 'E'],
        'ritrovai', 'per'
    ],
    'diritta'
];
$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
        'Virgilio',
        'Favore',
        'favore',
        ['Fortuna']
    ],
    'fine'=>'!'
];
$space=" ";
$la="la";
$a="a";

$results=$words1[6][3][1].$space.$words2['elemento2'].$space.$la.$space.$words2["elemento3"][3][0].$space.$words1[2] .$space.$words1[5].$space.$a.$space.$words1[0].$space.$words2["elemento3"][2].$words2["fine"]   ;
echo($results)                                               ;