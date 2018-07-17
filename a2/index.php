<!DOCTYPE html>
<html lang='en'>
   <head>
      <meta charset="utf-8">
      <title>Assignment 2</title>
      <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css">
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
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
      </header>
      <nav>
         <div>Website navigation links
            <a href="https://titan.csit.rmit.edu.au/~s3743586/wp/a2/products.php"> Products </a> 
            <a href="https://titan.csit.rmit.edu.au/~S3743586/wp/a2/login.php"> Login </a> 
         </div>
      </nav>
      <main>
         <article>
            <h1> About Us </h1>
            <p> Breeders of quality purebred Mini Lops and Mini Cashmere Lops for both show and pet purposes. 
               Members of SARA, ARCI and ANRCI. Below are a few slides of some of our champion bunnies who have
               been judged as top quality in breed and show.  
            </p>
         </article>
         <section>
            <img class="mySlides" src='../../media/comp1.jpg' width='720' />
            <img class="mySlides" src='../../media/comp2.jpg' width='720' />
            <img class="mySlides" src='../../media/comp3.jpg' width='720' />
            <img class="mySlides" src='../../media/comp4.jpg' width='720' />
            <img class="mySlides" src='../../media/comp5.jpg' width='720' />
            <body>
               <div class="slideshow-container">
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
               </div>
               <br>
               <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                  <span class="dot" onclick="currentSlide(4)"></span>
                  <span class="dot" onclick="currentSlide(5)"></span>
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
               <p>Click on the tabs below to read more about our business.</p>
               <button class="accordion">Our History</button>
               <div class="panel">
                  <p>We started to compete in shows in 2008, our first being South Australian Quality Lops. After our initial success, we have 
                     continued and eventually got into the business of breeding bunnies for pets and show. 
                  </p>
               </div>
               <button class="accordion">Currently Available</button>
               <div class="panel">
                  <p>Our products page is frequently updated, while also featuring all colours of rabbits we breed. 
                     We've recently had a litter of orange kits who will be ready to leave home on the 29th of July. 
                     Enquires for other coloured litters are welcome and members of SARA, ARCI and ANRCI will be given first preference.
                  </p>
               </div>
               <button class="accordion">Contact Us</button>
               <div class="panel">
                  <p>Phone: 08 7663 6937<br>
                     Email: windaralops@gmail.com<br>
                     Facebook: https://www.facebook.com/Windara-Mini-Lops-146644212462100/
                  </p>
               </div>
               <script>
                  var acc = document.getElementsByClassName("accordion");
                  var i;
                  
                  for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                      this.classList.toggle("active");
                      var panel = this.nextElementSibling;
                      if (panel.style.maxHeight){
                        panel.style.maxHeight = null;
                      } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                      } 
                    });
                  }
               </script>
   </body>
   </section>
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