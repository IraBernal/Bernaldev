<html> 
    <head> 
        <title> ACTIVITY 04 </title>
        <style>
            .form-control {
                font-family: Verdana;
            }
            .btn {
                background-color:#0955b8;
                color: white;
                border: solid;
            }
            .btn:hover {
                background-color: white;
                color: #0955b8;
            }
        </style>
    </head>

    <body>
        <?php
        if (isset($_POST["btnSubmit"])){
            if($_POST["Operation"]=="+"){
                $ans = $_POST["Num1"] + $_POST["Num2"];
            }
            if($_POST["Operation"]=="-"){
                $ans = $_POST["Num1"] - $_POST["Num2"];
            }
            if($_POST["Operation"]=="*"){
                $ans = $_POST["Num1"] * $_POST["Num2"];
            }
            if($_POST["Operation"]=="/"){
                $ans = $_POST["Num1"] / $_POST["Num2"];
            }
            echo $ans ;
            echo  "<a href='activity_04.php'> Back</a>";
        } else {
        ?>
        <form method="post" action="activity_04.php">
            <label> Operation (+ for addition, - for subtraction, * for multiplication, / for division) </label> <br>
             <input type="text" class="form-control" name="Operation"><br>
             <label> Variable 1 </label><br>
             <input type="number" class="form-control" name="Num1"><br>
             <label> Variable 2 </label><br>
             <input type="number" class="form-control" name="Num2"><br>
            <input type="submit" name="btnSubmit" value="Submit" />             
        </form>
        <?php } ?>
    </body>
</html>