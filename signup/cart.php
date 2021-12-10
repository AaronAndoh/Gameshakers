<?php

include 'config.php'; //include database connection

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$query = "SELECT * from orders"; //selectinf from order tabl

$result = mysqli_query($conn,$query);

if (isset($_POST['delete'])){
   $iname=$_POST['name'];
    $delete = "DELETE FROM orders where item='$iname' ";
      
    if (mysqli_query($conn,$delete)) {
     echo "<script>alert('Deleted Sucessfully.')</script>";
          } else {
      echo 'error';
          
 }
 }

?> 
 



<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Product 1 Title, Product 2 Title, Product 3 Title">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Cart</title>
    <link rel="stylesheet" href="assets/css/nicepage.css" media="screen">
<link rel="stylesheet" href="assets/css/Cart.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/GS1.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Cart">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-palette-1-base u-header" id="sec-a81f"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1907" data-image-height="1302">
          <img src="./assets/GS1.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="../signup/home.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="../signup/Game.php" style="padding: 10px 0px;">Games</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="../signup/Accessories.php" style="padding: 10px 0px;">Accessories</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="../signup/console.php" style="padding: 10px 0px;">Consoles</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="../signup/Aboutus.php" style="padding: 10px 0px;">About Us</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-white u-text-grey-90 u-text-hover-grey-90" href="#" style="padding: 10px 0px;">Cart</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Games.html" style="padding: 10px 0px;">Games</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accessories.html" style="padding: 10px 0px;">Accessories</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Consoles.html" style="padding: 10px 0px;">Consoles</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About-us.html" style="padding: 10px 0px;">About Us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="£" style="padding: 10px 0px;">Cart</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Cart.html" style="padding: 10px 0px;">profile</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
      
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">Cart</h2>
</div>
<?php
$result = mysqli_query($conn,"SELECT * FROM orders");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class='tablemove'>
<table class='table' style="border: 0px solid white; border-collapse: collapse;width:100%;">
<tr style ="width=100%" >
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE; width=100%;">item Name</td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=100%;">Price</td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=50%;"></td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr style="width:100%;">
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=100%;"><?php echo $row["item"]; ?></td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width=100%;"><?php echo $row["price"]; ?></td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE; width=50%;">

<form method='post'>
    <input type='submit' name='delete' value='delete'style="background-color:red; color:white" onclick="return confirm ('Are you sure you want to delete??')"></input>
    <input type=hidden name="name" value="<?php echo $row["item"]; ?>">
</form>
<?php

?>

</td>
<!-- <td><?php// echo $row["mobile"]; ?></td> -->
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
</div>
</div>
</div>        
</div>
</div>
          <div class="u-cart-button-container">
            <a href="../signup/home.php" class="u-active-none u-btn u-button-style u-cart-continue-shopping u-hover-none u-none u-text-body-color u-btn-1"><span class="u-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 443.52 443.52" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8    c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712    L143.492,221.863z"></path>
</g>
</g></svg><img></span>&nbsp;Continue Shopping 

          <div class="u-cart-blocks-container">
            <div class="u-cart-block u-indent-30">
              <div class="u-cart-block-container u-clearfix">
                <div class="u-cart-block-content u-text">
                  <div class="u-cart-form u-form">
                    <form action="#" method="POST" class="u-clearfix u-form-horizontal u-form-spacing-10 u-inner-form" source="custom" name="form">
                    
                      <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                      <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
                      <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-cart-block u-cart-totals-block u-indent-30">
              <div class="u-cart-block-container u-clearfix">
                <h5 class="u-cart-block-header u-text">Cart Totals</h5>
                <div class="u-align-right u-cart-block-content u-text">
                  <div class="u-cart-totals-table u-table u-table-responsive">
                    <table class="u-table-entity">
                      <colgroup>
                        <col width="50%">
                        <col width="50%">
                      </colgroup>
                      <tbody class="u-align-right u-table-body">
                        <tr style="height: 46px;">
                          <td class="u-align-left u-border-1 u-border-grey-dark-1 u-first-column u-table-cell u-table-cell-17">Total</td>
                          <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?php 
                          

                          $sql = "SELECT SUM(price) AS totalsum FROM orders";
                            $result=mysqli_query($conn,$sql);
                          if ($result) {
                            while($row = mysqli_fetch_array($result)) {
                                      
                                $sum = $row['totalsum'];

                              }
                            }
                          
                          ?> $<?php echo $sum;?> </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <script>
            function loadDoc(){
              const xhttp = new XMLHttpRequest();
              xhttp.onload = function(){
                document.getElementById("demo").innerHTML = this.responseText;
              }
              xhttp.open('Post'.'ajax_info.txt');
              xhttp.send();
            }
            </script>

                  <form method='Post' action="checkout.php">
                  <input type='submit' class="u-btn u-button-style u-cart-checkout-btn u-btn-4" value='Proceed to Checkout' onclick="return confirm ('Are you sure you want to checkout??')" onclick='loaddoc()'></input>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  

  </body>
</html>