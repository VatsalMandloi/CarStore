<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/title.jpg" />
    <title>car Store</title>
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
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Car Store!</h1>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/swift.jpg" alt="Maruti Swift">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Maruti Swift</h3>
                                <p>Price: Rs. 560000.00</p>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"  style="margin-bottom:10px;">
  Details
</button>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        fuel type: Petrol<br> Mileage:25kmpl<br>
        seating capacity:5<br>
        displacement: 1.3l<br>
        boot space: 237l
      </div>
    </div>
  </div>
</div>

                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add"
                                    class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                            }
                                        }
                                        ?>

                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/tiago.jpeg" alt="Tata Tiago">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Tata Tiago</h3>
                                <p>Price: Rs. 440000.00</p>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"  style="margin-bottom:10px;">
  Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        fuel type: Petrol<br> Mileage:19kmpl<br>
        seating capacity:5<br>
        displacement: 1.3l<br>
        boot space: 256l
      </div>
    </div>
  </div>
</div>


                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add"
                                    class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/alto.jpeg" alt="Maruti Alto">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Maruti Alto</h3>
                                <p>Price: Rs. 360000.00</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"  style="margin-bottom:10px;">
  Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        fuel type: Petrol<br> Mileage:22kmpl<br>
        seating capacity:5<br>
        displacement: 0.8l<br>
        boot space: 126l
      </div>
    </div>
  </div>
</div>

                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add"
                                    class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/wagonr.jpg" alt="Maruti WagonR">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Maruti WagonR</h3>
                                <p>Price: Rs. 324000.00</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"  style="margin-bottom:10px;">
  Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        fuel type: Petrol,CNG<br> Mileage:24kmpl<br>
        seating capacity:5<br>
        displacement: 1.3l<br>
        boot space: 207l
      </div>
    </div>
  </div>
</div>

                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add"
                                    class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/dezire.jpg" alt="Maruti Dezire">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Maruti Dezire</h3>
                                <p>Price: Rs. 740000.00</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"  style="margin-bottom:10px;">
  Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        fuel type: Petrol,deisel,CNG<br> Mileage:26kmpl<br>
        seating capacity:5<br>
        displacement: 1.3l<br>
        boot space: 278l
      </div>
    </div>
  </div>
</div>

                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add"
                                    class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/amaze.jpg" alt="Honda Amaze">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Honda Amaze</h3>
                                <p>Price: Rs. 699000.00</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"  style="margin-bottom:10px;">
  Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        fuel type: Petrol,deisel<br> Mileage:22kmpl<br>
        seating capacity:5<br>
        displacement: 1.2l<br>
        boot space: 278l
      </div>
    </div>
  </div>
</div>

                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add"
                                    class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/aspire.JPG" alt="Ford Aspire">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Ford Aspire</h3>
                                <p>Price: Rs. 780000.00</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"  style="margin-bottom:10px;">
  Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        fuel type: Petrol,deisel,CNG<br> Mileage:17kmpl<br>
        seating capacity:5<br>
        displacement: 1.1l<br>
        boot space: 248l
      </div>
    </div>
  </div>
</div>

                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add"
                                    class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/brezza.jpg" alt="Maruti Vitara Brezza">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Maruti Vitara Brezza</h3>
                                <p>Price: Rs. 108000.00</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"  style="margin-bottom:10px;">
  Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        fuel type: Petrol<br> Mileage:24kmpl<br>
        seating capacity:5<br>
        displacement: 1.3l<br>
        boot space: 297l
      </div>
    </div>
  </div>
</div>

                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add"
                                    class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/thar.jpg" alt="Mahindra Thar">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Mahindra Thar</h3>
                                <p>Price: Rs. 1545000.00</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"  style="margin-bottom:10px;">
  Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        fuel type: Petrol,diesel<br> Mileage:12kmpl<br>
        seating capacity:6<br>
        displacement: 2.0l<br>
        boot space: 105l
      </div>
    </div>
  </div>
</div>

                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add"
                                    class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/xuv300.jpg" alt="Mahindra XUV300">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Mahhindra XUV300</h3>
                                <p>Price: Rs. 1540000.00</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"  style="margin-bottom:10px;">
  Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        fuel type: Petrol,diesel<br> Mileage:18kmpl<br>
        seating capacity:5<br>
        displacement: 1.5l<br>
        boot space: 154l
      </div>
    </div>
  </div>
</div>

                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add"
                                    class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/nexon.jpg" alt="Tata Nexon">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Tata Nexon</h3>
                                <p>Price: Rs. 1200000.00</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"  style="margin-bottom:10px;">
  Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        fuel type: Petrol,diesel<br> Mileage:21kmpl<br>
        seating capacity:5<br>
        displacement: 1.2l<br>
        boot space: 256l
      </div>
    </div>
  </div>
</div>

                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add"
                                    class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/duster.jpg" alt="Renault Duster">
                        </a>
                        <center>
                            <div class="caption">
                                <h3>Renault Duster</h3>
                                <p>Price: Rs. 890000.00</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"  style="margin-bottom:10px;">
  Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        fuel type: Petrol,diesel<br> Mileage:14kmpl<br>
        seating capacity:5<br>
        displacement: 2.0l<br>
        boot space: 306l
      </div>
    </div>
  </div>
</div>

                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add"
                                    class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
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