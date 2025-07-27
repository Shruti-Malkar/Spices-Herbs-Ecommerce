<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spices Shopify</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="sss.css">
</head>
<body>
<!--header -->
 <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
         <!--jumbutron start-->
        <div class="jumbotron text-center" style="background-image:url('images/back1.jpg')">
            <h1>Welcome to Spices Shopify!</h1>
            <p>We have wide range of products for you.No need to hunt around,we have all in one place</p>
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
    <hr/>
    <!--menu list-->
    <div class="row text-center" id="watch">
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/spices1.jpg" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h4><b>Chilli</b></h4>
                    <p>Chilli may be beneficial for stiff joints, headache and cough.</p>
                    <h5>Price :Rs 150</h5>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(25)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=25" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/spices2.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h4><b>Cumin</b></h4>
                    <p>Cumin Promote Digestion, Weight Loss and Fat Reduction</p>
                    <h5>Price :Rs 539</h5>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(26)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                         } else {
                        ?>
                        <p><a href="cart-add.php?id=26" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                         }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/spices3.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h4><b>Turmeric Powder</b></h4>
                    <p>It is used for disorders of the skin, joints, and digestive system.</p>
                    <h5>Price :Rs 379</h5>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(27)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=27" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/spices4.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h4><b>Coriander Powder</b></h4>
		    <p>It is an appetite stimulant and aids in the secretion of gastric juices.</p>
                    <h5>Price :Rs 27</h5>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(28)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=28" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center" id="shirt">
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="images/spices5.jpg" alt="" class="img-fluid pb-1"  >
                    <div class="figure-caption">
                    <h4><b>Cardamom</b></h4>
		    <p>It aids digestion, helps to control blood pressure.</p>
                    <h5>Price :Rs 499</h5>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(29)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=29" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/spices6.jpg" alt="" class="img-fluid pb-1" >
                    <div class="figure-caption">
                    <h4><b>Ginger</b></h4>
		    <p>It improve Blood Sugar Levels & reduce Inflammation</p>
                    <h5>Price :Rs 80</h5>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(30)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=30" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/spices7.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h4><b>Garlic Powder</b></h4>
		        <p>It helps body to digest our food well and regulate the bowel movements. </p>
                        <h5>Price :Rs 214</h5>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(31)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=31" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="images/spices8.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h4><b>Bay Leaves</b></h4>
		        <p>Bay leaves can help you lower your blood pressure. </p>
                        <h5>Price :Rs 200</h5>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(32)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=32" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="shoes" >
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/spices9.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h4><b>Cinnamon Powder</b></h4>
		            <p>Cinnamon can boost antioxidant levels in your blood.</p>
                            <h5>Price :Rs 455</h5>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(33)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=33" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/spices10.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h4><b>Clove</b></h4>
		            <p>Clove help to protect against cancer & It kill Bacteria.</p>
                            <h5>Price :Rs 223</h5>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(34)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                     <p><a href="cart-add.php?id=34" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                     <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/spices11.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h4><b>Black Pepper</b></h4>
		            <P> It helps To Control Blood Sugar Levels and it boosts immunity</p>
                            <h5>Price :Rs 200</h5>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(35)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=35" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3" >
                    <div class="card">
                        <img src="images/spices12.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                        <h4><b>Mustard Seeds</b></h4>
		        <p>Help to reduce headaches, improve digestion, strengthen bones & teeth.</p>
                    <h5>Price :Rs 90</h5>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(36)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=36" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
            
      </div>
      <!--menu list ends-->
      <!-- footer-->
        <?php include 'includes/footer.php'?>
      <!--footer ends-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</html>