<?php
session_start();
require_once ("../controllers/cart_controller.php");
$amount = total_Amount_in_Cart();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title> Cart</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
                <div class="cart-btn mt-100">
                    <a href="../cart/payment.php" class="btn amado-btn w-100">Order</a> 
                </div>

    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
               
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.php"><img src="../images/roselogo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="../view/index.php"><img src="../images/roselogo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                <h3>
                    <?php echo "Total amount to be paid:  "."GHS ".$amount?>;
                </h3>

                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
               
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
              
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                
            </div>
        </header>
        <!-- Header Area End -->
        

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    
                 <?php
                 displayCart();
                 ?>
                </div>
            </div>
        </div>

     
    </div>
    <!-- ##### Main Content Wrapper End ##### -->



    

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <script>
        // const input = document.querySelector('input')
        // const val = document.getElementById('qty')

        // input.addEventListener('change',updatedValue)

        // const updatedValue  = (event) => {
        //     val.textContext = e.target.value
        //     console.log(val.textContext);
        // }

        const updateQuantity = (product_id) => {
            // alert(product_id);
            const qty = document.getElementById('qty').value
            // alert(qty);


            var url = "../actions/cart_action.php?updateID="+product_id+"&qty="+qty+"&type=updateqty"
            $.ajax({
                type: "GET",
                url: url,
                success: (res) => setInterval('location.reload()', 100),
                error: err => console.error(err)
            });
            
        }





    </script>

</body>

</html>