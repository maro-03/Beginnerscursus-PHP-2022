<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Apen Controlestructuur</title>
        <style>
            body {
                text-align:center;
            }
            .red {
                border:red solid 6px;
            }
            .green {
                border:green solid 6px;
            }
        </style>
</head>
<body>
    <?php
    for($i = 1; $i<=9 ;$i++) {
        if($i == 2) {
            $style = "class='red'";
        }   else {
            $style = "";
        }
        if($i == 4) {
            $style = "class='red'";
        }
        if($i == 6) {
            $style = "class='red'";
        }
        if($i == 8) {
            $style = "class='red'";
        }
        if($i == 1) {
            $style = "class='green'";
        }
        if($i == 3) {
            $style = "class='green'";
        }
        if($i == 5) {
            $style = "class='green'";
        }
        if($i == 7) {
            $style = "class='green'";
        }
        if($i == 9) {
            $style = "class='green'";
        }
        echo "<img ".$style."src='img/aap".$i.".jpg'>";
    }
    ?>
</body>
</html>