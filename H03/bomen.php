<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bomen</title>
</head>
<body>
<?php
$bomen = array("boom1.jpg", "boom2.jpg", "boom3.jpg");

foreach($bomen as $boom) {
    echo "<img src='img2/".$boom."'>";
}
?>
</body>
</html>