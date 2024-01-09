<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signUp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600&family=Young+Serif&display=swap" rel="stylesheet">

    <title>signUp</title>
</head>
<body>

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
  <header>
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
          <button class="buy buttonCommon"><a href="./login.php">LOGIN</a></button>
          <button class="sell buttonCommon">SIGNUP</button>
      </div>
  </nav>
  </header>
  

    <div class="heroSection">
        <div class="outerBox">
          <div class="rightBox">

         
              <img src="./images/bookBazaarLogo.png" alt="bookBazaarLogo">

              <h3>Pages of Possibility: <br> 
                Shop Books, 
                Ignite Imagination</h3>


              <div class="image1">
                <img src="./images/books.png" alt="books">
              </div>

          </div>
          <div class="innerBox">
           <div class="headline">
            <h2> <center> Create Account</center></h2>
           </div>
           
            <div class="form1">
                <form action="signUpLogic.php" method="post" onsubmit= "return validateForm()">
                  <div class="Name">
                    <input type="text" name="fname" id="fname" placeholder="First Name" autocomplete="given-name">
                    <span id="fnameError" class="error"></span>
                    <input type="text" name="lname" id="lname"  placeholder="Last Name" autocomplete="family-name">
                    <span id="lnameError" class="error"></span>
                  </div>
                  <input type="text" name="email"  id="email" placeholder="Email" autocomplete = "on">
                  <span id="emalError" class="error"></span>

                  <input type="text" name="phone"  id="phone" placeholder="Phone" autocomplete = "off">
                  <span id="phoneError" class="error"></span>

                  <input type="password" name="pass"  placeholder="Password" id="pass" autocomplete = "current-password" >
                  <br>
                  <input type="submit" value="Submit" class ="submit">

                  <span id="finalError" class="error"></span>
                </form>
          </div>
            
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

<script>
      function validateForm(){
        console.log("Validation function is called");
        var fname = document.getElementById('fname').value;
        var lname = document.getElementById('lname').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var pass = document.getElementById('pass').value;

        if(fname === ''){
          alert('Please enter first name !');
          return false;
        }
        else{
          document.getElementById('finalError').innerHTML = '';
        }

        if(lname === ''){
          alert('Please enter last name !');
          return false;
        }
        else{
          document.getElementById('finalError').innerHTML = '';
        }

        if(email === ''){
          alert('Please enter email !');
          return false;
        }
        else{
          document.getElementById('finalError').innerHTML = '';
        }

        if(phone === ''){
          alert('Please enter phone number !');
          return false;
        }
        else{
          document.getElementById('finalError').innerHTML = '';
        }

        if(pass === ''){
          alert('Please enter password !');
          return false;
        }
        return true;


      }
</script>


</html>




