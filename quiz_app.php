<?php
// Terminal-Based Quiz Application
$score = 0;
echo "==== Welcome to Quiz ====\n";
echo "1. Which symbol is used to declare a variable in PHP?\na) ? b) # c) $\nChoose your option(a/b/c): ";
// Q1
$answer1 = trim(fgets(STDIN));
if($answer1 == 'c'){
    echo "Correct answer.\n";
    $score++;
}else{
    echo "Wrong answer. Correct answer is (c)\n";
}
// Q2
echo "2. What is the capital of Bangladesh?\na) Dhaka b) Delhi c) Paris\nChoose your option(a/b/c): ";

$answer2 = trim(fgets(STDIN));
if($answer2 == 'a'){
    echo "Correct answer.\n";
    $score++;
}else{
    echo "Wrong answer. Correct answer is (a)\n";
}
// Q3
echo "3. What is the correct answer for 2 + 2?\na) 2 b) 4 c) 6\nChoose your option(a/b/c): ";

$answer3 = trim(fgets(STDIN));
if($answer3 == 'b'){
    echo "Correct answer.\n";
    $score++;
}else{
    echo "Wrong answer. Correct answer is (b)\n";    
}

echo "==== Quiz finished ====\n";
echo "You scored $score out of 3.\n";

?>
