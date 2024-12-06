<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

//if...elseif...else Statement
<?php
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

//Short Hand If
<?php
$a = 5;

if ($a < 10) $b = "Hello";

echo $b
?>

//Short Hand If...Else
<?php
$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;
?>

//Nested if Statement
<?php
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}
?>
