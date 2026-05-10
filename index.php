<!DOCTYPE HTML>
<html>
    <head>
        <title>placeholder</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input required type="number" name="num1" placeholder="FIRST_NUMBER">
            <select name="op" id="op">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
                <option value="modulate">%</option>
                <option value="exponentiate">**</option>
            </select>
            <input required type="number" name="num2" placeholder="SECOND_NUMBER"><br>
            <button type="submit">Calculate</button>
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $bug=false;
            $num1=filter_input(INPUT_POST, "num1",FILTER_SANITIZE_NUMBER_FLOAT);
            $num2=filter_input(INPUT_POST, "num2",FILTER_SANITIZE_NUMBER_FLOAT);
            $operator=htmlspecialchars($_POST["op"]);
            if(!is_numeric($num1)||!is_numeric($num2)){
            $bug=true;
            echo "YOU SUCK";
        }
            if(empty($num1)||empty($num2)){
            $bug=true;
            echo "ACCESS DENIED";
        }
            if(empty($num1));
            switch($operator){;
                case "add":
                    $value=$num1 + $num2;
                    echo $value;
                    break;
                case "subtract":
                    $value=$num1 - $num2;
                    echo $value;
                    break;
                case "multiply":
                    $value=$num1*$num2;
                    echo $value;
                    break;
                case "divide":
                    $value=$num1/$num2;
                    echo $value;
                    break;
                case "modulate":
                    $value=$num1%$num2;
                    echo $value;
                    break;
                case "exponentiate":
                    $value=$num1**$num2;
                    echo $value;
                    break;
                default:
                    echo "FAIL!";
            }
        };
        //IT WORKS!
        ?>
    </body>
</html>