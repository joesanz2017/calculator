<!DOCTYPE html>
<html>
<title>CostSMART</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="calc3style.css">
<link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Lato", sans-serif
    }

    .w3-bar,
    h1,
    button {
        font-family: "Montserrat", sans-serif
    }

    .fa-anchor,
    .fa-coffee {
        font-size: 200px
    }
</style>

<body>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-red w3-card-2 w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);"
                onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="https://192.168.0.6/calc3.html" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
            <a href="https://www.amazon.com/" target="_blank"class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Amazon</a>
            <a href="https://www.ebay.com/" target="_blank" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Ebay</a>
            <a href="https://www.egifter.com/" target="_blank" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">eGifter</a>
            <a href="https://www.overstock.com/?&cid=52085&kid=43700008213223345&TRACK=PSGGL&mkwid=s&pcrid=223933210265&pmt=e&pdv=c&mtrckid=17394at10470&gclid=CjwKCAjw4KvPBRBeEiwAIqCB-bbFfdpGpU2L1N0SoMzynLIN0_ZxoXljuDtTHrm6ayZq39QW5P9RThoCd_UQAvD_BwE&gclsrc=aw.ds&dclid=CMikwbu1g9cCFQQMPwodTZEP_w" Target="-blank" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Overstock</a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="https://www.amazon.com/" target="_blank"" class="w3-bar-item w3-button w3-padding-large">Amazon</a>
            <a href="https://www.ebay.com/" target="_blank"" class="w3-bar-item w3-button w3-padding-large">Ebay</a>
            <a href="https://www.egifter.com/" target="_blank"" class="w3-bar-item w3-button w3-padding-large">eGift</a>
            <a href="https://www.overstock.com/?&cid=52085&kid=43700008213223345&TRACK=PSGGL&mkwid=s105023720672481&pcrid=77271692964&pmt=e&pdv=c&mtrckid=17394at10470&gclid=CjwKCAjw4KvPBRBeEiwAIqCB-cE2seQl2ScIDTX2_aDAL9R6mqKRblsJkZPYU7zSvZROeszXYHpYXRoCTaYQAvD_BwE&gclsrc=aw.ds&dclid=CM-EwrK4g9cCFVUoaQodWaAMGQ" target="_blank" class="w3-bar-item w3-button w3-padding-large">Overstock</a>
        </div>
    </div>

    <!-- Header -->
    <header class="w3-container w3-red w3-center" style="padding:128px 16px">
        <h1 class="titulo">CostSMART</h1>
        <p class="w3-xlarge">Estimate Before You Buy!</p>
        <button class="w3-button w3-white w3-padding-large w3-large w3-margin-top" style="border-radius:10px"><a href="#totalis">See the cost</a></button>
    </header>

    <!-- First Grid -->
   
          
    

    <!-- Second Grid -->
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div id="totalis"></div>
    <div class= "total">
    
    <?php
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $tax = $_POST['tax'];
    $shipping = $_POST['shipping'];

    $total = $price * $quantity;
    $total = $total + $shipping;
    $total = $total - $discount;

     $taxrate = $tax/100;
     $taxrate = $taxrate + 1;

     $total = $total*$taxrate;
       
     print "The total of your purchase is $". $total

     ?>
     
     </div>
    </div>

    <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
        <h1 class="w3-margin w3-xlarge">Spend with Freedom!</h1>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity">
        <div class="w3-xlarge w3-padding-32">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
       
    </footer>

    <script>
        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>

</body>

</html>
c