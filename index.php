<html>
    <head>
        <title>Calculator RECODE v0.2</title>
        <meta charset="UTF-8">
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <!--The line above is for a failed favicon feature; don't mind it.-->
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input required type="number" name="num1" placeholder="FIRST_NUMBER">
            <select name="specops">
                <option value="sum">+</option>
                <option value="diff">-</option>
                <option value="prd">*</option>
                <option value="div">/</option>
                <option value="mod">%</option>
                <option value="exp">**</option>
                <option value="abs-sum">|+|</option>
                <option value="abs-diff">|-|</option>
                <option value="rad">√</option>
                <option value="prob">?</option>
            </select>
            <input required type="number" name="num2" placeholder="SECOND_NUMBER"><br>
            <button>DO THE MATHS</button>
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $num1=filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
            $num2=filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
            $ops=htmlspecialchars($_POST["specops"]);
            $breach=false;
            if(empty($num1)||empty($num2)||empty($ops)){
                echo "OH NONONNONONO WHAT IS THIS?";
                $breach=true;
            };
            if(!is_numeric($num1)||!is_numeric($num2)){
                echo "ACCESS DENIED";
                $breach=true;
            };
            if(!$breach){
                switch($ops){
                    case "sum":
                        $value=$num1+$num2;
                        echo $value;
                        break;
                    case "diff":
                        $value=$num1-$num2;
                        echo $value;
                        break;
                    case "prd":
                        $value=$num1*$num2;
                        echo $value;
                        break;
                    case "div":
                        $value=$num1/$num2;
                        echo $value;
                        break;
                    case "mod":
                        $value=$num1%$num2;
                        echo $value;
                        break;
                    case "exp":
                        $value=$num1**$num2;
                        echo $value;
                        break;
                    case "abs-sum":
                        $value=abs($num1+$num2);
                        echo "|".$value."|";
                        break;
                    case "abs-diff":
                        $value=abs($num1-$num2);
                        echo "|".$value."|";
                        break;
                    case "rad":
                        $value=$num1*sqrt($num2);
                        echo $value;
                        break;
                    case "prob":
                        $value=rand($num1,$num2);
                        echo $value;
                        break;
                    default:
                        echo "OMGWTFBBQ";
                        break;

                };
            };  
        };
        ?>
    </body>
</html>
