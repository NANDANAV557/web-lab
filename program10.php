<?php
$students = array("nandana","anjela","theja","arya");
echo "<h2>array sorting:</h2>";
print_r($students);

echo"<br><br>";

asort($students);
echo "<h2>array after asending sorting (asort):</h2>";
print_r($students);

echo "<br><br>";
arsort($students);
echo "<h2>array after descending sorting (arsort):</h2>";
print_r($students);
?>

