<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      .navbar-expanded {
        background-color: lightgray;
      }
  
      .navbar-expanded a {
        color: cyan; 
      }
  
      .navbar a {
        color: black; 
      }

      .shop{
        text-decoration: underline;
        color: black;
        margin-right: 20px;
      }
      .shop:hover{
        text-decoration: none;
        color: black;
      }
      .image-container {
        position: relative;
        display: inline-block;
      }

      .add-to-cart {
        position: absolute; 
        top: 70%; 
        left: 50%;
        transform: translate(-50%,100%); 
        opacity: 0; 
        width : 250px;
        height: 40px;
        transition: opacity 0.3s; 
      }

      .image-container:hover .add-to-cart {
        opacity: 1; 
      }
      
    </style>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ministore</title>
</head>
<body>
  <?php echo "My first PHP script!"?>
  <br>  
  <?php 
  $color = "red"; 
  $num = 5; 
  $num2 = 8;
  echo  $num + $num2. "<br>"; 

  echo "My car is  $color <br>";
  echo "My house is ". $coloR. "<br>";  //PHP bersifat case sensitive
  /* komen 
  lebih dr 1 
  baris 
  */


  ?>
  <?php echo strlen ("Hello worllllllldddddddddddd") ;?> <br>
  <?php echo str_word_count("Hello world !");?> <br>
  <?php echo strrev("Hello world");?> <br>
  <?php echo strpos("Hello world", "world");?> <br>
  <?php echo str_replace("Hello", "Hi", "Hello world");?> <br>
  <?php 
    function writeMsg(){
      echo "Hello world";
    }
    writeMsg();
    ?> <br>
  <?php 
    function fName($fName){
      echo "$fName Jeager. <br>";
    }
    fName("Jani");
    fName("Pip");
  ?>

<?php 
    function famName($famName, $born){
      echo "$famName Jeager. Born in $born <br>";
    }
    famName("Jani", "2000");
    famName("Pip", "2010");
  ?>
  <?php 
    function setHeight($min = 50){
      echo "The min height is $min <br>";
    }
    setHeight(80);
    setHeight();
    ?>

<?php 
    function sum($x, $y){
      $z = $x + $y;
      return $z;
    }
    echo sum(5, 5). "<br>";
    echo sum(1, 12). "<br>";
    ?>
  <!-- <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bs-text-dark fixed-top" style="background-color: white;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="images/main-logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Watches</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sale</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Pages</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">About</a></li>
                <li><a class="dropdown-item" href="#">Blog</a></li>
                <li><a class="dropdown-item" href="#">Shop</a></li>
                <li><a class="dropdown-item" href="#">Cart</a></li>
                <li><a class="dropdown-item" href="#">Checkout</a></li>
                <li><a class="dropdown-item" href="#">Single Post</a></li>
                <li><a class="dropdown-item" href="#">Single Product</a></li>
                <li><a class="dropdown-item" href="#">Contact</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img class=""src="images/search-icon.png"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#"><img src="images/contact.png"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#"><img src="images/grocery-store.png"></a>
            </li>
        </div>
      </nav>
    </header> -->
      <!-- <div class="carousel-inner m-auto " style="max-height:91vh" id="move">
        <div class="carousel-item active d-flex justify-content-between align-items-center m-5" style="padding-left: 5%; padding-right: 5%;" data-target="#move">
          <p class="">YOUR PRODUCT ARE GREAT.<br>
            <button type="button" class="btn btn-dark">SHOP PRODUCT</button>
          </p>
          <img class="w-25"src="images/banner-image.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-target="#move">
          <img src="{{ asset('img/carousel/Frame 23.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-target="#move">
          <img src="{{ asset('img/carousel/Frame 26.png') }}" class="d-block w-100" alt="...">
        </div>
      </div> -->
      <!-- <div id="carouselExample" class="carousel slide" style="background-color: #edf1f3; padding-top: 40px;">
        <div class="carousel-inner">
          <div class="carousel-item active d-flex justify-content-around align-items-center">
            <h1 class="fs-1">YOUR PRODUCTS <br> ARE GREAT.<br>
              <button type="button" class="btn btn-dark mt-5 w-50 h-100">SHOP PRODUCT</button>
            </h1>
            <img src="images/banner-image.png" style="width: 42%; height: 42%;" alt="...">
          </div>
          <div class="carousel-item d-flex justify-content-around align-items-center">
            <h1 class="fs-1">TECHNOLOGY <br> ARE GREAT.<br>
              <button type="button" class="btn btn-dark mt-5 w-50 h-100">SHOP PRODUCT</button>
            </h1>
            <img src="images/banner-image.png" style="width: 42%; height: 42%;" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="info d-flex m-5">
        <div class="m-3">
          <h5>FREE DELIVERY </h5> <p>Consectetur adipi elit lorem ipsum dolor sit amet.</p> 
        </div>
        <div class="m-3">
          <h5>QUALITY GUARANTEE </h5><p>Consectetur adipi elit lorem ipsum dolor sit amet.</p> 
        </div>
        <div class="m-3">
          <h5>DAILY OFFERS </h5><p>Consectetur adipi elit lorem ipsum dolor sit amet.</p> 
        </div>
        <div class="m-3">
          <h5>100% SECURE PAYMENT</h5> <p>Consectetur adipi elit lorem ipsum dolor sit amet.</p> 
        </div>
      </div>

      <div class="mobile-product m-5">
        <div class="title-product d-flex justify-content-between m-3">
          <div class="title"><h3>MOBILE PRODUCTS</h3></div>
          <a class="shop" href="#"><h5>GO TO SHOP</h5></a>
        </div>
      </div>



      <div class="mobile-product m-5">
        <div class="product-image m-3 d-flex justify-content-between">
          <div class="image-container">
            <img src="images/product-item1.jpg" class="product-img">
            <div class="product-info d-flex justify-content-between m-2 fs-4"  >
              <div class="product-name">
                IPHONE 10
              </div>
              <div class="product-price" style="color: #a3d6f8;">
                $980
              </div>
            </div>
            <button class="btn btn-dark add-to-cart">Add to Cart</button>
          </div>
          <div class="image-container">
            <img src="images/product-item2.jpg" class="product-img">
            <div class="product-info d-flex justify-content-between m-2 fs-4"  >
              <div class="product-name">
                IPHONE 11
              </div>
              <div class="product-price" style="color: #a3d6f8;">
                $1100
              </div>
            </div>
            <button class="btn btn-dark add-to-cart">Add to Cart</button>
          </div>
          <div class="image-container">
            <img src="images/product-item3.jpg" class="product-img">
            <div class="product-info d-flex justify-content-between m-2 fs-4"  >
              <div class="product-name">
                IPHONE 8
              </div>
              <div class="product-price" style="color: #a3d6f8;">
                $780
              </div>
            </div>
            <button class="btn btn-dark add-to-cart">Add to Cart</button>
          </div>
          <div class="image-container">
            <img src="images/product-item4.jpg" class="product-img">
            <div class="product-info d-flex justify-content-between m-2 fs-4"  >
              <div class="product-name">
                IPHONE 13
              </div>
              <div class="product-price" style="color: #a3d6f8;">
                $1500
              </div>
            </div>
            <button class="btn btn-dark add-to-cart">Add to Cart</button>
          </div>
        </div>
      </div>
 -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>