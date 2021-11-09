<?php
//function for smallest number in randomly generated array
function findnumber($numbers)
{
    //counter in array
    $count = count($numbers);
    for ($i = 1; $i <= $count; $i++) {
        $flag = true;
        for ($j = 0; $j < $count; $j++) {
            if ($numbers[$j] <= 0) continue;
            if ($i == $numbers[$j]) {
                $flag = false;
                break;
            }
        }
        if ($flag) {
            return $i;
        }
    }
}
//array of numbers randomly filled ( random from 1 - 1000 numbers )
$numbers = array();
$n = rand(1, 1000);
for ($i = 1; $i <= $n; $i++) {
    //random pick numbers between -1000 and 1000
    $num = rand(-1000, 1000);
    //add randomly generated number to array
    array_push($numbers, $num);
}

print "\n Smallest missing number between 1 - 1000 random times is: ";
echo findnumber($numbers);
print "\n";
echo "</br></br>";

print "\n Number of random nums:  ";
echo $n;
print "\n";
echo "</br></br>";

print "Array: ";
foreach ($numbers as $key => $val) {
    echo $val . ' ';
}
