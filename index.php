<?php
include("functions.php");

if(userHasValidSelection()){
   $userChoice = $_GET['userSelect'];
   $computerChoice = ComputerChoose();
   $returnText = "The server chose ".$computerChoice.".";
   $result = compare($userChoice,$computerChoice);
   if($result == 0){
      $returnText .= ' The result is a Tie';
   }elseif($result == 1){
      $returnText .= ' You won!';
   }else{
     $returnText .=" The server won";
   }
}else{  
    $returnText ="You have not played yet.<br>Select your weapon and hit the Play button";
}    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock,Paper,Scissors</title>
    <style>
        .container{
            border:1px solid #000;
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            text-align:center;
            height:200px;
            padding:5px 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Rock, Paper, Scissors</h1>
        <form method="GET">
            <select name="userSelect">
                <option value="null">--</option>
                <option value="rock" <?php echo isSelected('rock');?>>Rock</option>
                <option value="paper" <?php echo isSelected('paper');?>>Paper</option>
                <option value="scissors" <?php echo isSelected('scissors');?>>Scissors</option>
            </select>
            <input type="submit" value="Play">
        </form>
        <p><?php echo $returnText ?></p>
    </div>
    
</body>
</html>