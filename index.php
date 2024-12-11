<?php
  include "include/config.php";
?>
<!DOCTYPE html>
<html lang="sr">
  <head>
    <!--<meta http-equiv="refresh" content="10" > -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
          name="description"
          content="Kablovi u boji za PC, izrada 
          custom slevv kablova i ostalih modova za PC">
    <link rel="icon" type="image/png" href="/img/logo.svg" sizes="32x32">
    <title><?php echo $lang['title'] ?></title>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- swipe  css-->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!-- font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!--custom css file-->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!--Header Starts-->
    <!--Zaglavlje Početak-->

    <header class="header">
      <a href="#" class="logo">
        <img src="/img/logo.svg" alt="Vranic Company Limited" />
      </a>

      <nav class="navigation">
        <a href="#home" class="active" id="test"><?php echo $lang['home'] ?></a>
        <a href="#products"><?php echo $lang['products'] ?></a>
        <a href="#about"><?php echo $lang['aboutus'] ?></a>
        <a href="#combo"><?php echo $lang['combo'] ?></a>
        <a href="#contact"><?php echo $lang['contact'] ?></a>
        <a href="#galery"><?php echo $lang['galery'] ?></a>  
        <a href="configurator">Konfigurator</a>        
      </nav>

      <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-user"></a>
        <a href="?lang=sr" id="sr" class="lang active"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Flag_of_Serbia.svg/1200px-Flag_of_Serbia.svg.png"style="height: 15px;" alt="Serbian Flag"></a>
        <a href="?lang=en" id="en" class="lang"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Flag_of_Great_Britain_%281707%E2%80%931800%29.svg/2560px-Flag_of_Great_Britain_%281707%E2%80%931800%29.svg.png"  style="height: 15px;" alt="GB Flag"></a>

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

    <!--Početak Početna-->
    <!--Home Starts-->

    <section class="home" id="home">
      <div class="swiper home-slider">
        <div class="swiper-wrapper">
          <div
            class="swiper-slide box"
            style="background: url(img/cable-sleeves-light-green.jpg)"
          >
            <div class="content">
              <h3 id="title_1"><?php echo $lang['title_1'] ?></h3>
              <p id="discount_t1"><?php echo $lang['discount_1'] ?></p>
              <div class="button">
                <a href="#products" class="button2"></a>
              </div>
            </div>
          </div>

          <div
            class="swiper-slide box"
            style="background: url(img/cable-sleeves-gold.jpg)"
          >
            <div class="content">
              <h3><?php echo $lang['title_2'] ?></h3>
              <p><?php echo $lang['discount_2'] ?></p>
              <div class="button">
                <a href="#products" class="button2"></a>
              </div>
            </div>
          </div>

          <div
            class="swiper-slide box"
            style="background: url(img/cable-sleeves-blue-carbon.jpg)"
          >
            <div class="content">
              <h3><?php echo $lang['discount_3'] ?></h3>
              <p><?php echo $lang['discount_3'] ?></p>
              <div class="button">
                <a href="#products" class="button2"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>

    <!--Home Ends-->
    <!--Kraj Početna-->

    <!--Products Starts-->
    <!--Početak Proizvodi-->

    <section class="products" id="products">
      <h1 class="heading"><?php echo $lang['our'] ?> <span><?php echo $lang['products']?></span></h1>

      <div class="swiper products-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-shopping-cart"></a>
              <a href="#" class="fas fa-eye"></a>
              <a href="#" class="fas fa-cog"></a>
            </div>

            <div class="image">
              <img src="img/cable-sleeves-blue-carbon.jpg" alt="" />
            </div>

            <div class="content">
              <h3>Poslednji Proizvodi</h3>
              <div class="price">1.499,00din<span>1,999,00din</span></div>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-shopping-cart"></a>
              <a href="#" class="fas fa-eye"></a>
              <a href="#" class="fas fa-cog"></a>
            </div>

            <div class="image">
              <img src="img/cable-sleeves-light-green.jpg" alt="" />
            </div>

            <div class="content">
              <h3>Poslednji Proizvodi</h3>
              <div class="price">1.499,00din<span>1,999,00din</span></div>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-shopping-cart"></a>
              <a href="#" class="fas fa-eye"></a>
              <a href="#" class="fas fa-cog"></a>
            </div>

            <div class="image">
              <img src="img/cable-sleeves-light-blue.jpg" alt="" />
            </div>

            <div class="content">
              <h3>Poslednji Proizvodi</h3>
              <div class="price">1.499,00din<span>1,999,00din</span></div>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-shopping-cart"></a>
              <a href="#" class="fas fa-eye"></a>
              <a href="#" class="fas fa-cog"></a>
            </div>

            <div class="image">
              <img src="img/cable-sleeves-gold.jpg" alt="" />
            </div>

            <div class="content">
              <h3>Poslednji Proizvodi</h3>
              <div class="price">1.499,00din<span>1,999,00din</span></div>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#" class="fas fa-shopping-cart"></a>
              <a href="#" class="fas fa-eye"></a>
              <a href="#" class="fas fa-cog"></a>
            </div>

            <div class="image">
              <img src="img/cable-sleeves-carbon-turquoise.jpg" alt="" />
            </div>

            <div class="content">
              <h3>Poslednji Proizvodi</h3>
              <div class="price">1.499,00din<span>1,999,00din</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Products Ends-->
    <!--Kraj Proizvodi-->

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
        <a href="#" id="btn2">
          <span><?php echo $lang['learnMore'] ?></span>
          <div class="wave"></div>
        </a>
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

    <!--Combo Stats-->
    <!--Posta Pocetak-->

    <section class="arrivals" id="combo">
      <h1 class="heading"><? echo $lang['favorite'] ?><span><? echo $lang['combo']?></span></h1>

      <div class="box-container">
        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-eye"></a>
            <a href="#" class="fas fa-cog"></a>
          </div>

          <div class="image">
            <img src="img/cable-sleeves-neon.jpg" alt="" />
          </div>

          <div class="content">
            <h3>Poslednji Proizvodi</h3>
            <div class="price">1.499,00din<span>1,999,00din</span></div>
          </div>
        </div>

        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-eye"></a>
            <a href="#" class="fas fa-cog"></a>
          </div>

          <div class="image">
            <img src="img/cable-sleeves-light-green.jpg" alt="" />
          </div>

          <div class="content">
            <h3>Poslednji Proizvodi</h3>
            <div class="price">1.499,00din<span>1,999,00din</span></div>
          </div>
        </div>

        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-eye"></a>
            <a href="#" class="fas fa-cog"></a>
          </div>

          <div class="image">
            <img src="img/cable-sleeves-neon.jpg" alt="" />
          </div>

          <div class="content">
            <h3>Poslednji Proizvodi</h3>
            <div class="price">1.499,00din<span>1,999,00din</span></div>
          </div>
        </div>

        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-eye"></a>
            <a href="#" class="fas fa-cog"></a>
          </div>

          <div class="image">
            <img src="img/cable-sleeves-light-green.jpg" alt="" />
          </div>

          <div class="content">
            <h3>Poslednji Proizvodi</h3>
            <div class="price">1.499,00din<span>1,999,00din</span></div>
          </div>
        </div>

        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-eye"></a>
            <a href="#" class="fas fa-cog"></a>
          </div>

          <div class="image">
            <img src="img/cable-sleeves-neon.jpg" alt="" />
          </div>

          <div class="content">
            <h3>Poslednji Proizvodi</h3>
            <div class="price">1.499,00din<span>1,999,00din</span></div>
          </div>
        </div>

        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-eye"></a>
            <a href="#" class="fas fa-cog"></a>
          </div>

          <div class="image">
            <img src="img/cable-sleeves-light-green.jpg" alt="" />
          </div>

          <div class="content">
            <h3>Poslednji Proizvodi</h3>
            <div class="price">1.499,00din<span>1,999,00din</span></div>
          </div>
        </div>
      </div>
    </section>

    <!--Combo Ends-->
    <!--Posta Kraj-->

    <!--Contact Starts-->
    <!--Kontakt Početak-->

    <section
      class="contact"
      id="contact"
      data-aos="fade-up"
      data-aos-duration="3000"
    >
      <h1 class="heading"><span><?php echo $lang['contact'] ?></span></h1>
      <div class="row">
        <iframe
          style="filter: invert(90%)"
          class="map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9519.287511491795!2d20.450582594311843!3d44.819739401435996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a654ef596757b%3A0x13d05f219ae5f02e!2z4oCe0JHQtdGC0L7QvSDQpdCw0LvQsOKAnA!5e0!3m2!1ssr!2srs!4v1633667431302!5m2!1ssr!2srs"
          loading="lazy">
        </iframe>
        <form action="include/contactform.php" method="post">
          <h3><?php echo $lang['sendRequest']?></h3>
          <input type="text" name="subject" placeholder="<?php echo $lang['subject']?>" class="box" />
          <input type="text" name="name" placeholder="<?php echo $lang['yourName']?>" class="box" />
          <input type="text" name="mail" placeholder="<?php echo $lang['email']?>" class="box" />
          <textarea 
            name="message"
            placeholder="<?php echo $lang['yourMessage']?>"
            class="box"
            cols="30"
            rows="10"
          ></textarea>
          <button id="btn2" type="submit"name="submit">
            <span><?php echo $lang['send']?></span>
            <div class="wave"></div>
          </button >
        </form>
      </div>
    </section>

    <!--Contact  Ends-->
    <!--Kontakt Kraj-->

    <!--Blog Starts-->
    <!--Blog Početak-->
    <section class="blogs" id="galery">
      <h1 class="heading"><?php echo $lang['your']?><span><?php echo $lang['galery']?></span></h1>
      <div class="box-container">
        <div class="box" data-aos="zoom-in-up">
          <div class="image">
            <img src="img/neon-cable-sleeve_537x537.jpg" alt="" />
          </div>
          <div class="content">
            <h3>A otkud znam sta postovi sa insta</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor
              aspernatur perspiciatis veniam similique tempora est molestias
              laudantium ex. Nihil, totam. Exercitationem quas sed accusamus
              voluptas quidem quos tempore odio quo?
            </p>
            <a href="#" class="btn"><?php echo $lang['readMore']?></a>
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar">1.jaunar, 2022</i></a>
              <a href="#"> <i class="fas fa-user">Željko Vranić</i></a>
            </div>
          </div>
        </div>

        <div class="box" data-aos="zoom-in-up">
          <div class="image">
            <img src="img/neon-cable-sleeve_537x537.jpg" alt="" />
          </div>
          <div class="content">
            <h3>A otkud znam sta postovi sa insta</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor
              aspernatur perspiciatis veniam similique tempora est molestias
              laudantium ex. Nihil, totam. Exercitationem quas sed accusamus
              voluptas quidem quos tempore odio quo?
            </p>
            <a href="#" class="btn"><?php echo $lang['readMore']?></a>
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar">1.jaunar, 2022</i></a>
              <a href="#"> <i class="fas fa-user">Željko Vranić</i></a>
            </div>
          </div>
        </div>

        <div class="box" data-aos="zoom-in-up">
          <div class="image">
            <img src="img/neon-cable-sleeve_537x537.jpg" alt="" />
          </div>
          <div class="content">
            <h3>A otkud znam sta postovi sa insta</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor
              aspernatur perspiciatis veniam similique tempora est molestias
              laudantium ex. Nihil, totam. Exercitationem quas sed accusamus
              voluptas quidem quos tempore odio quo?
            </p>
            <a href="#" class="btn"><?php echo $lang['readMore']?></a>
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar">1.jaunar, 2022</i></a>
              <a href="#"> <i class="fas fa-user">Željko Vranić</i></a>
            </div>
          </div>
        </div>
        <div class="box" data-aos="zoom-in-up">
          <div class="image">
            <img src="img/neon-cable-sleeve_537x537.jpg" alt="" />
          </div>
          <div class="content">
            <h3>A otkud znam sta postovi sa insta</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor
              aspernatur perspiciatis veniam similique tempora est molestias
              laudantium ex. Nihil, totam. Exercitationem quas sed accusamus
              voluptas quidem quos tempore odio quo?
            </p>
            <a href="#" class="btn"><?php echo $lang['readMore']?></a>
            <div class="icons">
              <a href="#"> <i class="fas fa-calendar">1.jaunar, 2022</i></a>
              <a href="#"> <i class="fas fa-user">Željko Vranić</i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Blog  Ends-->
    <!--Blog Kraj-->

    <!--Footer Starts-->

    <section class="footer" id="footer">
      <div class="box-container">
        <div class="box">
          <h3><?php echo $lang['links']?></h3>
          <a href="#home"> <i class="fas fa-arrow-right"></i><?php echo $lang['home']?></a>
          <a href="#products"> <i class="fas fa-arrow-right"></i><?php echo $lang['products']?></a>
          <a href="#about"> <i class="fas fa-arrow-right"></i><?php echo $lang['aboutus']?></a>
          <a href="#newp"> <i class="fas fa-arrow-right"></i><?php echo $lang['combo']?></a>
          <a href="#contact"> <i class="fas fa-arrow-right"></i><?php echo $lang['contact']?></a>
          <a href="#galery"> <i class="fas fa-arrow-right"></i><?php echo $lang['galery']?></a>
        </div>
        <div class="box">
          <h3><?php echo $lang['contactUs']?></h3>
          <a href="#"> <i class="fas fa-phone"></i>+381604747156</a>
          <a href="#"> <i class="fas fa-phone"></i>011 000 000</a>
          <a href="#"> <i class="fas fa-envelope"></i>office@vcl.rs</a>
          <a href="#"> <i class="fas fa-map-marker-alt"></i><?php echo $lang['location']?></a>
        </div>
        <div class="box">
          <h3><?php echo $lang['followUs']?></h3>
          <a href="#"> <i class="fab fa-facebook-f"></i>Facebook</a>
          <a href="#"> <i class="fab fa-instagram"></i>Instagram</a>
          <a href="#"> <i class="fab fa-twitter"></i>Twitter</a>
          <a href="#"> <i class="fab fa-linkedin"></i>Linkedin</a>
        </div>
      </div>

      <div class="credit">
        <span> <?php echo $lang['title']?> </span> | <?php echo $lang['copyRight']?>
      </div>
    </section>

    <!--Footer Ends-->
    
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!-- custom js script-->
    <script src="javascript/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
