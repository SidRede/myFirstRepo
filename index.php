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
    <style>
        .w-100 {
          margin-top: 3vh;
          width: 66%!important;
          margin-left: 16vw;
          height: 55vh;
        }
    
        .carousal-container {
            overflow: hidden;
            width: 100%;
            position: relative;
        }

        .carousal {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .card {
          height: 52vh;
            overflow:hidden;
            flex: 0 0 auto;
            width: 300px; /* Set your desired width */
            margin: 0 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.5s ease-in-out;
        }

        .card > img {
          margin-top: 20px;
          margin-left: 20px;
          height: 245px;
          width: 254px;
        }

      .card-content{
        padding : 0px 20px 0px 20px;
        margin-top:20px;
        display :flex;
        justify-content : space-around;
        /* align-self : center: */
      }
        
        .prev, .next {
            cursor: pointer;
            font-size: 24px;
            user-select: none;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }
    
    </style>

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
            <button class="buy buttonCommon"><a href="#">CART</a></button>
            <button class="sell buttonCommon"><a href="logout.php">Logout</a></button>
        </div>
    </nav>

                         <!-- hero  section   -->
    <section class="hero">
    <div class="image">
            <!-- corousel  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2500">
              <img src="./images/bookshelve1.jpeg" class="d-block w-100" alt="...">
            </div>
        <div class="carousel-item" data-bs-interval="2500">
          <img src="./images/bookshelve2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2500">
          <img src="./images/bookshelve3.webp" class="d-block w-100" alt="...">
        </div>
      </div>
      
      <button class="carousel-control-prev" type="button"             data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
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
            
        <div class="carousal-container">
          <div class="carousal">
        
                <div class="card">
                    <img src="./images/gaurGopal.jpg" alt="Image 1">
                    <div class="card-content">
                      <div class="bookInfo">
                        <h5 class = "card-title">Energize your Mind </h5>
                          <h6>Rs 180</h6>
                      </div>
                        
                        <div class="buttonBuyNow">
                    <a href="#" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                    </div>
                </div>

                <div class="card">
                    <img src="./images/harryPotter.webp" alt="Image 1">
                    <div class="card-content">
                      <div class="bookInfo">
                        <h5 class = "card-title">Harry Potter Series </h5>
                          <h6>Rs 2000</h6>
                      </div>
                        
                        <div class="buttonBuyNow">
                    <a href="#" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                    </div>
                </div>

                <div class="card">
                    <img src="./images/twelthFail.webp" alt="Image 1">
                    <div class="card-content">
                      <div class="bookInfo">
                        <h5 class = "card-title">12th Fail </h5>
                          <h6>Rs 200</h6>
                      </div>
                        
                        <div class="buttonBuyNow">
                    <a href="#" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                    </div>
                </div>

                <div class="card">
                    <img src="./images/vishwaas.jfif" alt="Image 1">
                    <div class="card-content">
                      <div class="bookInfo">
                        <h5 class = "card-title">Mn mai hai Vishwaas </h5>
                          <h6>Rs 180</h6>
                      </div>
                        
                        <div class="buttonBuyNow">
                    <a href="#" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                    </div>
                </div>

                <div class="card">
                    <img src="./images/Netaji.jpg" alt="Image 1">
                    <div class="card-content">
                      <div class="bookInfo">
                        <h5 class = "card-title">What Happened To Netaji ? </h5>
                          <h6>Rs 200</h6>
                      </div>
                        
                        <div class="buttonBuyNow">
                    <a href="#" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                    </div>
                </div>

                <div class="card">
                    <img src="./images/IndianUprising.jpg" alt="Image 1">
                    <div class="card-content">
                      <div class="bookInfo">
                        <h5 class = "card-title">The Great Indian Uprising </h5>
                          <h6>Rs 200</h6>
                      </div>
                        
                        <div class="buttonBuyNow">
                    <a href="#" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                    </div>
                </div>

                <div class="card">
                    <img src="./images/gitanjaliBook.jpg" alt="Image 1">
                    <div class="card-content">
                      <div class="bookInfo">
                        <h5 class = "card-title">Gitanjali </h5>
                          <h6>Rs 300</h6>
                      </div>
                        
                        <div class="buttonBuyNow">
                    <a href="#" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                    </div>
                </div>

                <div class="card">
                    <img src="./images/godanBook.jpg" alt="Image 1">
                    <div class="card-content">
                      <div class="bookInfo">
                        <h5 class = "card-title">Godaan </h5>
                          <h6>Rs 200</h6>
                      </div>
                        
                        <div class="buttonBuyNow">
                    <a href="#" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                    </div>
                </div>

                <div class="card">
                    <img src="./images/dopehriBook.jfif" alt="Image 1">
                    <div class="card-content">
                      <div class="bookInfo">
                        <h5 class = "card-title">Dopehari </h5>
                          <h6>Rs 200</h6>
                      </div>
                        
                        <div class="buttonBuyNow">
                    <a href="#" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                    </div>
                </div>

                <div class="card">
                    <img src="./images/ravaanBook.jpg" alt="Image 1">
                    <div class="card-content">
                      <div class="bookInfo">
                        <h5 class = "card-title">Ravaan </h5>
                          <h6>Rs 250</h6>
                      </div>
                        
                        <div class="buttonBuyNow">
                    <a href="#" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                    </div>
                </div>

                <div class="card">
                    <img src="./images/loveBook11.jfif" alt="Image 1">
                    <div class="card-content">
                      <div class="bookInfo">
                        <h5 class = "card-title">Love in Ancient India </h5>
                          <h6>Rs 200</h6>
                      </div>
                        
                        <div class="buttonBuyNow">
                    <a href="#" class="btn btn-primary"><center> Buy Now  </center></a>
                  </div>
                    </div>
                </div>
        
          </div>
          <div class="prev">&#10094;</div>
          <div class="next">&#10095;</div>
        </div>
            

            
        </div>

        <div class="lineDiv">
          <div class="line1 line">
          </div>
          <div class="popularBooks">
              <h4>New Released Books</h4>
          </div>
          <div class="line2 line">
           </div>
        </div>

        <div class="booksOnSell">
        <div class="card">
                    <img src="./images/gaurGopal.jpg" alt="Image 1">
                    <div class="card-content">
                      <div class="bookInfo">
                        <h5 class = "card-title">Energize your Mind </h5>
                          <h6>Rs 180</h6>
                      </div>
                        
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
                    <h6>Rs 180</h6>
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


        <div class="lineDiv">
          <div class="line1 line">
          </div>
          <div class="popularBooks">
              <h4>Higher Studies Books</h4>
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

    <script>
          const carousal = document.querySelector('.carousal');
          const cards = document.querySelectorAll('.card');
          const cardWidth = cards[0].offsetWidth;
          const cardsInView = 6;
          let currentIndex = 0;

          // Clone cards for seamless wrapping
          for (let i = 0; i < cardsInView; i++) {
            const clone = cards[i].cloneNode(true);
            carousal.appendChild(clone);
          }

          function updateCarousal() {
            const newTransformValue = -currentIndex * cardWidth + 'px';
            carousal.style.transition = 'transform 0.5s ease-in-out';
            carousal.style.transform = 'translateX(' + newTransformValue + ')';
          }

          function nextSlide() {
            currentIndex++;
            updateCarousal();
            if (currentIndex === cards.length - cardsInView + 1) {
              setTimeout(() => {
                currentIndex = 0;
                carousal.style.transition = 'none';
                updateCarousal();
              }, 500);
            }
          }

          function prevSlide() {
            currentIndex--;
            updateCarousal();
            if (currentIndex < 0) {
              setTimeout(() => {
                currentIndex = cards.length - cardsInView;
                carousal.style.transition = 'none';
                updateCarousal();
              }, 500);
            }
          }

          const nextBtn = document.querySelector('.next');
          const prevBtn = document.querySelector('.prev');

          nextBtn.addEventListener('click', nextSlide);
          prevBtn.addEventListener('click', prevSlide);

          // Set up automatic sliding every 3 seconds (adjust as needed)
          setInterval(nextSlide, 3000);
    </script>




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


