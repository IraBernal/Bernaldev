<html> 
    <head> 
        <title> ACTIVITY 02 </title>
    </head>

    <body>
        <?php
        if (isset($_GET["btnSubmit"])){
            echo "The name you entired is " .$_GET["txtName"]."</strong><br>";
            echo "<a href='activity_02.php'> Back</a>";
        } else {
        ?>
        <form method="get" action="activity_02.php">
            <label> Name </label> <br>
            <input type="test" name="txtName" id="txtName" placeholder="name...">
            <input type="submit" name="btnSubmit" value="Submit" />
        </form>
        <?php } ?>
    </body>
</html>