<?php

session_start();
$customer_id = $_SESSION['customer_id'];
require('../controllers/cart_controller.php');
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Order details</title>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta property="og:title" content="Vide" />
        <meta name="keywords" content="Loozeelee Initiative" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="../css/style.css" rel='stylesheet' type='text/css' />
        <!-- js -->
        <script src="../js/jquery-1.11.1.min.js"></script>
        <!-- //js -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="../js/move-top.js"></script>
        <script type="text/javascript" src="../js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){    
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        <link href="../css/font-awesome.css" rel="stylesheet"> 
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
        <!--- start-rate---->
        <script src="../js/jstarbox.js"></script>
            <link rel="stylesheet" href="../css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
                <script type="text/javascript">
                    jQuery(function() {
                    jQuery('.starbox').each(function() {
                        var starbox = jQuery(this);
                            starbox.starbox({
                            average: starbox.attr('data-start-value'),
                            changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                            ghosting: starbox.hasClass('ghosting'),
                            autoUpdateAverage: starbox.hasClass('autoupdate'),
                            buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                            stars: starbox.attr('data-star-count') || 5
                            }).bind('starbox-value-changed', function(event, value) {
                            if(starbox.hasClass('random')) {
                            var val = Math.random();
                            starbox.next().text(' '+val);
                            return val;
                            }
                        })
                    });
                });
                </script>
        <!---//End-rate---->

    <style> 
        body {
            background: #555;
        }
        input {
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
           
        }
        .content{
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 10px;
           
        }
        .order,.form{
            margin-left: 150px;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="logo">
            <h1 ><a href="index.php"></b>LooZeeLee<span style="color:green">Act Transform Sustain</span></a></h1>
        </div>
    </div>

</div>

<?php
if (isset($_POST['checkout'])){
    $fullName = $_POST['Fname']." ".$_POST['Lname'];
    $customer_email = $_POST['email'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $order_status = 'Pending';
    $invoice_no = rand(1,100);
    $order_date = date("Y-m-j");
    $order = add_orders($customer_id, $invoice_no, $order_date, $order_status);
    ?>
    <div class ="content">
        <div class="order">
        <h3 style="color:black">Order Summary</h3>
            <div><?php echo 'Invoice Number: '. $invoice_no;?></div>
            <div><?php echo 'Order Status: '. $order_status; ?></div>
        </div>
       
        <div class="form">
            <form action="initialize.php" method ="post">
                <h3 style="color:black">Shipping Details</h3>
                <input type="text" value ="<?php echo $fullName;?>">
                <input type="email" name ="email" value ="<?php echo  $customer_email;?>">
                <input type="text" value ="<?php echo $country;?>">
                <input type="text" value ="<?php echo $city;?>">
                <input type="text" value ="<?php echo $address;?>">
                <input type="text" value="<?php echo $contact;?>"> <br>
                <a href="checkout.php">Edit Details</a>
                </button>
                <button type="submit" name ="pay"> Pay</button>

            </form>
        </div>

    </div>
   
<?php
}
?>