<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/3bb7b7789b.js" crossorigin="anonymous"></script>

<style>
.carousel{
	position: fixed;
	top: 50%;
	left: 50%;
	margin-top: -150px;
	margin-left: -250px;

}
.carousel-item{
    text-align: center;
     /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.card{
  height:300px;
  width:500px;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.main_box{
  position: relative;
  background: url('side.jpeg') right no-repeat;
  background-size: cover;
  height: 100vh;
  width: 100%;
}
.main_box .sidebar_menu{
  position: fixed;
  height: 100vh;
  width: 280px;
  left: -280px;
  background: rgba(255, 255, 255, 0.1);
  box-shadow: 0px 0px 6px rgba(255, 255, 255, 0.5);
  overflow: hidden;
  transition: all 0.3s linear;
}
.sidebar_menu .logo{
  position: absolute;
  width: 100%;
  height: 60px;
  box-shadow: 0px 2px 4px rgba(255, 255, 255, 0.5);
}
.sidebar_menu .logo a{
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  position: absolute;
  left: 50px;
  line-height: 60px;
  text-decoration: none;
}
.sidebar_menu .menu{
  position: absolute;
  top: 80px;
  width:100%;
}
.sidebar_menu .menu li{
  padding: 5px 15px;
}
.sidebar_menu .menu i{
  color: #fff;
  font-size: 18px;
  padding-right: 8px;
}
.sidebar_menu .menu a{
  color: #fff;
  font-size: 16px;
  text-decoration: none;
}
.sidebar_menu .menu li:hover{
  border-left: 1px solid #fff;
  box-shadow: 0 0 4px rgba(255, 255, 255, 0.5);
}
.sidebar_menu .social_media{
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  bottom: 20px;
  list-style: none;
  cursor: pointer;
}
.sidebar_menu .social_media i{
  text-decoration: none;
  padding: 0 5px;
  color: #fff;
  opacity: 0.6;
  font-size: 20px;
}
.sidebar_menu .social_media i:hover{
  opacity: 1;
  transition: all 0.2s linear;
  transform: scale(1.01);
}
#check{
  display: none;
}
.main_box .btn_one i{
  color: #fff;
  font-size: 25px;
  font-weight: 700;
  position: absolute;
  left: 16px;
  line-height: 60px;
  cursor: pointer;
  opacity: 1;
  transition: all 0.3s linear;  
}
 .sidebar_menu .btn_two i{
  font-size: 20px;
  line-height: 60px;
  position: absolute;
  left: 230px;
  top: -0px;
  cursor: pointer;
  opacity: 0;
  transition: all 0.3s linear;
}
.btn_one i:hover{
  font-size: 27px;
}
.btn_two i:hover{
  font-size: 23px;
}
#check:checked ~ .sidebar_menu{
  left: 0;
}
#check:checked ~ .btn_one i{
  opacity: 0;
}
#check:checked ~ .sidebar_menu .btn_two i{
  opacity: 1;
}

</style>
</head>
<body style="background-color:rosybrown;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
          <div  id="a" class="carousel-item active">
          <div class="card">
          <img class="card-img-top" src="b.jpg" alt="First slide">
          <div class="card-body">
        </div>
      </div>
    </div>
    <div id="b" class="carousel-item">
      <div class="card"">
         <img class="card-img-top" src="b.jpg" alt="Second slide">
        <div class="card-body">
    </div>
    </div>
    </div>
    <div id="3" class="carousel-item">
      <div class="card">
      <img class="card-img-top" src="b.jpg" alt="Third slide">
      <div class="card-body">
    </div>
    </div>
    </div>
    <div id="4" class="carousel-item">
      <div class="card"">
         <img class="card-img-top" src="b.jpg" alt="Fourth slide">
        <div class="card-body">
    </div>
    </div>
    </div>
    <div id="5" class="carousel-item">
      <div class="card"">
         <img class="card-img-top" src="b.jpg" alt="fifth slide">
        <div class="card-body">
    </div>
    </div>
    </div>
    <div id="6" class="carousel-item">
      <div class="card"">
         <img class="card-img-top" src="b.jpg" alt="Sixth slide">
        <div class="card-body">
    </div>
    </div>
    </div>
    <div id="7" class="carousel-item">
      <div class="card"">
         <img class="card-img-top" src="b.jpg" alt="Sevent slide">
        <div class="card-body">
    </div>
    </div>
    </div>
    <div id="8" class="carousel-item">
      <div class="card"">
         <img class="card-img-top" src="b.jpg" alt="Eighth slide">
        <div class="card-body">
    </div>
    </div>
    </div>
    <div id="9" class="carousel-item">
      <div class="card"">
         <img class="card-img-top" src="b.jpg" alt="Nineth slide">
        <div class="card-body">
    </div>
    </div>
    </div>
    <div id="10" class="carousel-item">
      <div class="card"">
         <img class="card-img-top" src="b.jpg" alt="Tenth slide">
        <div class="card-body">
    </div>
    </div>
    </div>
    <div id="11" class="carousel-item">
      <div class="card"">
         <img class="card-img-top" src="b.jpg" alt="Eleventh slide">
        <div class="card-body">
    </div>
    </div>
    </div>
    <div id="12" class="carousel-item">
      <div class="card"">
         <img class="card-img-top" src="b.jpg" alt="Twelfth slide">
        <div class="card-body">
    </div>
    </div>
    </div>
    <div id="13" class="carousel-item">
      <div class="card"">
         <img class="card-img-top" src="b.jpg" alt="Thirteenth slide">
        <div class="card-body">
    </div>
    </div>
    </div>
    <div id="14" class="carousel-item">
      <div class="card"">
         <img class="card-img-top" src="b.jpg" alt="Fourteenth slide">
        <div class="card-body">
    </div>
    </div>
    </div>
    <div id="15" class="carousel-item">
      <div class="card"">
         <img class="card-img-top" src="b.jpg" alt="Fifteenth slide">
        <div class="card-body">
    </div>
    </div>
    </div>
        </div>
      </div>
      <div class="main_box">
    <input type="checkbox" id="check">
    <div class="btn_one">
      <label for="check">
        <i class="fas fa-bars"></i>
      </label>
    </div>
    <div class="sidebar_menu">
      <div class="logo">
        <a href="#">Fulan & Fulanah</a>
          </div>
        <div class="btn_two">
          <label for="check">
            <i class="fas fa-times"></i>
          </label>
        </div>
      <div class="menu">
        <ul>
          <li><i class="fas fa-home"></i>
            <a href="#a">COVER</a>
          </li>
          <li>
            <i class="fas fa-user-shield"></i>
            <a href="#b">PROTOKOL</a>
          </li>
          <li>
            <i class="fas fa-stopwatch"></i>
            <a href="#3">COUNTDOWN</a>
          </li>
          <li>
            <i class="fas fa-scroll"></i>
            <a href="#4">QUOTES</a>
          </li>
          <li>
            <i class="far fa-envelope"></i>
            <a href="#5">UNDANGAN</a>
          </li>
          <li>
            <i class="far fa-calendar-alt"></i>
            <a href="#6">KEGIATAN</a>
          </li>
          <li>
            <i class="fas fa-map-marked-alt"></i>
            <a href="#7">MAP</a>
          </li>
          <li>
          <i class="fas fa-male"></i>
            <a href="#8">MEMPELAI PRIA</a>
          </li>
          <li>
          <i class="fas fa-female"></i>
            <a href="#9">MEMPELAI WANITA</a>
          </li>
          <li>
          <i class="fas fa-heart"></i>
            <a href="#10">KISAH CINTA</a>
          </li>
          <li>
          <i class="far fa-image"></i>
            <a href="#11">GALERI</a>
          </li>
          <li>
          <i class="fab fa-youtube"></i>
            <a href="#12">VIDEO</a>
          </li>
          <li>
          <i class="fab fa-wpforms"></i>
            <a href="#13">RSVP</a>
          </li>
          <li>
          <i class="fas fa-gift"></i>
            <a href="#14">HADIAH</a>
          </li>
          <li>
          <i class="fas fa-check-double"></i>
            <a href="#15">END</a>
          </li>
        </ul>
      </div>
    </div> 
       
      <a href="#myCarousel" data-slide="prev"> <i class="fas fa-chevron-circle-left fa-2x" style=" margin-left:430px; margin-top: 360px; color:black"></i></a>
      <a href="#myCarousel" data-slide="next"> <i class="fas fa-chevron-circle-right fa-2x" style=" padding-left:590px; margin-top: 360px; color:black"></i></a>

    
    </div>  
  </div>
</body>
</html>                            