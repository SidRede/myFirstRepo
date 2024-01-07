<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
  <header>
  <?php
    // Display PHP messages stored in session
    session_start();
    if (isset($_SESSION['message'])) {
        // Display the message in an alert box using JavaScript
        // echo '<script>alert("' . $_SESSION['message'] . '");</script>';


        $message = $_SESSION['message'];

        unset($_SESSION['message']); // Clear the message after displaying
    }
?>
<script>
   var messageFromPHP = <?php echo json_encode($message); ?>;

   if(messageFromPHP !== null || messageFromPHP !== undefined){
        // Display the message in an alert box
        alert(messageFromPHP);
   }
</script>

    <nav class="navbar">
      <div class="logo">
      <img src="./images/bookBazaarLogo.png" alt="bookBazaarLogo" class="amazon">
      </div>
      <div class="contents ">
          <ul class="navContents ">
               <li><a href="./landingPage.php">Home</a></li>
              <li><a href="#">Books</a></li>
              <li><a href="#">About</a></li>
          </ul>
      </div>
      <div class="buttons">
          <button class="buy buttonCommon">BUY</button>
          <button class="sell buttonCommon">SELL</button>
      </div>
  </nav>
  </header>
   

    <div class="heroSection">
       <div class="outerBox">
             <div class="signUp">
                <h1 class="NewHere">New Here ?</h1>
                <h3 class="signUpText">Sign Up and discover
                    different books</h3>
                    <div class="buttons">
                         <button class="sell buttonCommon signUpButton"><a href="./signUp.php">Sign Up</a></button>
                    </div>
              </div>

             <div class="login">
                    <div class="loginText">
                        <h2>Welcome back</h2>
                    </div>
                    <div class="inputDiv">
                        <!-- <input type="text" class="inputField uname" value = "Username">
                        <input type="text" class="inputField pass" value="Password"> -->
                        <form action="loginAction.php">
                          <input type="text" class="inputField uname" placeholder = "Email" name="Username">
                          <input type="text" class="inputField pass" placeholder ="Password" name="Password">
                          <input type="Submit" class="buy buttonCommon " value="Submit" >
                        </form>
                        <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                    </div>
                    <!-- <div class="loginButton">
                        <button class="buy buttonCommon signUpButton">Login</button> -->
                    <!-- </div> -->
              </div>
        </div>
    </div>

    
    <footer class="footer">

        <div class="links">
          <ul class="linkItems">
            <li><a href="#">Home</a></li>
            <li><a href="#">Cookie Policy</a></li>
            <li><a href="#">Blogs</a></li>
          </ul>
        </div>
  
        <div class="connection">
          <div class="keepConnected">
            <h2>Keep Connected </h2>
          </div>
          <div class="logo">
                <div class="insta png">
                  <!-- <img src="./insta.png" alt=""> -->
                </div>
                <div class="fb png">
                  
                </div>
                <div class="linkedin png">
                 
                </div>
          </div>
        </div>
  
        <div class="about">
          <h2>About</h2>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis deleniti laudantium ad nemo rem quod fugiat vel voluptatem. Deleniti, commodi?
        </div>
  
  
      </footer>


</body>
</html>