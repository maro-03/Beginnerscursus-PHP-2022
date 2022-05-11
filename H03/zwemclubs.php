<?php
$personenPerIcoon = 5;
$zwemclubs = array();
$zwemclubs[0] = array("De Spartelkuikens" == 25);
$zwemclubs[1] = array("De Waterbuffels" == 32);
$zwemclubs[2] = array("Plonsmderin" == 11);
$zwemclubs[3] = array("Bommetje" == 23);

//$zwemclubs = [
//    "De Spartelkuikens" == 25,
//    "De Waterbuffels" == 32,
//    "Plonsmderin" == 11,
//    "Bommetje" == 23
//];

//print_r($zwemclubs);
    foreach($zwemclubs as $zwemclub)
//print_r($zwemclub);
        $temp =  $zwemclub / $personenPerIcoon;
    echo $temp;
    for ($i = 0; $i < $temp; $i++) echo $zwemclubs = '<img src="img3/swimmer.jpg"';
?>
