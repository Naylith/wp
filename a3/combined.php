


<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 3</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css">
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
      <script src='../wireframe.js'></script>
    <style>
      <?php
        // This PHP code inserts CSS to style the "current page" link in the nav area
        $here = $_SERVER['SCRIPT_NAME']; 
        $bits = explode('/',$here); 
        $filename = $bits[count($bits)-1]; 
        echo "nav a[href$='$filename'] {
        box-shadow: 1px 1px 1px 2px navy;
      }";
      ?>
      
    </style>

  </head>

  <body>

    <header>
               <div>
         <a href="https://titan.csit.rmit.edu.au/~s3743586/wp/a3/index.php"> 
         <img src='../../media/business-logo.jpg' width='720' /> 
         </a>
</div>


    </header>

    <nav>

         <div>Website navigation links
            <a href="https://titan.csit.rmit.edu.au/~s3743586/wp/a3/products.php"> Products </a> 
            <a href="https://titan.csit.rmit.edu.au/~S3743586/wp/a2/login.php"> Login </a> 
           <a href="https://titan.csit.rmit.edu.au/~S3743586/wp/a3/cart.php"> Cart </a> 
           <a href="https://titan.csit.rmit.edu.au/~S3743586/wp/a3/checkout.php"> Checkout </a> 
         </div>


    </nav>
      <main>
         <figure>
            <a href="products.php?id=12345">
               <img src= '../../media/orange.jpg' width='300' class="images" />
               <figcaption> Orange </figcaption>
            </a>
            <a href="products.php?id=">
               <img src='../../media/brown.jpg' width='300' class="images" />
               <figcaption> Currently Unavailable </figcaption>
            </a>
            <a href="products.php?id=">
               <img src='../../media/white.jpg' width='300' class="images" />
               <figcaption> Currently Unavailable </figcaption>
            </a>
            <a href="products.php?id=">
               <img src='../../media/grey.jpg' width='300' class="images" />
               <figcaption> Currently Unavailable </figcaption>
            </a>
            <a href="products.php?id=">
               <img src='../../media/multi.jpg' width='300' class="images" />
               <figcaption> Currently Unavailable </figcaption>
            </a>
         </figure>
      </main>
      <footer>
         <div>
            &copy;<script>
               document.write(new Date().getFullYear());
            </script> Nicole Brooker, S3743586.
         </div>
         <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div>Maintain links to your <a href='products.txt'>products spreadsheet</a> and <a href='orders.txt'>orders spreadsheet</a> here. 
         <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </footer>
   </body>
</html>   </body>
</html>