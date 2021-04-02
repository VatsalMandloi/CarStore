<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/title.jpg" />
    <title>Car Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
 
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
 
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
   
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div>
        <?php
            require 'header.php';
           ?>
        <div id="bannerImage">
            <div class="container">
                <center>
                    <div id="bannerContent">
                        <h1>CARS FOR All .</h1>
                        <p>SMILE AHEAD</p>
                        <a href="products.php" class="btn btn-danger">Smile Now</a>
                    </div>
                </center>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/swift.jpg" alt="Hatchback">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Hatchback</p>
                                <p>Explore Around Urban Jungle.</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/dezire.jpg" alt="Sedan">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Sedan</p>
                                <p>Have An Opulent Ride.</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/thar.jpg" alt="SUV">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">SUV</p>
                                <p>Explore Unexplored.</p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <br><br> <br><br><br><br>
        <footer class="footer">
            <div class="container">
                <center>
                    <p>ADDRESS:
                    </p>
                    <p>SCSIT DAVV Takshila Parisar INDORE.</p>
                </center>
            </div>
        </footer>
    </div>
</body>

</html>