<?php
$personenPerIcoon = 5;
$icoon = ["url" => "https://www.freeiconspng.com/thumbs/swimming-icon-png/sports-swimming-icon-png-1.png", "size" => "30px"];
$zwemclubs = [
    ["club" => "De Spartelkuikens", "aantal" => 25,],
    ["club" => "De Waterbuffels", "aantal" => 32],
    ["club" => "Plonsmderin", "aantal" => 11],
    ["club" => "Bommetje", "aantal" => 23]
];
foreach ($zwemclubs as $i => $zwemclub) {
        $zwemclubs[$i]["icoon"] = floor($zwemclub["aantal"] / $personenPerIcoon);
}
?>
<ul>
    <?php foreach ($zwemclubs as $zwemclub) : ?>
    <li>
        <?= $zwemclub["club"] ?>
        <?= str_repeat('<img src="' . $icoon["url"] . '" width="' . $icoon["size"] . '">', $zwemclub["icoon"]) ?>
    </li>
    <?php endforeach ?>
</ul>