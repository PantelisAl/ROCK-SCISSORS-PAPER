<?php
  function userHasValidSelection(){
    return isset($_GET['userSelect']) && in_array($_GET['userSelect'],["rock","paper","scissors"]);
  }

   function isSelected($choice){
       if(isset($_GET['userSelect']) && $_GET['userSelect'] === $choice ){
             return 'selected';
       }
   }

   function ComputerChoose(){
      $numberChoice = rand(0,2);
      
      switch($numberChoice){
         case 0:
            return "rock";
            break;
         case 1:
            return "paper";
            break;
         case 2:
            return "scissors";
            break;      
      } 
   }

   function compare($choice1,$choice2){
       
        if($choice1 === $choice2){
            return 0;
        }

        if($choice1 === 'rock'){
            if($choice2 === 'scissors'){
                return 1;
            }else{
                return 2;
            }
        }

        if($choice1 === 'paper'){
            if($choice2 === 'rock'){
                return 1;
            }else{
                return 2;
            }
        }

        if($choice1 === 'scissors'){
            if($choice2 === 'paper'){
                return 1;
            }else{
                return 2;
            }
        }
    
    }
   
?>