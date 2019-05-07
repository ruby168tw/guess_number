<?php
$answer = $_COOKIE["answer"];
$fin_answer = explode(",", $answer);

$guess = $_GET['guess'];
$guess1 = (string)$guess;
$space = " ";
$guess2 = substr($guess1,0,1).$space.substr($guess1,1,1).$space.substr($guess1,2,1).$space.substr($guess1,3,1);
$fin_guess = explode(" ", $guess2);


$count_num = 0;
for ($x = 0; $x < 4; $x++){
    
    $y = 0;
    for ($y = 0; $y < 4; $y++){
        if ($fin_answer[$x] == $fin_guess[$y]){
            $count_num++;
        }
    }
    
}


$count_possion = 0;
for ($z = 0; $z < 4; $z++){
    if ($fin_answer[$z] == $fin_guess[$z]){
        $count_possion++;
    }
}
$count_num = $count_num-$count_possion;
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>猜數字遊戲</title>
</head>
<body bgcolor="olive">
<p align=center>
<?php if ($count_possion == 4 and $count_num == 0){ 
    echo "Bingo! You got the right answer!<br>\n";
    echo '<a href="new_game.php">new game</a><br>';
    setcookie("answer", "", time()-1800); ?>
    </p>









<?php }else{ ?>
    <p align=center>
    <?php echo $count_possion."A".$count_num."B"."<br\n>"; ?>
    <?php $first_result = $_GET["guess"].",".$count_possion."A".$count_num."B"."<br>\n";?>
    <?php $total_results = $_GET["total_results"].$_GET["guess"].",".$count_possion."A".$count_num."B"."<br>\n"; ?>

    <form align=center action="keep_guess.php" method="get">
    　<input style="display:none" type="text" name="first_result" value="<?php echo $first_result ?>" ><br>
    <input style="display:none" type="text" name="total_results" value="<?php echo $total_results ?>" ><br>
      
    　<input type="submit" name="Send" value="try again">
    </form>

    <p align=center>
    目前結果：
    <hr align=center width=50%>
    <p align=center>
    <?php echo $total_results ?>
    </p>



    <?php } ?>




<p align=center>
答案：
<?php echo $_COOKIE["answer"] ?><br>
</p>








</body>
</html>



