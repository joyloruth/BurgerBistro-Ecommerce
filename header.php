<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>Fetch Vegan Burger </title>
  <!--******** FAVICON ********************--> 
      <link rel="icon"   type="image/png"   href="preloader/burger.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      /*FONTS*/
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Special+Elite&display=swap');
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: lightblue;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: lightblue;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: orangered;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
    color:white;
  }
  .navbar li a, .navbar .navbar-brand {
    color: white;
    text-transform: uppercase;
    font-family: 'Special Elite';
    font-size: 20px;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  
  .navbar-right{
      color: white;
      text-transform: uppercase;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  
  #side-menu{
      margin:0px;
      padding:0px;
      list-style-type: none;
      background-color: whitesmoke;
      color:black;
      border: 1px;
      font-family: poppins;
      height:100%;
      width:20%;
      padding-top: 10%;
      border: solid 1px grey;
  }
  
  
  #side-menu a{
      color: black;
      font-weight: 600;
      display:block;
      padding: 5px 10px;
      text-align: center;
      text-transform: uppercase;
      font-size: 20px;
  }
  
  
  #side-menu a:hover{
      font-weight: 600;
      color: orangered;
      opacity:60%;
      transition: 2s ease;
      text-decoration: none;
      font-size: 22px;
      background-color: white;
      animation: moveRight 2s ease-in-out;
  }
  
  
  #menu-layout{
      display:flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      background-color: black;
      height:100vh;
      padding-top: 20px;
      padding-bottom: 20px;
  }
  #menu-items{
      width:50%;
      background-color: whitesmoke;
      height:100%;
      border-top: solid 1px grey;
      border-bottom: solid 1px grey;
      display:flex;
      flex-wrap:wrap;
      flex-direction:row;
      box-shadow: inset 0px 2px 3px #303030;
  }
  #menu-items h3{
      font-size: 20px;
      color: black;
   }  
  .product{
      width: 200px;
      height:250px;
      margin:10px;
      text-align: center;
      font-family: poppins;
      border: gray 1px solid ;
      box-shadow: 0px 3px 5px grey;
      animation: slide 2s ease-in;
      background-color: white;
  }
  .product:hover{
      transform: scale(1.1);
      transition: all 1s;
      box-shadow: 0px 3px 10px grey;
  }
  
  #addToCart{
      background-color: orangered;
      width:50px;
      height:50px;
      padding: 5px 10px;
      border-radius: 5px;
      text-transform: uppercase;
      color: white;
      text-decoration: none;
      border:1px darkorange groove;
      box-shadow: 0px 3px 5px grey; 
  }
  
    #addToCart:hover{
      background-color: orangered;
      box-shadow: 0px 3px 5px darkgray; 
      opacity: 80%;
      cursor:pointer;
      text-decoration: none;
      width:50px;
      height:50px;
      padding: 5px 10px;
      border-radius: 5px;
      text-transform: uppercase;
      color:white;
      transition: 1s all ease;
  }
  
  #photo{
     width: 75px;
     height:75px; 
     padding:5px;
  }
  
  #grocery-cart{
      width:25%;
      height:100%;
      border-left: solid 1px grey;
      border-top: solid 1px grey;
      border-bottom: groove 1px grey;
      border-right: solid 1px grey;
      display:flex;
      flex-flow: wrap ;
      justify-content: center;
      align-items: center;
      background-color: whitesmoke;
      transition: 1s all ease-in-out;
      overflow: scroll;
      opacity: 60%;
  }
  
  #grocery-cart:hover{
      width:50%;
      z-index:500;
      overflow-style:marquee;
      overflow: scroll;
      transition: all 3s ease;
      opacity: 100%;
  }
  
  .cartItemName{
      font-size: auto;
      font-weight: 600;
      color:black;
      font-family: poppins;
      height:50px;
  }
  
  .cart-item{
      width:200px;
      height:300px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: white;
      margin:5px;
      border: solid 1px grey;
      text-align: center;
      box-shadow: 0px 3px 5px gray;
      border-radius:3px;
      animation: slide 2s ease;
      transition: all 1s ease-in-out;
  }
  
  .cart-item:hover{
      transform: scale(1.05);
      transition: 2s all ease-in-out;
  }
  
  .addDelete{
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      height:50px;
      border:1px grey solid;
      border-radius: 5px;
      box-shadow: 2px 3px 5px lightgray;
      padding: 5px 10px;
  }
  
    #cartButton{
      background-color: orangered;
      width:35px;
      height:30px;
      padding: 5px 10px;
      border-radius: 5px;
      color: white;
      text-decoration: none;
      border:1px orangered groove;
      box-shadow: 2px 3px 5px lightgray; 
      font-size: 15px;
      display:flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      font-family: poppins;
      padding:5px;
  }
  #cartButton:hover{
      background-color: orangered;
      color:white;
      opacity: 60%;
      transition: 1.5s all ease;
  }
  
  .qtyBox{
      background-color: white;
      height:30px;
      width: 50px;
      display:flex;
      justify-content: center;
      align-items: center;
      font-weight: 600;
      font-family: poppins;
      font-size: 16px;
      color:black;
  }
  
  .total{
      margin: 5px;
      background-color: white;
      color:black;
      height:auto;
      width:80%;
      border: 1px grey double;
      box-shadow: inset 3px 3px 3px lightgray;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 5px 10px;    
  }
  
   #totalButton{
      background-color: orangered;
      width:auto;
      height:30px;
      padding: 5px 10px;
      border-radius: 5px;
      color: black;
      text-decoration: none;
      border:1px orangered groove;
      box-shadow: 2px 3px 5px lightgray; 
      font-size: 15px;
      display:flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      font-family: poppins;
      padding: 5px 10px;
  }
  
  #totalButton:hover{
      background-color: orangered;
      color: white;
      transition: 1.5s all ease;
  }
  
  #order-summary{
      width: 100%;
      height: 1200px;
      background-color: purple;
      display:flex;
      align-items: center;
      justify-content: center;
      flex-direction: row;
  }
  
  .order-summary-heading{
      background-color: greenyellow;
      width: 600px;
      height: 200px;
      border: solid lightgray 1px;
      padding:15px;
      color:black;
      text-align: center;
      font-weight: 600;
      font-size: 30px;
  }
  
  .order-summary-heading p{
      text-align: justify;
      font-weight: 400;
      font-size: 15px;
      color: darkslategrey;
      
  }
  
  #order-summary-sheet{
      background-color: red;
      width: 700px;
      height:auto;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding:10px;
      border-radius: 5px;
      border: solid 1.5px lightgrey;
  }
  
  .order-summary-block{
      margin:5px;
      background-color: navy;
      width: 600px;
      height: 250px;
      border: solid lightgrey 1px;
      padding:15px;
      color:black;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: row;
      border-radius: 3px;
  }
  
  .order-summary-photo{
      background-color: palevioletred;
      width:250px;
      height:200px;
      display:flex;
      align-items: center;
      justify-content: center;
      
  }
  
  #summary-photo{
      width: 120px;
      height:120px;
  }
  
  .order-summary-info{
      background-color: blue;
      width:350px;
      height:200px;
      text-align: left;
  }
  
  .price{
      color: black;
      font-family: special elite;
      font-weight: 600;
  }
  #paypal{
      width: 300px;
      height: 400px;
      background-color: whitesmoke;
      border: lightgrey double 1px;
      margin: 5px;
      display:flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      color: black;
      font-size: 30px;
  }
  
  #paypalbutton{
      width: 150px;
      height:75px;
  }
  
  #space{
      width:100%;
      height: 100px;
      background-color: white;
  }
  
  .loginbutton{
      background-color: orangered;
      opacity: 90%;
      color: white;
      border: red;
      border-radius: 5px;
      font-family: poppins;
      box-shadow: 0px 1px 3px grey;
      padding: 5px 10px;
  }
  
  #displayUser{
      color: white;
      text-align: center;
      padding: 5px;
      text-transform: uppercase;
      font-weight: 600;
  }
  
  @keyframes moveRight{
      0%
      {
       transform: translate(0px);
      }
      100%
      {
       transform: translate(30px);
      }
  }
  
  
  
  
  
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  
  
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">FETCH Burger Bistro</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a class =' navbar-right' href="index.php" >HOME</a></li>
        <li><a class =' navbar-right' href="menu.php"> MENU</a></li>
        
        
        
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
              echo '<div id = "displayUser">'
                .$_SESSION["user"]
              . '</div>';
            }
 
        ?>
  </div>
</nav>

    <div id ="space">
        
    </div>
