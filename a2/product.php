<!DOCTYPE html>
<html lang='en'>
   <head>
      <meta charset="utf-8">
      <title>Product</title>
      <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css">
      <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

<p>$120 ea. <br>We currently have a range of adult and baby orange mini lops up for adoption. Adults are available immediately and babies will be
available from the 29th of July. Pickup available for those in the SA region and flying interstate available.</p>

         <img class="mySlides" src='../../media/o1.jpg' width='600' />
         <img class="mySlides" src='../../media/o2.jpg' width='600' />
         <img class="mySlides" src='../../media/o3.jpg' width='600' />
         <body>
            <div style="text-align:center">
               <span class="dot" onclick="currentSlide(1)"></span> 
               <span class="dot" onclick="currentSlide(2)"></span> 
               <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
            <script>
               var slideIndex = 1;
               showSlides(slideIndex);
               
               function plusSlides(n) {
                 showSlides(slideIndex += n);
               }
               
               function currentSlide(n) {
                 showSlides(slideIndex = n);
               }
               
               function showSlides(n) {
                 var i;
                 var slides = document.getElementsByClassName("mySlides");
                 var dots = document.getElementsByClassName("dot");
                 if (n > slides.length) {slideIndex = 1}    
                 if (n < 1) {slideIndex = slides.length}
                 for (i = 0; i < slides.length; i++) {
                     slides[i].style.display = "none";  
                 }
                 for (i = 0; i < dots.length; i++) {
                     dots[i].className = dots[i].className.replace(" active", "");
                 }
                 slides[slideIndex-1].style.display = "block";  
                 dots[slideIndex-1].className += " active";
               }
            </script>

 		<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
               <input type='hidden' name='id' value= '12345' />
               <select name='option'>
                  <option value="Adult">Adult</option>
                  <option value="Baby">Baby</option>
               </select>


            <p>Quantity: </p>
            <div class="input-group">
               <div class="input-group-btn">
                  <div id="down" class="btn btn-default" onclick=" down('0')"><span class="glyphicon glyphicon-minus"></span></div>
               </div>
               <input type="number" name="qty" min="0" id="myNumber" class="form-control input-number" value="1" />
               <div class="input-group-btn">
                  <div id="up" class="btn btn-default" onclick="up('10')"><span class="glyphicon glyphicon-plus"></span></div>
               </div>
            </div>
            </div>
            <script>
               function up(max) {
                   document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) + 1;
                   if (document.getElementById("myNumber").value >= parseInt(max)) {
                       document.getElementById("myNumber").value = max;
                   }
               }
               function down(min) {
                   document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) - 1;
                   if (document.getElementById("myNumber").value <= parseInt(min)) {
                       document.getElementById("myNumber").value = min;
                   }
               }
            </script>

               <button type="submit">Buy</button>
            </form>
      </main>
      <footer>
      <div>&copy;<script>
         document.write(new Date().getFullYear());
      </script> Nicole Brooker, S3743586.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </footer>
   </body>
</html>

