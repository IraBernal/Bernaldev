<html> 
    <head> 
        <title> My web page </title>
            <link rel="stylesheet" href="css/styles.css"/>
    </head>
    <body>
       
        <div class="main-navigation">
            <a href="index.php"> Home </a> <br>
            <a href="index.php?page=about-us"> About Us </a> /
            <a href="index.php?page=mission-vision"> Mission and Vision </a> /
            <a href="index.php?page=gallery"> Gallery </a> /            
        </div>

        <div class="container">
            <?php
                switch(@$_GET["page"])
                {
                    case "about-us":
                        include("about-us.php");
                        break;
                    case "mission-vision":
                        include("mission-vision.php");
                        break;
                    case "gallery":
                        include("gallery.php");
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