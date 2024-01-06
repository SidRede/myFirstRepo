<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
        <img src="./images/bookBazaarLogo.png" alt="" class="amazon">
        </div>
        <div class="contents ">
            <ul class="navContents "> 
                 <li><a href="#">Home</a></li>
                <li><a href="#">Books</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
        <div class="buttons">
            <button class="buy buttonCommon"><a href="./login.php">LOGIN</a></button>
            <button class="sell buttonCommon"><a href="./signUp.php">SIGNUP</a></button>
        </div>
    </nav>

                         <!-- hero  section   -->
    <section class="hero">
        <div class="image">
            <img src="./images/lake.jpg" class="img-fluid" alt="...">
        </div>
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
                    <h6>Rs 500</h2>
                  </div>
                  <!-- <p class="card-text"></p> -->
                  <div class="buttonBuyNow">
                    <a href="#" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>

                  
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="./images/twelthFail.webp" class="card-img-top" alt="book1">
                <div class="card-body">
                  <div class="bookInfo">
                    <h5 class="card-title">12th Fail</h5>
                    <h6>Rs 180</h2>
                  </div>
                  <!-- <p class="card-text"></p> -->
                  <div class="buttonBuyNow">
                    <a href="#" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="./images/gaurGopal.jpg" class="card-img-top" alt="book1">
                <div class="card-body">
                  <div class="bookInfo">
                    <h5 class="card-title">Energize Your Mind</h5>
                    <h6>Rs 250</h2>
                  </div>
                  <!-- <p class="card-text"></p> -->
                  <div class="buttonBuyNow">
                    <a href="#" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="./images/vishwaas.jfif" class="card-img-top" alt="book1">
                <div class="card-body">
                  <div class="bookInfo">
                    <h5 class="card-title">Mn mai hai Vishwaas</h5>
                    <h6>Rs 200</h2>
                  </div>
                  <!-- <p class="card-text"></p> -->
                  <div class="buttonBuyNow">
                    <a href="#" class="btn btn-primary"><center> Buy Now  </center></a>
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


