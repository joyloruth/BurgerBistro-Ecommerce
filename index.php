
<!doctype html>
<html lang="en">
  <head>
    <!--******** META TAGS ********************--> 
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <!--******** BOOTSTRAP CSS ********************--> 

    
    <!--<link rel="preload" as="style" href="styleindex.css">-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="styleindex.css" rel="stylesheet" type="text/css" />
      
    <!--********GOOGLE FONTS ********************--> 
      <link href='https://fonts.googleapis.com/css?family=Special Elite' rel='stylesheet'>
    
    <!--******** FAVICON ********************--> 
      <link rel="icon"   type="image/png"   href="preloader/burger.png" />

      <title>FETCH Burger Restaurant</title>
  </head>

  <body>
   <div id="preloader">
      <div id="preloader">
        <div id="preloader-images">
          <img src = "https://img.icons8.com/external-vitaliy-gorbachev-flat-vitaly-gorbachev/58/000000/external-burger-fast-food-vitaliy-gorbachev-flat-vitaly-gorbachev-1.png" id = "preloader-burger">
          <img src = "https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-milkshake-coffee-shop-wanicon-flat-wanicon.png" id = "preloader-milkshake">
          <img src = "preloader/frenchfries.png" id = "preloader-fries">
        </div>
        <div id="preloader-title">
          <h1>Loading...</h1>
        </div>
      </div>
    </div>
       
    

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FETCH Burger Bistro </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="menu.php"> MENU</a></li>
        
        
        
        <?php 
            if(!isset($_SESSION["user"]))
            {
              echo '<li><a href="login.php">LOGIN</a></li>';
            } 
            else {
                echo '<li><a href="logoff.php">LOG OFF</a></li>';
            }
        ?>
      </ul>
    </div>
      <?php ?>
       <?php 
            if(isset($_SESSION["user"]))
            {
              echo $_SESSION["user"];
            } 
        ?>
  </div>
        
      </div>
    </div>
  </div>
</nav>

    <div class="banner" style="background-image: linear-gradient(black, rgba(0, 0, 0, 0.479)),url(images/backgrounds/burgerBanner.jpg)">
      
    <div class="banner-info">
      <h1>Super Delicious</h1>
      <h2><span style="color: #A8EB12;">Vegan</span> Burger </h2>
      <p>Plant based burger patty loaded with vegan bacon, vegan blue cheese crumbles, crunchy fried onions and steak sauce.</p>
      <a href = "menu.php"><button id = "bannerButton">Our Menu</button></a>
    </div>
    <div class = "banner-image">
      <img src = "" id = "burger">
    </div>
    <div class="left-sidebar">
    </div>
    <div class="right-sidebar">
    </div>
   </div>

  <div id="burger-special">
    <div class="burger-special-image">
      <img src = "burger-menu/bluecheeseburger.png" id = "burger">
    </div>
    

<!--BURGER MENU SPECIALS-->   
    <div class="burger-special-info">
      <p id = "price-tag"><span> only $4.99</span> </p>
      <h1>Black Bean Burger</h1>
      <p>We can't think of a better way to save the plant than a vegan burger.
        You can hardly tell the difference. 
      </p>
      <button>Order now</button>
    </div>
  </div>



<!--NEW MENU ITEMS-->
  <div id="new-menu-items">
    <div class="new-menu-items-leftSide" style="background-image: linear-gradient(black, rgba(0, 0, 0, 0.479)),url(images/backgrounds/truffleburger.jpg)">
      <p id = "price-tag"><span> new</span> </p>
      <h1>Truffle Burger</h1>
      <p>Bonjour can't think of a better way to save the plant than a vegan burger.
        You can hardly tell the difference. 
      </p>
      <h3>$3.49</h3>
      <button>Order now</button>
    </div>
    <div class="new-menu-items-leftSide" style="background-image: linear-gradient(black, rgba(0, 0, 0, 0.479)),url(images/backgrounds/burgerBanner.jpg)" >
      <p id = "price-tag"><span> new</span> </p>
      <h1>Philly Burger</h1>
      <p>We can't think of a better way to save the plant than a vegan burger.
        Pickle onions tomatoes and A1 sauce
      </p>
      <h3>$6.49</h3>
      <button>Order now</button>
    </div>
  </div>
  <div id="new-menu-items">
    <div class="new-menu-items-leftSide" style="background-image: linear-gradient(black, rgba(0, 0, 0, 0.479)),url(images/backgrounds/milkshake.jpg)">
      <p id = "price-tag"><span> new</span> </p>
      <h1>Peach Milkshake</h1>
      <p>Creamy fruity milkshake, that pairs well with our signature burgers. 
        Include chunks of 100% real fruit with a vanilla base. 
      </p>
      <h3>$4.49</h3>
      <button>Order now</button>
    </div>
    <div class="new-menu-items-leftSide" style="background-image: linear-gradient(black, rgba(0, 0, 0, 0.479)),url(images/backgrounds/fries.jpg)" >
      <p id = "price-tag"><span> new</span> </p>
      <h1>Parmesan Fries</h1>
      <p>Crispy golden fries topped with Parmesan cheese and garlic salt. Includes sweet heat ketchup  and garlic aoli for dipping.
      </p>
      <h3>$3.99</h3>
      <button>Order now</button>
    </div>
  </div>

<div id="food-list">
  <p><span> Fresh & Flavorful</span> </p>
  <h1>Bon Appetit</h1>
  <p>Mix and Match </p>
  
  <div id="food-list-items">
    <div class="food-list-item">
      <img src = "https://img.icons8.com/external-vitaliy-gorbachev-flat-vitaly-gorbachev/58/000000/external-burger-fast-food-vitaliy-gorbachev-flat-vitaly-gorbachev-1.png" id ="burger-menu-pic" >
      <h3> Entrees</h3>
      <p>Healthy & Flavorful</p>
      <button onclick="window.location.href = 'menu.php?cat=Entrees'";>view Entrees</button>
    </div>
    <div class="food-list-item">
      <img src = "food-items/side-fries.png" id ="burger-menu-pic" >
      <h3>Sides</h3>
      <p>Savory & Sweet</p>
      <button onclick="window.location.href = 'menu.php?cat=Sides'";>View Sides</button>
    </div>
    <div class="food-list-item">
      <img src = "https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-milkshake-coffee-shop-wanicon-flat-wanicon.png" id ="burger-menu-pic" >
      <h3>Beverages</h3>
      <p>Creamy & Refreshing</p>
      <button onclick="window.location.href = 'menu.php?cat=Beverages'";>View beverages</button>
    </div>
  </div>
</div>

<div id="side-items-section">
  <p><span> Fresh & Flavorful</span> </p>
  <h1>Side Dishes</h1>
  
  <div id="side-items">
    <div class="side-item">
      <img src = "preloader/frenchfries.png" id = "side-item-img" alt = "fries">
      <h3>French Fries</h3>
    </div>
    <div class="side-item">
      <img src="https://img.icons8.com/external-vitaliy-gorbachev-flat-vitaly-gorbachev/58/000000/external-salad-christmas-vitaliy-gorbachev-flat-vitaly-gorbachev.png" id = "side-item-img" alt = "greek salad">
      <h3>Greek Salad</h3>
    </div>
    <div class="side-item">
      <img src="https://img.icons8.com/external-ddara-flat-ddara/64/000000/external-green-beans-vegetables-ddara-flat-ddara.png" id = "side-item-img">
      <h3>Green Beans</h3>
    </div>
    <div class="side-item">
      <img src="https://img.icons8.com/external-vitaliy-gorbachev-flat-vitaly-gorbachev/58/000000/external-onion-rings-fast-food-vitaliy-gorbachev-flat-vitaly-gorbachev.png" id = "side-item-img" alt = "onion rings">
      <h3>Onion Rings</h3>
    </div>
    <div class="side-item">
      <img src="https://img.icons8.com/external-vitaliy-gorbachev-flat-vitaly-gorbachev/58/000000/external-fruit-health-vitaliy-gorbachev-flat-vitaly-gorbachev.png" id = "side-item-img" alt = "fruit salad">
      <h3>Fruit Salad</h3>
    </div>
    <div class="side-item">
      <img src="https://img.icons8.com/fluency/48/000000/cookies.png" id = "side-item-img">
      <h3>Sugar Cookie</h3>
    </div>
  </div>
</div>

<div id="contact">

  
  <div id="map">
  </div>
  <div id="contact-info" style="background-image: linear-gradient(rgba(0, 0, 0, 0.788), rgba(0, 0, 0, 0.774)),url(images/backgrounds/truffleburger.jpg)">
    <p><span> Come On Down</span> </p>
    <h3>Contact</h3>
    <p>1234 Burger Lane</p>
    <p>Nashville, TN 90210</p>
    <p> 1-800-BURGERS</p>
  </div>
</div>





  
 
   
    
    
        
         
  
     


  



      
        
      







      



















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src = script.js></script>
    <script src = shoppingCart.js></script>
    <script>
        function initMap(){
        var location = {lat: 36.193180, lng: -86.803740};
        var map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4, 
          center: location
        });
            }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src ="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvKGuZoSAxuGK76jVlZ_XweJvs0MNduj0&callback=initMap"></script>
    </body>
</html>


<?php include "footer.php" ?>