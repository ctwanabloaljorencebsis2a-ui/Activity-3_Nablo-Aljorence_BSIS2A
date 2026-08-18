<?php
echo "<h2>Grade Evaluator</h2>";
echo "<hr>";

$nablo_subject1 = 91;
$nablo_subject2 = 93;
$nablo_subject3 = 92;
$nablo_subject4 = 95;
$nablo_subject5 = 90;

$nablo_average = (
    $nablo_subject1 +
    $nablo_subject2 +
    $nablo_subject3 +
    $nablo_subject4 +
    $nablo_subject5
) / 5;

if ($nablo_average >= 74.5) {
    $nablo_remarks = "Passed";
} else {
    $nablo_remarks = "Failed";
}

if ($nablo_average >= 90 && $nablo_average <= 100) {
    $nablo_letter_grade = "A";
} elseif ($nablo_average >= 80 && $nablo_average <= 89) {
    $nablo_letter_grade = "B";
} elseif ($nablo_average >= 70 && $nablo_average <= 79) {
    $nablo_letter_grade = "C";
} elseif ($nablo_average >= 60 && $nablo_average <= 69) {
    $nablo_letter_grade = "D";
} else {
    $nablo_letter_grade = "F";
}

echo "Subject 1: " . $nablo_subject1 . "<br>";
echo "Subject 2: " . $nablo_subject2 . "<br>";
echo "Subject 3: " . $nablo_subject3 . "<br>";
echo "Subject 4: " . $nablo_subject4 . "<br>";
echo "Subject 5: " . $nablo_subject5 . "<br>";
echo "Average Grade: " . $nablo_average . "<br>";
echo "Remarks: " . $nablo_remarks . "<br>";
echo "Letter Grade: " . $nablo_letter_grade;

?>
