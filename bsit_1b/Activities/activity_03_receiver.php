<html> 
    <head> 
        <title> ACTIVITY 03 </title>
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
        <form method="post" action="activity_03_receiver.php">
            <label> First Name </label><br>
            <strong> <?php echo $_POST["txtFirstName"]?></strong><br><br>
            <label> Last Name </label><br>
            <strong> <?php echo $_POST["txtLastName"]?></strong><br><br>
            <label> Civil Status </label><br>
            <strong> <?php echo $_POST["CivilStatus"]?></strong><br><br>
            <label> Date of Birth </label><br>
            <strong> <?php echo $_POST["txtDOB"]?></strong><br><br>
            <label> Address </label><br>
            <strong> <?php echo $_POST["txtAreaAddress"]?></strong><br>
        </form>           
        <?php echo "<a href='activity_03_post.php'> Back</a>"; ?>

    </body>
</html>