<!DOCTYPE html>
<html lang="en">
<head>

   <link rel="stylesheet" href="bestelpagina.css">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_GET["product"]; 
    ?>
    <main>
        <section id="header">
            <a href="#"><img src="./fotos/zaralogo.webp" class="logo" alt=""></a>
        
            <div>
                <ul id="navbar">
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a href="shop.html">shop</a></li>
                    <li><a href="blog.html">blog</a></li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="cart.html"><i class="fa-regular fa-bag-shopping"></i></a></li>
                </ul>
            </div>
           </section>
           <div class="tekst-h">
            <h1>Your Order</h1>
           </div>
           <section>
           <div class="container">
           <div class="row">
            <form action="bedankt.php" method="post">
            <input type="text" class="box" name="fname" placeholder="Firstname"><br><br>
            <input type="text" class="box" name="lname" placeholder="Lastname"><br><br>
            <input type="text" class="box" name="fsname" placeholder="Streetname"><br><br>
            <input type="text" class="box" name="zip" placeholder="Zip"><br><br>
            <input type="text" class="box" name="residence" placeholder="Residence"><br><br>
            <input type="text" class="box" name="tel" placeholder="Phone Number"><br><br>
            <input type="text" class="box" name="email" placeholder="E-mail"><br><br>
            <input type="hidden" class="hidden-input" name="product" value="<?php echo $_GET["product"];?>">
            <button class="submit">Order</button>
              </div>
        </form>
            </div> 
        </div>
</section>
</main>
</body>
</html>