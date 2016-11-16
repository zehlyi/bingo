<html>
<head>
<title>Prelim/Defense Bingo</title>
<style>
.pulsate {
    -webkit-animation: pulsate 1s ease-in-out;
    -webkit-animation-iteration-count: infinite;
    font-weight: bold;
}
@-webkit-keyframes pulsate {
    0% {
        color: #111111;
    }
    50% {
        color: #999900;
    }
    100% {
        color: #111111;
    }
}
#bannerflash {
        //display: inline;
        position: relative;
        left: 13em;
        top: 30px;
        z-index: 100;
        width: 100px;
        font-size: 12px;

/* Safari */
-webkit-transform: rotate(-45deg);

/* Firefox */
-moz-transform: rotate(-45deg);

/* IE */
-ms-transform: rotate(-45deg);

/* Opera */
-o-transform: rotate(-45deg);
}
</style>
</head>
<body>


<div id="content">
<div>
<div class="pulsate" id="bannerflash">
<?php 
 $array2 = array("Gluten Free!",
		"Double buffered!",
		"sqrt(-1) love you!",
		"Tip your waiter!",
		"11/10!",
		"Bingo == love!",
		"With added Doge!",
		"Do not distribute!");
assert(shuffle($array2));echo $array2[0]; ?></div>
<h3>Prelim/Defense Bingo</h3>
</div>
<p>Hit refresh to generate a new board.</p>
<?php

 $array = array("committee member arrives late/leaves early",
                "technical difficulties",
                "arithmetic vs. harmonic/geometric mean",
                "committee member gets more food",
                "advisor rescues student",
                "run out of time",
                "backup slide",
                "discuss graph axes",
                "\"hostile question\"",
                "committee member falls asleep",
                "\"where are the papers?\"",
                "\"what do you want to do with your life?\"",
                "remote connection dropped / mic muted",
                "non-committee member asks question",
                "go back >= 5 slides",
                "\"slide number carriage return!\"",
                "committee member proposes more work",
                "\"zero billion dollar industry\"",
                "impersonation of colleague",
                "repeat of a previous question",
                "committee member refers to document",
                "asking student to skip slides",
                "\"what would you do differently?\"",
                "reference to committee member's own paper",
                "10+ minutes discussion of single slide");
assert(shuffle($array));

 echo "<table border='1' style='table-layout: fixed; width:500px; height:500px; word-wrap: break-word; text-align: center'>\n"; 
$x = 0;
for ($i = 0; $i <5; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 5; $j++){
        if ($i == 2 && $j == 2){
            echo "<td><b>FREE SPACE</b></td>";
        }
        else {
            echo "<td>$array[$x]</td>";
            $x++;
        }
    }
    echo "</tr>\n";
}

 echo "</table>\n";
?>

</body>
</html>
