<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title> login </title>
    
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
	<a href="https://titan.csit.rmit.edu.au/~s3743586/wp/a2/products.php"> Products </a> 
		<form action="/service.php" method="get">
		</form>
	</div>
    </nav>

    <main>
	
<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">

  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email Address" name="email" >

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >

    <button type="submit">Login</button>
  </div>

  <div>
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot<a href="#">Password?</a></span>
  </div>
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