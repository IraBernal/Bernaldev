<html> 
    <head> 
        <title> My web page </title>
            <link rel="stylesheet" href="css/styles.css"/>
    </head>
    <body>
       
    <div class="header">
        <div class="main-navigation">
            / <a href="index.php"><span style="font-size: larger"> Home </span></a> / <br>
            <a href="index.php?page=projects"> Projects</a> /
            <a href="index.php?page=job-postings"> Job Postings</a> /
            <a href="index.php?page=testimonies"> Testimonies</a> /      
            <a href="index.php?page=contact-us"> Contact Us</a> /  
        </div>
    </div>

        <div class="container">
            <?php
                switch(@$_GET["page"])
                {
                    case "projects":
                        include("projects.php");
                        break;
                    case "job-postings":
                        include("job-postings.php");
                        break;
                    case "testimonies":
                        include("testimonies.php");
                        break;
                    case "contact-us":
                        include("contact-us.php");
                        break;
                    default:
                        include("home.php");
                        break;
                }
            ?>
            </div>
                <div class="footer">
                </div>
    </body>
</html>