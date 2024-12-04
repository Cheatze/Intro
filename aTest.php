<?php
#An array of even and uneven numbers
$arrayOfnumbers = [42, 67, 35, 89, 24, 76, 58, 93, 7, 30, 83, 46, 13, 25, 98, 53, 17, 79, 57, 8];
#An associative array to count the even and uneven numbers
$evenOdd = ["Even" => 0, "Oneven" => 0];
//A loop that goes over the array and counts the even and uneven numbers
foreach ($arrayOfnumbers as $number) {
    #A check if the number being looped over is even or uneven
    if ($number % 2 == 0) {
        #A counter that increments the value tied to the even numbers key in the evenOdd array
        $evenOdd["Even"]++;
    } else {
        #A counter that increments the value tied to the uneven numbers key in the evenOdd array
        $evenOdd["Oneven"]++;
    }
}
#Displays the count of even and uneven numbers in the evenOdd array
echo "Er zijn " . $evenOdd["Even"] . " even getallen en " . $evenOdd["Oneven"] . " oneven getallen";