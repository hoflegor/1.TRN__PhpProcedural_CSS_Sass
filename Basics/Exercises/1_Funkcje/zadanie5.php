<?php

function rockPaperScissors ($player1,$player2){
    if ($player1 == $player2) {
        $result="Draw";
    }
    else if (($player1=="paper") && ($player2=="rock")){
        $result="Player 1 win";
    }
    else if (($player1=="paper") && ($player2=="scissors")){
        $result="Player 2 win";
    }
    else if (($player1=="scissors") && ($player2=="paper")){
        $result="Player 1 win";
    }
    else if (($player1=="scissors") && ($player2=="rock")){
        $result="Player 2 win";
    }
    else if (($player1=="rock") && ($player2=="scissors")){
        $result="Player 1 win";
    }
    else if (($player1=="rock") && ($player2=="paper")){
        $result="Player 2 win";
    }
    else {
        $result = "Wrong input";
    }
    return $result;
}
echo rockPaperScissors ("rock","rock");

/* DANIELA
function($player0,$player1) {
    foreach ([$player0,$player1] as $key => $player) {
        if(
            $player != "rock" and
            $player != "paper" and
            $player != "scissors"
        ) {
            return "Wrong input";
        } elseif (
            $player == "rock" && ${"player".(($key+1) % 2)} == "scissors";
            $player == "scissors" && ${"player".(($key+1) % 2)} == "paper";
            $player == "paper" && ${"player".(($key+1) % 2)} == "rock";
        ) {
            return "Player" . ($key+1) . "win";
        }
    }
    if($player0 == $player1) {
        return "Draw";
    }
}
//$test = true;
//$test2 =  true;
//foreach ([$p1,$p2] as $p) {
//    foreach (["s","p","r"] as $word) {
//        $test = $test || ($p == $word);
//    }
//    $test2 = $test2 && $test;
//}*/
