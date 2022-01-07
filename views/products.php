<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="img\pro1.png" rel="icon">
	    <title>Products</title>
    </head>
    <body>
    <div class="header">
    <img id="logo" class="headerPhoto" src="img/logobba.jpg" alt="Behar Abdyli Logo">
    <ul class="headerList">
    <li> <a class="nav-link-wrapper" href="login.php">Login</a></li>
      <li> <a class="nav-link-wrapper" href="index.php">Home</a></li>
      <li> <a class="nav-link-wrapper" href="products.php">Products</a></li>
      <li> <a class="nav-link-wrapper" href="news.php">News</a></li>
      <li> <a class="nav-link-wrapper" href="about.php">About US</a></li>
      <li> <a class="nav-link-wrapper" href="contact.php">Contact US</a></li>
    </ul>
    </div>
                      
<div class="card">
  <img src="img/dell1.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Laptop Dell</h1>
  <p class="price">$219.99</p>
  <p>14.1 inch Hd Lightweight&Ultra-Thin 2+32G Lapbook Laptop Z8350 64-Bit Quad Core 1.92Ghz Windows 10 2Mp Camera(White)Us Plu</p>
  <p><a href="buy.php"><button>Add to Cart</button></a></p>
</div>

<div class="card">
  <img src="img/acer.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Laptop Acer</h1>
  <p class="price">$549.99</p>
  <p>14.1 inch Hd Lightweight&Ultra-Thin 2+32G Lapbook Laptop Z8350 64-Bit Quad Core 1.92Ghz Windows 10 2Mp Camera(White)Us Plu</p>
  <p><a href="buy.php"><button>Add to Cart</button></a></p>
</div>

<div class="card">
  <img src="img/asus.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Laptop Asus</h1>
  <p class="price">$199.99</p>
  <p>14.1 inch Hd Lightweight&Ultra-Thin 2+32G Lapbook Laptop Z8350 64-Bit Quad Core 1.92Ghz Windows 10 2Mp Camera(White)Us Plu</p>
  <p><a href="buy.php"><button>Add to Cart</button></a></p>
</div>

<div class="card">
  <img src="img/hp.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Laptop Hp</h1>
  <p class="price">$1499.99</p>
  <p>14.1 inch Hd Lightweight&Ultra-Thin 2+32G Lapbook Laptop Z8350 64-Bit Quad Core 1.92Ghz Windows 10 2Mp Camera(White)Us Plu</p>
  <p><a href="buy.php"><button>Add to Cart</button></a></p>
</div>

<div class="card">
  <img src="img/Lenovo.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Laptop Lenovo</h1>
  <p class="price">$1999.99</p>
  <p>14.1 inch Hd Lightweight&Ultra-Thin 2+32G Lapbook Laptop Z8350 64-Bit Quad Core 1.92Ghz Windows 10 2Mp Camera(White)Us Plu</p>
  <p><a href="buy.php"><button>Add to Cart</button></a></p>
</div>

<div class="card">
  <img src="img/msi.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Laptop MSI</h1>
  <p class="price">$159.99</p>
  <p>14.1 inch Hd Lightweight&Ultra-Thin 2+32G Lapbook Laptop Z8350 64-Bit Quad Core 1.92Ghz Windows 10 2Mp Camera(White)Us Plu</p>
  <p><a href="buy.php"><button>Add to Cart</button></a></p>
</div>
<br>
<br>

<div class="floating-text">
	 All right reserved <a href="" target="_blank"> © BeharAbdyli </a> Design
</div>

  <script src="js/main.js"></script>

  <style>
  /* Pjesa e zakonshme     */

* {
    margin: 0px;
    padding: 0px;
}
body {
    font-size: 120%;
    background-color: #fc3d03;
}
  
.header {
  position: center;
  display: flex;
  justify-content: space-between;
  width: 90%;
  left: 5%;
  height: 20%;
  flex-wrap: wrap;
}

.header>img {
  width: 400px;
  height: 100px;
  border-radius: 50%;
}

ul {
  display: flex;
  list-style-type: none;
  flex-wrap: nowrap;
}

.headerList li {
  transition: 0.5s ease;
  margin: 0px 4px;
  height: 30px;
  width: 100px;
  text-align: center;
  padding-top: 10px;
  color: white;
  background-image: linear-gradient(45deg, #302c2b, #328ca8);
  border-radius: 10px;
}

ul li:hover {
  height: 40px;
  width: 110px;
  padding-top: 20px;
  transition: 0.5s ease;
}
.header ul li a{
    color: rgb(255, 255, 255);
    font-family:bold;
}

@media only screen and (max-width:375px) {
  .header {
    flex-direction: column;
  }

  .header img {
    height: 50px;
    width: 50px;
    position: relative;
    left: 40%;
  }

  .headerList {
    padding: 0;
  }
}

 /* Ketu nderhyrja ne products */
 .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: #00ed0c;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}


@media only screen and (min-width:1366px) {} 

/*Pjesa e css ne formen e contact us */
 @import url('https://fonts.googleapis.com/css?family=Raleway');

* {
    font-family: Georgia;
} 
.floating-text {
	background-color: #001F61;
	border-radius: 10px 10px 0 0;
	color: #fff;
	font-family: 'Muli';
	padding: 7px 15px;
	position: fixed;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
	text-align: center;
	z-index: 998;
}

.floating-text a {
	color: gold;
	text-decoration: none;
}


  </style>
      
  </body>
  </html>