<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="landingPage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>BookBazaar </title>

      <script>
          const durationInMinutes = 120;
          let totalTimeInSeconds = durationInMinutes * 60;

          function formatTime(seconds) {
            const hours = Math.floor(seconds / 3600);
            const minutes = Math.floor((seconds % 3600) / 60);
            const remainingSeconds = seconds % 60;
            
            return `${String(hours).padStart(2, '0')}      ${String(minutes).padStart(2, '0')}      ${String(remainingSeconds).padStart(2, '0')}`;
          }

          function updateTimer() {
            document.getElementById('timer').innerText = formatTime(totalTimeInSeconds);
          }

          function countdown() {
            if (totalTimeInSeconds > 0) {
              totalTimeInSeconds--;
              updateTimer();
              setTimeout(countdown, 1000);
            } else {
              alert('Timer completed!');
            }
          }

          window.onload = function () {
            updateTimer();
            countdown();
          };
    </script>


</head>
<body>
      <nav class="navbar1">
              <div class="logo">
              <img src="./images/Group16.png" alt="" class="amazon">
              </div>
              <div class="contents ">
                  <ul class="navContents "> 
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Books</a></li>
                      <li><a href="#">About</a></li>
                  </ul>
              </div>
              <div class="buttons">
                  <button class="buy buttonCommon"><a href="./login.php" > Login</a></button>
                  <button class="sell buttonCommon"><a href="./signUp.php">SignUp</a></button>
              </div>
      </nav>

      <section>
            <div class="upperDiv">

              <div class="text">
                <h2>All books are 50% off now! Don't miss such a deal!</h2>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac.</p>

                <div id="timer">
                   
                </div>

                <div class="time-units">
                  <p class="hr time-common">hrs</p>
                  <p class="min time-common">mins</p>
                  <p class="secs time-common">secs</p>
                </div>

              </div>

             

              <div class="image">
                <img src="./images/Unsplash.png" alt="books">
              </div>
            </div>


            <div class="midDiv">

                <div class="image difImage">
                      <img src="./images/book10.jpg" alt="girl with book">

                </div>
                
                <div class="text">
                        <h2>Access, Read, Practice & Engage with Digital Content (eBook) </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis urna, a eu.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="loginBar">

                        </div>

                        <div class="loginBar">
                          <form action="botLoginAction.php" method = "Post" >
                            <input type="text" class = "emailLogin" name = "email" placeholder = "enter your email">
                            <input type="submit" class = "loginButton" value = "Login">
                          </form>
                        </div>


                  </div>

                  
                </div>

            </div>


            <div class="bottomDiv">
                  <div class="lineDiv">
                <div class="line1 line">
                </div>
                <div class="popularBooks">
                    <h4>Popular Books</h4>
                </div>
                <div class="line2 line">
                </div>
            </div>

        <div class="booksOnSell">
            <div class="card" style="width: 18rem;">
                <img src="./images/harryPotter.webp" class="card-img-top" alt="book1">
                <div class="card-body">
                  <div class="bookInfo">
                    <h5 class="card-title">Harry Potter</h5>
                    <h6> &#8377; 500</h2>
                  </div>
                  <!-- <p class="card-text"></p> -->
                  <div class="buttonBuyNow">
                    <a href="./login.php" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>

                  
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="./images/twelthFail.webp" class="card-img-top" alt="book1">
                <div class="card-body">
                  <div class="bookInfo">
                    <h5 class="card-title">12th Fail</h5>
                    <h6> &#8377; 180</h2>
                  </div>
                  <!-- <p class="card-text"></p> -->
                  <div class="buttonBuyNow">
                    <a href="./login.php" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="./images/gaurGopal.jpg" class="card-img-top" alt="book1">
                <div class="card-body">
                  <div class="bookInfo">
                    <h5 class="card-title">Energize Your Mind</h5>
                    <h6> &#8377; 250</h2>
                  </div>
                  <!-- <p class="card-text"></p> -->
                  <div class="buttonBuyNow">
                    <a href="./login.php" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="./images/vishwaas.jfif" class="card-img-top" alt="book1">
                <div class="card-body">
                  <div class="bookInfo">
                    <h5 class="card-title">Mn mai hai Vishwaas</h5>
                    <h6> &#8377; 200</h2>
                  </div>
                  <!-- <p class="card-text"></p> -->
                  <div class="buttonBuyNow">
                    <a href="./login.php" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                </div>
              </div>

        </div>
            </div>



      </section>


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
                    <div class="insta ">
                      <a href="#">
                        <i class = "fa fa-instagram" style="font-size: 40px;"></i>
                      </a>
                    </div>
                    <div class="fb ">
                      <a href="#">
                        <i class = "fa fa-facebook" style="font-size: 35px; padding-left: 10px; padding-top: 5px;"></i>
                      </a>
                    </div>
                    <div class="linkedin">
                      <a href="#">
                        <i class = "fa fa-linkedin" style="font-size: 40px; padding-bottom: 10px;"></i>
                      </a>
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