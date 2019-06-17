<?php
//Prompts the user to enter a value: R, P or S
//function userSelection() {
//    echo "Please enter a value: R, P or S?\n";
    $userChoice = $_REQUEST["choice"];

    //        • The program should convert this value into Rock, Paper, or Scissors respectively
    if ($userChoice == "R"){
        $userChoice = "Rock";
    }else if($userChoice == "P"){
        $userChoice = "Paper";
    }else if ($userChoice == "S"){
        $userChoice = "Scissors";
    }
//}
//        • Asks the computer to generate a random value between 0 and 2
//function computerSelection() {
    $computerChoice = rand(0,2);

    //        • Convert the computer’s choice. 0 becomes Rock; 1 becomes Paper; 2 becomes Scissors
    if ($computerChoice == 0){
        $computerChoice = "Rock";
    }else if($computerChoice == 1){
       $computerChoice = "Paper";
    }else if($computerChoice == 2){
        $computerChoice = "Scissors";
    }
//    echo "$computerChoice.\n";
//}
//        • Compare the user’s choice with the computer’s choice to display a message indicating 
//        whether the user won, lost or drew against the computer

function doTheGame($selection1,$selection2){
    if ($selection1 == $selection2){
        sleep(2);
        echo "It is a draw. You=$selection1 Computer=$selection2";
    }
    elseif($selection1 == "Rock"){
        if($selection2 == "Scissors"){
            sleep(2);
            echo "You win. You=$selection1 Computer=$selection2";
            }
        else if ($selection2 == "Paper"){
            sleep(2);
            echo "You lost. You=$selection1 Computer=$selection2";
            }
        }
        
    else if($selection1 == "Scissors"){
        if($selection2 == "Paper"){
            sleep(2);
            echo "You win. You=$selection1 Computer=$selection2";
        }
        else if($selection2 == "Rock"){
            sleep(2);
            echo "You lost. You=$selection1 Computer=$selection2";
        }
    }
   
    else if($selection1 == "Paper"){
        if($selection2 == "Rock"){
            sleep(2);
            echo "You win. You=$selection1 Computer=$selection2";
        }
        else if ($selection2 == "Scissors"){
            sleep(2);
            echo "You lost. You=$selection1 Computer=$selection2";
        }
    }
}
// show the the result
doTheGame($userChoice,$computerChoice);
    

// Try three more times

//for ($counter = 0; $counter <3 ; $counter++){
//    userSelection();
//    computerSelection();
//    doTheGame($userChoice,$computerChoice);
//    echo "this is a test";
//}
?>