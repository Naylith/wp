<!DOCTYPE html>
<html lang='en'>
   <head>
      <meta charset="utf-8">
      <title>Products</title>
      <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css">
      <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
      <script src='../wireframe.js'></script>
   </head>
   <body>
      <header>
         <div>
            <a href="https://titan.csit.rmit.edu.au/~s3743586/wp/a2/index.php"> 
            <img src='../../media/business-logo.jpg' width='720' /> 
            </a>
         </div>
      </header>
      <nav>
         <div>Website navigation links
            <a href="https://titan.csit.rmit.edu.au/~s3743586/wp/a2/index.php"> Home </a> 
            <a href="https://titan.csit.rmit.edu.au/~s3743586/wp/a2/login.php"> Login </a> 
         </div>
      </nav>
      <main>
         <figure>
            <a href="https://titan.csit.rmit.edu.au/~s3743586/wp/a2/product.php">
               <img src= '../../media/orange.jpg' width='300' class="images" />
               <figcaption> Orange </figcaption>
            </a>
            <a href="https://titan.csit.rmit.edu.au/~s3743586/wp/processing.php?ref=index">
               <img src='../../media/brown.jpg' width='300' class="images" />
               <figcaption> Currently Unavailable </figcaption>
            </a>
            <a href="https://titan.csit.rmit.edu.au/~s3743586/wp/processing.php?ref=index">
               <img src='../../media/white.jpg' width='300' class="images" />
               <figcaption> Currently Unavailable </figcaption>
            </a>
            <a href="https://titan.csit.rmit.edu.au/~s3743586/wp/processing.php?ref=index">
               <img src='../../media/grey.jpg' width='300' class="images" />
               <figcaption> Currently Unavailable </figcaption>
            </a>
            <a href="https://titan.csit.rmit.edu.au/~s3743586/wp/processing.php?ref=index">
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
         <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </footer>
   </body>
</html>