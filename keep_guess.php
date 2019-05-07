<?php
$first_result = $_GET["first_result"];
$total_results = $_GET["total_results"];






?>









<html>
    <head><meta charset="UTF-8"/>
    <title>猜數字遊戲</title>
        
    </head>
    <body bgcolor=olive>
    <h2 align=center><b>Keep Guess</b></h2>
    <hr align=center width=50%>


    
            
<form align=center action="check_answer.php" method="get">
    　<input type="text" name="guess">
    <input style="display: none" type="text" name="total_results" value="<?php echo $total_results ?>">
    　<input type="submit" name="Send" value="送出">
      
      
    </form>

    <p align=center>
    目前結果：<br>
    <?php echo $total_results; ?>
    </p>
    </body>
</html>


