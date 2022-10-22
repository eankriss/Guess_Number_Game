<?php
  
$rand_num = rand(1, 50); // Random Number from 1 to 50

$guess_num = 15; // Default Guess Number

echo "<h1>" . "GUESS NUMBER GAME". "</h1>";

echo "<h1>" . "Random Number: " . $rand_num . "</h1>";
echo "<h1>" . "Guess Number: " . $guess_num . "</h1>";

if ($guess_num > 50 && $guess_num <= 100 )
{
    echo "<h1>" . "Your guess number " . $guess_num . " is out of range" . "</h1>";
}

else if ($guess_num == $rand_num)
{
    echo "<h1>" . "Your guess number " . $guess_num . " is correct" . "</h1>";
}

else if ($guess_num > 0 && $guess_num <= 50)
{
    echo "<h1>" . "Your guess number is in range" . "</h1>";
    echo "<h1>" . "Your guess number " . $guess_num . " is incorrect" . "</h1>";
}

else if ($guess_num <= 0)
{
    echo "<h1>" . "Sorry but your guess number " . $guess_num . " is too low" . "</h1>";
}

else if ($guess_num > 100)
{
    echo "<h1>" . "Sorry but your guess number " . $guess_num . " is too high" . "</h1>";
}

?>
