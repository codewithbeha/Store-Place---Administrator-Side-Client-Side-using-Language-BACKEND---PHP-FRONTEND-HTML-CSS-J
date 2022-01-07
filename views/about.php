<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="img\abo.png" rel="icon">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>



  <br><br>
  <div class="slider">
    <div class="slider-content active">
    <h1>First Day WebDesign</h1> <br>
      <img src="img/slide1.jfif" alt=""> 
    </div>
    <br>
    <div class="slider-content not-active">
       <h1>First Week</h1> <br>
      <img src="img/slide2.jpg" alt="">
    </div>
    <br>
    <div class="slider-content not-active">
       <h1>First Two Week</h1> <br>
      <img src="img/slide3.jpg" alt="">
    </div>
    <br>
    <div class="slider-content not-active">
       <h1>First Three Week</h1> <br>
      <img src="img/slide4.png" alt="">
    </div>
    <br>
    <div class="slider-content not-active">
       <h1>First Month</h1> <br>
      <img src="img/slide5.png" alt="">
    </div>
  </div>
  <br> <br>
  
  <div class="floating-text">
	 All right reserved <a href="" target="_blank"> © BeharAbdyli </a> Design
</div>

  <script src="js/main.js"></script>

  <style>
* {
    margin: 0px;
    padding: 0px;
  }
  body {
    font-size: 120%;
    background-image: linear-gradient(50deg, #db3300, #c8e5fa);
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

.slider{
    position: center;

}
.slider h1{
    margin: 0;
    padding: 0;
    border: solid 0.5px blue;
    background: #29ff0d;
    font-family: bold;
    position: center;
    
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

@media only screen and (min-width:1366px) {}
  
  </style>


</body>

</html>
