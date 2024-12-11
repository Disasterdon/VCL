<?php
  include "include/config.php";
?>
<!DOCTYPE html>
<html lang="sr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vranic Company Limited || Configurator TEST</title>
    <!-- custom css-->
    <link rel="stylesheet" href="/css/style.css" />
    <!-- font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </head>
  <body>
    <!--Header Starts-->
    <!--Zaglavlje Početak-->

    <header class="header">
      <a href="#" class="logo">
        <img src="/img/logo.svg" alt="Vranic Company Limited" />
      </a>

      <nav class="navigation">
        <a href="index.php#home" class="active" id="test"
          ><?php echo $lang['home'] ?></a
        >
        <a href="index.php#products"><?php echo $lang['products'] ?></a>
        <a href="index.php#about"><?php echo $lang['aboutus'] ?></a>
        <a href="index.php#combo"><?php echo $lang['combo'] ?></a>
        <a href="index.php#contact"><?php echo $lang['contact'] ?></a>
        <a href="index.php#galery"><?php echo $lang['galery'] ?></a>
      </nav>

      <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-user"></a>
        <a href="?lang=sr" id="sr" class="lang active"
          ><img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Flag_of_Serbia.svg/1200px-Flag_of_Serbia.svg.png"
            style="height: 15px"
            alt="Serbian Flag"
        /></a>
        <a href="?lang=en" id="en" class="lang"
          ><img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Flag_of_Great_Britain_%281707%E2%80%931800%29.svg/2560px-Flag_of_Great_Britain_%281707%E2%80%931800%29.svg.png"
            style="height: 15px"
            alt="GB Flag"
        /></a>
      </div>

      <form action="" class="search-form">
        <input
          type="Pretraga"
          placeholder="<?php echo $lang['placeholder']?>"
          id="input-box"
        />
        <label for="input-box" class="fas fa-search"></label>
      </form>
    </header>

    <!--Header Ends-->
    <!--Zaglavlje Kraj-->

    <!--About Starts-->
    <!--O nama Početak-->

    <section class="about" id="about">
      <div class="content" data-aos="zoom-out-right">
        <h3><?php echo $lang['aboutus'] ?></h3>
        <p data-language="intro">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint
          voluptatum dignissimos ducimus quos, officiis voluptatibus in
          aspernatur atque, nesciunt enim animi voluptates corrupti rerum modi,
          numquam doloremque non quam reiciendis?
        </p>
        <button id="btn2" class="menulink">
          <span><?php echo $lang['learnMore'] ?></span>
          <div class="wave"></div>
        </button>
      </div>
      <div class="social-network" data-aos="fade-left">
        <div class="button-block">
          <div class="social">
            <a href="#"> <i class="fab fa-facebook"></i></a>
          </div>
          <div class="social">
            <a href="#"> <i class="fab fa-twitter"></i></a>
          </div>
          <div class="social">
            <a href="#"> <i class="fab fa-instagram"></i></a>
          </div>
          <div class="social">
            <a href="#"> <i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!--About Ends-->
    <!--O nama Kraj-->

        <!--Collor picker Starts-->
    <!--Odabir boja Početak-->

    <div class="pin_btn-picker">
      <button  class="connector_24pin 0 pin_btn active"><h1>24 pin<h1></button>
      <button class="connector_8pin 1 pin_btn">8 pin</button>
      <button  class="connector_4pin 2 pin_btn">4 pin</button>
    </div>

    <!--Collor picker Starts-->
    <!--Odabir boja Početak-->

    <!--Collor picker Starts-->
    <!--Odabir boja Početak-->

    <div class="color-picker">
      <button id="black" class="black_cable cable"></button>
      <button id="white" class="white_cable cable"></button>
      <button id="pink" class="pink_cable cable"></button>
      <button id="yellow" class="yellow_cable cable"></button>
      <button id="purple" class="purple_cable cable"></button>
      <button id="orange" class="orange_cable cable"></button>
      <button id="green" class="green_cable cable"></button>
      <button id="light_blue" class="light_blue_cable cable"></button>
    </div>

    <!--Collor picker Starts-->
    <!--Odabir boja Početak-->

  

    <input type="range" class="range-style" />

    
    <div class="configuration_section">
       <!--24pin Config Starts-->
       <!--24pin Konfigurator Početak-->
      <div class="connector_section hidden">
        <div style="width: 384px" id="connector_24pin" data-width="384">
          <img
            class="map"
            alt="map"
            src="/img/konfigurator/24pin_atx/loc.gif"
            usemap="#connector_24pin"
            width="384"
            style="width: 384px"
          /><map name="connector_24pin"
            ><area
              shape="poly"
              class="area-comb"
              coords="118,65,311,86,318,104,121,87,113,116,105,111,100,91"
              alt="" /><area
              id="area_1"
              shape="poly"
              class="area-pin 1"
              coords="48,347,44,212,42,145,45,112,55,80,68,59,76,55,86,61,93,68,102,87,115,124,127,193,129,262,162,262,159,194,146,115,126,54,103,30,91,22,79,19,64,24,46,44,28,90,24,155,30,346"
              alt="" /><area
              id="area_2"
              shape="poly"
              class="area-pin 2"
              coords="182,261,177,177,167,121,145,59,126,33,107,22,92,21,107,33,125,53,144,113,158,192,161,262"
              alt="" /><area
              id="area_3"
              shape="poly"
              class="area-pin 3"
              coords="200,261,197,201,191,158,179,105,158,55,145,38,127,27,108,23,125,35,144,60,166,121,176,178,181,262"
              alt="" /><area
              id="area_4"
              shape="poly"
              class="area-pin 4"
              coords="220,260,215,199,207,144,196,102,177,60,161,39,142,29,127,26,143,38,157,54,178,105,189,157,196,201,199,261"
              alt="" /><area
              id="area_5"
              shape="poly"
              class="area-pin 5"
              coords="238,259,235,215,230,172,221,126,203,78,189,54,171,38,157,30,142,28,160,39,176,60,195,102,206,144,214,199,219,260"
              alt="" /><area
              id="area_6"
              shape="poly"
              class="area-pin 6"
              coords="255,258,250,187,241,138,229,104,215,71,197,47,175,33,157,29,170,38,187,53,202,78,220,126,229,172,234,215,238,259"
              alt="" /><area
              id="area_7"
              shape="poly"
              class="area-pin 7"
              coords="273,257,268,202,261,154,249,114,229,72,211,48,192,36,175,32,195,46,215,71,229,105,240,139,249,187,255,258"
              alt="" /><area
              id="area_8"
              shape="poly"
              class="area-pin 8"
              coords="288,255,283,195,277,151,265,116,249,80,232,57,216,43,190,34,210,47,228,72,249,114,260,154,268,202,273,256"
              alt="" /><area
              id="area_9"
              shape="poly"
              class="area-pin 9"
              coords="305,255,299,190,290,145,277,109,263,78,249,60,233,46,215,40,231,57,248,80,264,116,276,151,282,194,288,256"
              alt="" /><area
              id="area_10"
              shape="poly"
              class="area-pin 10"
              coords="320,255,318,219,312,175,301,131,285,93,268,65,249,49,232,45,248,59,262,77,276,108,290,146,298,190,304,254"
              alt="" /><area
              id="area_11"
              shape="poly"
              class="area-pin 11"
              coords="335,252,329,193,317,134,304,105,285,72,266,53,247,47,266,64,284,94,300,131,312,176,317,219,320,256"
              alt="" /><area
              id="area_12"
              shape="poly"
              class="area-pin 12"
              coords="350,253,345,205,334,146,315,99,297,71,278,54,256,45,247,46,265,53,284,72,303,106,316,135,329,194,334,254"
              alt="" /></map
          ><img
            class="connector"
            alt="connector"
            src="/img/konfigurator/24pin_atx/conector/connector.png"
          />
          ><img
            class="comb1"
            alt="comb"
            src="/img/konfigurator/24pin_atx/cover/cover_black.png"
          /><img
            alt="24pin pin-1"
            class="pin_1"
            src="/img/konfigurator/24pin_atx/black_cable/1.png"
          /><img
            class="24pin pin_2"
            alt="pin-2"
            src="/img/konfigurator/24pin_atx/black_cable/2.png"
          /><img
            class="24pin pin_3"
            alt="pin-3"
            src="/img/konfigurator/24pin_atx/black_cable/3.png"
          /><img
            class="24pin pin_4"
            alt="pin-4"
            src="/img/konfigurator/24pin_atx/black_cable/4.png"
          /><img
            class="24pin pin_5"
            alt="pin-5"
            src="/img/konfigurator/24pin_atx/black_cable/5.png"
          /><img
            class="24pin pin_6"
            alt="pin-6"
            src="/img/konfigurator/24pin_atx/black_cable/6.png"
          /><img
            class="24pin pin_7"
            alt="pin-7"
            src="/img/konfigurator/24pin_atx/black_cable/7.png"
          /><img
            class="24pin pin_8"
            alt="pin-8"
            src="/img/konfigurator/24pin_atx/black_cable/8.png"
          /><img
            class="24pin pin_9"
            alt="pin-9"
            src="/img/konfigurator/24pin_atx/black_cable/9.png"
          /><img
            class="24pin pin_10"
            alt="pin-10"
            src="/img/konfigurator/24pin_atx/black_cable/10.png"
          /><img
            class="24pin pin_11"
            alt="pin-11"
            src="/img/konfigurator/24pin_atx/black_cable/11.png"
          /><img
            class="24pin pin_12"
            alt="pin-12"
            src="/img/konfigurator/24pin_atx/black_cable/12.png"
          />
        </div>
      </div>
      <!--24pin Config Ends-->
      <!--24pin Konfigurator Kraj-->

        <!--8pin Config Starts-->
      <!--8pin Konfigurator Početak-->
      <div class="connector_section hidden">
        <div style="width: 256px" id="connector_8pin" data-width="256">
          <img
            class="map"
            alt=""
            src="/img/konfigurator/8pin_cpu/loc.gif"
            usemap="#connector_8pin"
            width="256"
            style="width: 256px"
          /><map name="connector_8pin"
            ><area
              shape="poly"
              class="area-comb"
              coords="194,96,189,73,121,67,110,74,102,93,111,116,127,90"
              alt="" /><area
              shape="poly"
              class="area-pin 1"
              coords="163,263,160,201,152,139,139,90,118,43,106,31,89,21,71,21,55,34,36,72,28,103,24,159,32,351,50,350,42,164,44,121,53,86,64,64,76,54,87,59,102,79,117,123,128,179,134,265"
              alt="" /><area
              shape="poly"
              class="area-pin 2"
              coords="183,262,178,200,169,136,155,87,133,41,110,25,89,21,105,31,117,43,138,89,151,138,159,200,163,263"
              alt="" /><area
              shape="poly"
              class="area-pin 3"
              coords="202,260,197,198,188,135,172,83,150,43,127,27,110,24,133,41,155,87,168,136,177,199,182,261"
              alt="" /><area
              shape="poly"
              class="area-pin 4"
              coords="221,260,215,195,205,132,187,78,165,43,143,29,128,26,149,43,171,83,187,135,196,198,202,261"
              alt="" /></map
          ><img
            class="connector"
            alt=""
            src="img/konfigurator/8pin_cpu/connector/connector.png"
          />
          ><img
            class="comb"
            alt=""
            src="/img/konfigurator/8pin_cpu/cover/cover_black.png"
          /><img
            class="8pin pin_1"
            alt=""
            src="/img/konfigurator/8pin_cpu/black_cable/1.png"
          /><img
            class="8pin pin_2"
            alt=""
            src="/img/konfigurator/8pin_cpu/black_cable/2.png"
          /><img
            class="8pin pin_3"
            alt=""
            src="/img/konfigurator/8pin_cpu/black_cable/3.png"
          /><img
            class="8pin pin_4"
            alt=""
            src="/img/konfigurator/8pin_cpu/black_cable/4.png"
          />
        </div>
      </div>
      <!--8pin Config Ends-->
      <!--8pin Konfigurator Kraj-->
      
      <!--4pin Config Starts-->
      <!--4pin Konfigurator Početak-->
      <div class="connector_section hidden">
        <div style="width: 217px" id="connector_4pin" data-width="217">
          <img
            class="map"
            alt=""
            src="/img/konfigurator/4pin_cpu/loc.gif"
            usemap="#connector_4pin"
            width="217"
            style="width: 217px"
          /><map name="connector_4pin"
            ><area
              shape="poly"
              class="area-comb"
              coords="119,65,153,69,161,88,158,97,123,88,114,115,100,102,106,79"
              alt="" /><area
              shape="poly"
              class="area-pin 1"
              coords="164,263,157,176,143,107,129,65,109,33,90,21,72,19,52,36,34,80,25,121,27,233,31,351,50,350,45,233,43,146,47,105,61,67,73,56,82,55,93,63,109,94,124,158,132,214,134,264"
              alt="" /><area
              shape="poly"
              class="area-pin 2"
              coords="183,262,175,173,160,102,138,51,119,29,90,20,108,32,128,65,143,106,157,176,164,263"
              alt="" /></map
          ><img
            class="connector"
            alt="connector"
            src="img/konfigurator/4pin_cpu/connector/connector.png"
          />
          ><img
            class="comb"
            alt=""
            src="/img/konfigurator/4pin_cpu/cover/cover_black.png"
          /><img
            class="pin_1"
            alt=""
            src="/img/konfigurator/4pin_cpu/black_cable/1.png"
          /><img
            class="pin_2"
            alt=""
            src="/img/konfigurator/4pin_cpu/black_cable/2.png"
          />
        </div>
      </div>
      <!--4pin Config Starts-->
      <!--4pin Konfigurator Početak-->
    </div>
    <!--Footer Starts-->

    <section class="footer" id="footer">
      <div class="box-container">
        <div class="box">
          <h3><? echo $lang['links']?></h3>
          <a href="index.php#home">
            <i class="fas fa-arrow-right"></i
            ><? echo $lang['home']?></a
          >
          <a href="index.php#products">
            <i class="fas fa-arrow-right"></i
            ><? echo $lang['products']?></a
          >
          <a href="index.php#about">
            <i class="fas fa-arrow-right"></i
            ><? echo $lang['aboutus']?></a
          >
          <a href="index.php#combo">
            <i class="fas fa-arrow-right"></i
            ><? echo $lang['combo']?></a
          >
          <a href="index.php#contact">
            <i class="fas fa-arrow-right"></i
            ><? echo $lang['contact']?></a
          >
          <a href="index.php#galery">
            <i class="fas fa-arrow-right"></i
            ><? echo $lang['galery']?></a
          >
        </div>
        <div class="box">
          <h3><? echo $lang['contactUs']?></h3>
          <a href="#"> <i class="fas fa-phone"></i>+381604747156</a>
          <a href="#"> <i class="fas fa-phone"></i>011 000 000</a>
          <a href="#"> <i class="fas fa-envelope"></i>office@vcl.rs</a>
          <a href="#">
            <i class="fas fa-map-marker-alt"></i
            ><? echo $lang['location']?></a
          >
        </div>
        <div class="box">
          <h3><? echo $lang['followUs']?></h3>
          <a href="#"> <i class="fab fa-facebook-f"></i>Facebook</a>
          <a href="#"> <i class="fab fa-instagram"></i>Instagram</a>
          <a href="#"> <i class="fab fa-twitter"></i>Twitter</a>
          <a href="#"> <i class="fab fa-linkedin"></i>Linkedin</a>
        </div>
      </div>

      <div class="credit">
        <span> <? echo $lang['title']?> </span> |
        <? echo $lang['copyRight']?>
      </div>
    </section>

    <!--Footer Ends-->
    <!-- custom js script-->
    <script src="javascript/script.js"></script>
    <script src="javascript/conf.js"></script>
  </body>
</html>
