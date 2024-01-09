<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CartCSS.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Cart</title>
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

            <section class="heroSection">
                <div class="card">
                    <div class="row">
                        <div class="col-md-8 cart">
                            <div class="title">
                                <div class="row">
                                    <div class="col"><h4><b>Shopping Cart</b></h4></div>
                                    <div class="col align-self-center text-right text-muted">3 items</div>
                                </div>
                            </div>    
                            <div class="row border-top border-bottom">
                                <div class="row main align-items-center">
                                    <div class="col-2"><img class="cartImage" src="./images/gaurGopal.jpg"></div>
                                    <div class="col">
                                        <div class="row text-muted">Energize Your Mind</div>
                                        <!-- <div class="row">Cotton T-shirt</div> -->
                                    </div>
                                    <div class="col">
                                        <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                                    </div>
                                    <div class="col">Rs. 180 <span class="close">&#10005;</span></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="row main align-items-center">
                                    <div class="col-2"><img class="cartImage" src="./images/harryPotter.webp"></div>
                                    <div class="col">
                                        <div class="row text-muted">Harry Potter Series</div>
                                        <!-- <div class="row">Cotton T-shirt</div> -->
                                    </div>
                                    <div class="col">
                                        <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                                    </div>
                                    <div class="col">&#8377; 2000 <span class="close">&#10005;</span></div>
                                </div>
                            </div>

                            <div class="row border-top border-bottom">
                                <div class="row main align-items-center">
                                    <div class="col-2"><img class="cartImage" src="./images/vishwaas.jfif"></div>
                                    <div class="col">
                                        <div class="row text-muted">Man Main Hain Vishwaas</div>
                                        <!-- <div class="row">Cotton T-shirt</div> -->
                                    </div>
                                    <div class="col">
                                        <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                                    </div>
                                    <div class="col">&#8377; 200 <span class="close">&#10005;</span></div>
                                </div>
                            </div>

                            <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
                    </div>


                    <div class="col-md-4 summary">
                        
                        <form>
                            <p>SHIPPING</p>
                            <select><option class="text-muted">Standard-Delivery- &#8377; 20.00</option></select>
                            <p>GIVE CODE</p>
                            <input id="code" placeholder="Enter your code">
                        </form>
                        <div><h3><b>Summary</b></h3></div>
                        <hr>
                        <div class="row">
                            <div class="col" style="padding-left:0;">ITEMS 3</div>
                            <div class="col text-right">&#8377; 2380.00</div>
                        </div>

                        <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                            <div class="col">TOTAL PRICE</div>
                            <div class="col text-right">&#8377; 2400.00</div>
                        </div>
                        <button class="btn">CHECKOUT</button>
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