<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AboEl-dahab pizza</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
  </head>
  <body onload="testfun()">
  
  
    <header>
      
    
      <nav class="navigation1">
        <ul>
          <a href="index.php">Home</a>
          <a href="#menu">menu</a>
          <a href="#services">services</a>
        </ul>
      </nav>
      <a href="index.php" class="logo">AboEldahab <span class="logo1">Pizza</span></a>
      <nav class="navigation2">
        <ul>
          <a href="#">Blog</a>
          <a href="#">About</a>
          <a href="#contact">Contact</a>
          <a href="register_new_customer.php" class="new-customer">Register</a>
        </ul>
      </nav>
      
    </header>
    <audio autoplay src="welcome.mp3">
      reyerye.
    </audio>

    
    
    <section class="home" id="home">
      <div class="imag_1">
        <img
          src="images/about.jpg"
          alt="about photo"
          width="800"
          height="600"
        />
      </div>
      <div class="home-text">
        <h2 class="welcom-segment">WELCOME TO ABOEL-DAHAB PIZZA RESTAURANT</h2>
        <p>
          Welcome to Aboeldahab Pizza Restaurant, where we take pride in serving you the best pizzas in town. Our restaurant offers a warm and inviting atmosphere, making it the perfect place for you to sit back, relax, and enjoy a delicious meal with family and friends.

At Aboeldahab, we believe that pizza is not just food, but an experience that should be savored with every bite. That's why we use only the freshest ingredients in our pizzas, from the dough to the toppings, to ensure that you get the best taste and quality every time you visit us.
        </p>
      </div>
    </section>
    <section class="services" id="services">
      <div class="services1">
       <h1>Services</h1>
     </div> 
     <div class="ser-info">
       <h2>OUR SERVICES</h2>
       <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
       <ul class="ser">
         <li>
           <i class="fas fa-pizza-slice fa-xl"></i>
           <h3>HEALTHY FOODS</h3>
           <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
         </li>
         <li>
           <i class="fas fa-shipping-fast fa-xl" "></i>
           <h3>FASTEST DELIVERY</h3>
           <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
         </li>
         <li>
           <i class="fa-sharp fa-solid fa-pizza-slice fa-xl"></i>
           <h3>ORIGINAL RECIPES</h3>
           <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
         </li>
         </ul>
     </div>
       
     </section>
    <section class="menue" id="menu">
      <h2 class="title1">MENU</h2><br>
      <?php
      // Include config file
      require_once "connect.php";

      // Attempt select query execution
      $sql = "SELECT * FROM pizza";

      $result = mysqli_query($link, $sql);
      ?>
      <?php
      while($row = mysqli_fetch_array($result)){
      ?>
      <div class="cards" x>
        <div class="card">
          <div class="photo">
            <img src="<?php echo $row['Photo']?>" alt="pizza-1" width="300" height="300">
          </div>
          <div class="info">
            <h3><?php echo $row['Name']?></h3>
            <!-- <p>
              With real italian pizza, you will find homemade sauce made from freshly peeled tomatoes and a blend of savory, complimenting herbs.</p> -->
            <h4 class="price"><?php echo $row['Price']?></h4>
            <button class="order"><a href="insert_order.php?id=<?php echo $row['Order_id'];?>>" class="new-customer" style = "text-decoration: none; color : white">Order</a></button>
          </div>
        </div>
        <?php
        }
        ?>
        <?php
        mysqli_close($link);
        ?>

    </section>
    
   <section class="contact" id="contact">
    <div class="contact-info1">
<ul class="phon">
  <li><h3> <i class="fa fa-phone" style="font-size:20px;color:gold ; padding-right:10px;"></i>000 (123) 456 7890</h3>
  <p>A small river named Duden flows</p>
</li>
<li>
  <h3><i class="fa fa-map-marker" style="font-size:20px;color:gold; padding-right:10px;"></i>198 West 21th Street</h3>
  <p>Suite 721 New York NY 10016</p>
</li>
<li>
  <h3><i class="fas fa-clock" style="font-size:20px;color:gold; padding-right:10px;"></i>Open Monday-Friday</h3>
  <p>8:00am - 9:00pm</p>
</li>

</ul>
    </div>
    <div class="contact-info2">
      <ul class="social-icon">
        <li class="social-animate">
          <a href="https://twitter.com/AmeenOsama5"><i class="fa-brands fa-twitter"></i></a>
        </li>
        <li class="social-animate">
          <a href="https://www.facebook.com/hema.elhadad.9/"><i class="fa-brands fa-facebook-f"></i></a>
        </li>
        <li class="social-animate">
          <a href="https://www.instagram.com/3bdlhmyd9316/"><i class="fa-brands fa-instagram"></i></a>
        </li>
      </ul>
    </div>
   </section>
    
  </body>
  <script>function testfun(){var myaudio = document.getElementById("sh");
return myaudio.play();}</script>
</html>
