<?php

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food= ["Quesadilla",
        "Pasta",
        "Fiesta Salad",
        "Burrito",     
];

/*
Print every array element in a new line.
*/
echo $food[0] . "<br>";
echo $food[1] . "<br>";
echo $food[2] . "<br>";
echo $food[3] . "<br>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
echo "<ul>
  <li>$food[0]</li>
  <li>$food[1]</li>
  <li>$food[2]</li>
  <li>$food[3]</li>
</ul>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = [
  $food[0] => "Starter",
  $food[1] => "Shareable",
  $food[2]=> "Salad", 
  $food[3] => "Main course"
  
];
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
echo $food[0]. "|" . $food_assoc["Quesadilla"];
echo "<br>";
echo $food[1]. "|" . $food_assoc["Pasta"];
echo "<br>";
echo $food[2]. "|" . $food_assoc["Fiesta Salad"];
echo "<br>";
echo $food[3]. "|" . $food_assoc["Burrito"];


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece

  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$food_assoc = [
    "Quesadilla" => [
                  "type"=>"Starter",
                  "origin"=>"Mexico"],
    "Pasta" => [
                  "type"=>"Shareable",
                  "origin"=>"Italy"],
    "Fiesta Salad" => [
                  "type"=>"Salad",
                  "origin"=>"Greek"],   
    "Burrito" => [
                  "type"=>"Main Course",
                  "origin"=>"Mexico"]  

];


/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
echo $food[0] . " | " . $food_assoc["Quesadilla"]["type"] . " | " . $food_assoc["Quesadilla"]["origin"] . "<br>";
echo $food[1] . " | " . $food_assoc["Pasta"]["type"] . " | " . $food_assoc["Pasta"]["origin"] . "<br>";
echo $food[2] . " | " . $food_assoc["Fiesta Salad"]["type"] . " | " . $food_assoc["Fiesta Salad"]["origin"] . "<br>";
echo $food[3] . " | " . $food_assoc["Burrito"]["type"] . " | " . $food_assoc["Burrito"]["origin"] . "<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo
"<table>
  <tr>
    <th>".$food[0]."</th>
    <th>".$food_assoc["Quesadilla"]["type"]."</th>
    <th>".$food_assoc["Quesadilla"]["origin"]."</th>
  </tr>
  <tr>
    <th>".$food[1]."</th>
    <th>".$food_assoc["Pasta"]["type"]."</th>
    <th>".$food_assoc["Pasta"]["origin"]."</th>
  </tr>
  <tr>
    <th>".$food[2]."</th>
    <th>".$food_assoc["Fiesta Salad"]["type"]."</th>
    <th>".$food_assoc["Fiesta Salad"]["origin"]."</th>
  </tr>
  <tr>
    <th>".$food[3]."</th>
    <th>".$food_assoc["Burrito"]["type"]."</th>
    <th>".$food_assoc["Burrito"]["origin"]."</th>
  </tr>
</table>";
?>