<?php
$apollo1 = $_POST['apollo1'];
$armstrong = $_POST['armstrong'];
$jfk = $_POST['jfk'];
$spacestation = $_POST['spacestation'];
$grade = $_POST['grade'];

echo "<p>Question 1: Which of the following astronauts did not perish in the Apollo 1 mission?</p>";
echo "<p>   You answered: " . $apollo1 . "</p>";
echo "<p>   Correct answer: Frank Borman</p><br>";

echo "<p>Question 2: Which spaceflight, piloted by Neil Armstrong, had a spacecraft thruster malfunction causing a near-fatal tumbling of the craft?</p>";
echo "<p>   You answered: " . $armstrong . "</p>";
echo "<p>   Correct answer: Gemini 8</p><br>";

echo "<p>Question 3: Which university did John F. Kennedy give his famous \"We choose to go to the Moon\" speech?</p>";
echo "<p>   You answered: " . $jfk . "</p>";
echo "<p>   Correct answer: Rice University</p><br>";

echo "<p>Question 4: What was the first space station?</p>";
echo "<p>   You answered: " . $spacestation . "</p>";
echo "<p>   Correct answer: Salyut 1</p><br>";

echo "<p>Question 5: What grade will Truan Leiker get on Lab 9?</p>";
echo "<p>   You answered: " . $grade . "</p>";
echo "<p>   Correct answer: 100%</p><br>";
echo "<br>";

$score = 0;

if ($apollo1 == "Frank Borman") {
    $score++;
}
if ($armstrong == "Gemini 8") {
    $score++;
}
if ($jfk == "Rice University") {
    $score++;
}
if ($spacestation == "Salyut 1") {
    $score++;
}
if ($grade == "100%") {
    $score++;
}

if ($score == 0) {
    echo "<p>Your score: 0%</p>";
} elseif ($score == 1) {
    echo "<p>Your score: 20%</p>";
} elseif ($score == 2) {
    echo "<p>Your score: 40%</p>";
} elseif ($score == 3) {
    echo "<p>Your score: 60%</p>";
} elseif ($score == 4) {
    echo "<p>Your score: 80%</p>";
} elseif ($score == 5) {
    echo "<p>Your score: 100%</p>";
}
?>