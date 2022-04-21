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
        if($i %  2 == 0) {
            $style = "class='red'";
        }   else {
            $style = "class='green'";
        }
        echo "<img ".$style."src='img/aap".$i.".jpg'>";
    }
    ?>
</body>
</html>