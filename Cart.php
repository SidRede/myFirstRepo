<?php
        // require("common.php");
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('location: login.php');
        }
?>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Books</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
                <div class="buttons">
                    <button class="buy buttonCommon"><a href="Cart.php">CART</a></button>
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
                                    <!-- <div class="col align-self-center text-right text-muted"> items</div> -->
                                </div>
                            </div>    

                            <div class="Item-cards">
                                <?php
                                 $sum = 0;
                                 $i = 0;
                                    // session_start();
                                    // $book_id = $_GET['id'];
                                    $user = $_SESSION['user_id'];

                                    require 'conn.php';

                                    $sql = "SELECT cart.Book_id AS book_id, book_info.Price AS Price, book_info.Book_name AS bookName, images.data AS image, quantity as NoOfItems FROM cart JOIN book_info ON cart.Book_id = book_info.Book_id JOIN images ON book_info.Book_id = images.id WHERE user_id = '$user' AND Status = 2; " ;
                                    $result = $conn->query($sql);

                                    if(mysqli_num_rows($result) >= 1){

                                        while($row = mysqli_fetch_array($result))
                                        {
                                            if($row['NoOfItems'] > 0 )
                                            {
                                                $sum = $sum + $row['Price'] * $row['NoOfItems'];
                                                $i = $i + $row['NoOfItems'];
    
                                                echo '<div class="row border-top border-bottom">';
                                                echo ' <div class="row main align-items-center">';
                                                echo "<div><img src='data:image/jpeg;base64," . base64_encode($row["image"]) . "' alt='Book Image'> </div>";
                                                echo ' <div class="col">';
                                                echo '<div class="row text-muted "> '.$row["bookName"]. ' </div>';
                                                echo '</div>';
                                                echo '<div class="col midCol">';
                                                echo '<a href="Dec-Items.php?id='.$row['book_id'].'">-</a><a href="#" class="border">'.$row['NoOfItems'].'</a><a href="Inc-Item.php?id='.$row['book_id'].'">+</a>';
                                                echo '</div>';
                                                echo '<div class="col  midCol" >&#8377; '.$row['Price'].' <span class="close"> <a href="remove-item.php?id='.$row['book_id'].'" >&#10005; </a> </span></div>';
                                                echo '</div>';
                                                echo ' </div>';
                                                 echo '</br>'; 
                                                 echo '</br>'; 
                                            }
                                            
                                        }

                                        
                                     
                                    }
                                    else{
                                        echo '<div class="row border-top border-bottom">';
                                        echo ' <div class="row main align-items-center">';
                                        echo '<p> Cart is Empty </p>';
                                        echo '</div> </div>';
                                    
                                    }



                                ?>
                                   
                                        <!-- <div class="row border-top border-bottom">
                                            <div class="row main align-items-center">
                                                <div class="col-2"><img class="cartImage" src="./images/vishwaas.jfif"></div>
                                                <div class="col">
                                                    <div class="row text-muted">Man Main Hain Vishwaas</div>
                                                </div>
                                                <div class="col">
                                                    <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                                                </div>
                                                <div class="col">&#8377; 200 <span class="close">&#10005;</span></div>
                                            </div>
                                        </div> -->

                                       
                            </div>

                            <div class="back-to-shop"><a href="index.php">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
                    </div>


                    <div class="col-md-4 summary">
                        
                        <form>
                            <p>SHIPPING</p>
                            <select><option class="text-muted">Standard-Delivery- &#8377; 50.00</option></select>
                            <p>GIVE CODE</p>
                            <input id="code" placeholder="Enter your code">
                        </form>
                       

                        <div class="bill-checkout-Button">
                                <div><h3><b>Summary</b></h3></div>
                                <table>
                                    <tr>
                                        <td> <?php echo $i ?> ITEMS</td>
                                        <td>&#8377; <?php echo $sum; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>DELIVERY CHARGES</td>
                                        <td>&#8377; 50.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><hr></td>
                                    </tr>
                                        <tr >
                                        <td>TOTAL PRICE</td>
                                        <td>&#8377;<?php echo $sum + 50; ?> </td>
                                    </tr>
                                </table>

                                
                                <button class="btn">CHECKOUT</button>

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