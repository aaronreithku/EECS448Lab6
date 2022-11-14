<?php 
    $q1_ans = $_POST["ku_lastWin"];
    $q2_ans = $_POST["ku_drafted"];
    $q3_ans = $_POST["ku_coachWins"];
    $q4_ans = $_POST["ku_points"];
    $q5_ans = $_POST["ku_sousas"]; 

    $score = 0;

    if($q1_ans == "2022")
    {
        $q1_correct = true;
        $score += 20;
    }
    else
    {
        $q1_correct = false;
    }

    if($q2_ans == "2")
    {
        $q2_correct = true;
        $score += 20;
    }
    else
    {
        $q2_correct = false;
    }

    if($q3_ans == "Phog Allen")
    {
        $q3_correct = true;
        $score += 20;
    }
    else
    {
        $q3_correct = false;
    }

    if($q4_ans == "Ochai Agbaji")
    {
        $q4_correct = true;
        $score += 20;
    }
    else
    {
        $q4_correct = false;
    }

    if($q5_ans == "6")
    {
        $q5_correct = true;
        $score += 20;
    }
    else
    {
        $q5_correct = false;
    }

    $num_correct = $score/20;

    echo "<body style='background-color:Dodgerblue'>";
    echo"
        <center>
        <h1>KU Basketball Quiz</h1>
        <p> <strong>Question 1: When did the KU men's basketball team last win the NCAA tournament? </strong><br>
        &emsp; You answered: ".$q1_ans." <br>
        &emsp; Correct answer: 2022
        <p>
        <p> <strong>Question 2: How many KU players were drafted in the 2022 NBA Draft? </strong><br>
        &emsp; You answered: ".$q2_ans." <br>
        &emsp; Correct answer: 2
        <p>
        <p> <strong>Question 3: Who is the alltime wins leader for KU basketball? </strong><br>
        &emsp; You answered: ".$q3_ans." <br>
        &emsp; Correct answer: Phog Allen
        <p>
        <p> <strong>Question 4: Who led the 2022 Men's Team in Scoring? </strong><br>
        &emsp; You answered: ".$q4_ans." <br>
        &emsp; Correct answer: Ochai Agbaji
        <p>
        <p> <strong>Question 5: Traditionally, how many sousaphone players are in the pep band at a men's game? </strong><br>
        &emsp; You answered: ".$q5_ans." <br>
        &emsp; Correct answer: 6
        <p>
        <br>
        <p> Answers Correct: ".$num_correct."/5 <br>
        Score: ".$score."% <br>
    </center>
    ";
    echo "</body>";
?> 