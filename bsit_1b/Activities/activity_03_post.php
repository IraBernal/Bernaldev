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
            <label> First Name </label> <br>
            <input type="text" name="txtFirstName" placeholder="First Name..."><br>
            <label> Last Name </label> <br>
            <input type="text" name="txtLastName" placeholder="Last Name..."><br>
            <label> Civil Status </label> <br>
            <select name="CivilStatus">
                <option value="Single"> Single </option>
                <option value="Married"> Married </option>
                <option value="Divorced"> Divorced </option>
             </select><br>
             <label> Date of Birth </label><br>
             <input type="date" class="form-control" name="txtDOB"><br>
            <label> Address </label> <br>
            <textarea rows="10" class="form-control"
                    cols="25" name="txtAreaAddress" placeholder="Address..."></textarea><br>
            <input class="btn" type="submit" name="btnSubmit" value="Submit" />
            <input class="btn" type="reset" value="Clear" /><br>
        </form>
    </body>
</html>