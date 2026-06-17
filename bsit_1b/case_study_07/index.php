<html> 
    <head> 
        <title> Log-In </title>
            <link rel="stylesheet" href="css/styles.css"/>
    </head>
    <body>
       
            <?php
        if (isset($_POST["btnSubmit"])){

            if ($_POST["username"]=="admin" && $_POST["password"]=="123") 
            {
                include("login-success.php");
            } 
            else {
                include("login-fail.php");
            
            }
            echo "<br><a href='index.php'>Back</a>";
        }
        else
        {
             ?>

        <form method="post">
            <label> Username </label> <br>
            <input type="text" name="username" placeholder="Enter Username"><br><br>
            <label> Password </label> <br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>
            <input class="btn" type="submit" name="btnSubmit" value="Submit" />
            <input class="btn" type="reset" value="Clear" /><br>
        </form>
    <?php
        }
        ?>
        
                <div class="footer">
                </div>
    </body>
</html>