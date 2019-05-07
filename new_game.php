<?php

        
        $i=array();
        
        while(count($i)<4) 
        { 
        $nu=rand(0,9); 
        if(!in_array($nu,$i)) 
        { 
        $i[]=$nu;  
        } 
        } 
        $fin_answer = $i;

        setcookie("answer", implode(",",$fin_answer), time()+1800);

?>

<html>

    <head><meta charset="UTF-8"/>
    <title>猜數字遊戲</title>
        
    </head>
    <body bgcolor=olive>

    <h2 align=center><b>遊戲規則說明：</b></h2>
    <hr align=center width=50%>
        <p align=center>現在電腦已想好了一個4位數(數字0~9且不重複)請你猜猜看，<br>
        猜完後我會給你一個提示，例如：1A2B，<br>
        表示其中有1個數字不但猜對了，位置也正確，<br>
        另有2個數字被猜中了，但位置不正確，<br>
        請用最少的次數把這個數猜出來吧！<br>
        </p>
            
<form align=center action="check_answer.php" method="get">
    　<input type="text" name="guess">
    <input style="display: none" type="text" name="total_results" value="" >
    　<input type="submit" name="Send" value="送出">
    </form>
    </body>
</html>
   