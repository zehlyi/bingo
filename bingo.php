<html>
<head>
<title>Prelim/Defense Bingo</title>
</head>
<body>


<div id="content">
<h3>Prelim/Defense Bingo</h3>
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
