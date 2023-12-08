<?php
session_start();
if (!isset($_SESSION['email'])) {
} else if ($_SESSION['id_T'] == 2) {
  header('location: ../admin/login.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hotel ZenHo</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
   <link rel="stylesheet" href="zenho.css">
</head>
<body>

   

   <header class="header">

      <a href="#" class="logo"> <img src="logo1.png" width="50" height="50" alt=""></i> ZENHO </a>

      <nav class="navbar">
         <a href="#home">home</a>
         <a href="#about">about</a>
         <a href="#room">room</a>
         <a href="#gallery">gallery</a>
         <a href="#review">review</a>
         <a class="nav-link" href="./admin/logout.php">logout</a>
         <a href="#reservation" class="btn"> book now</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </header>

   

   <section class="home" id="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(home1.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offer</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(home2.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offer</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(home2.avif) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offer</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(suite.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offer</a>
               </div>
            </div>

         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

   </section>

   

   <section class="availability">

      <form action="">

         <script src="handle.date.js"></script>
         <div class="box">
            <p>check in <span>*</span></p>
            <input type="date" class="input" id="checkIn">
         </div>

         <div class="box">
            <p>check out <span>*</span></p>
            <input type="date" class="input" id="checkOut">
         </div>

         <div class="box">
            <p>adults <span>*</span></p>
            <select name="adults" id="" class="input">
               <option value="1">1 adults</option>
               <option value="2">2 adults</option>
               <option value="3">3 adults</option>
               <option value="4">4 adults</option>
               <option value="5">5 adults</option>
               <option value="6">6 adults</option>
            </select>
         </div>

         <div class="box">
            <p>children <span>*</span></p>
            <select name="child" id="" class="input">
               <option value="0">0 child</option>
               <option value="1">1 child</option>
               <option value="2">2 child</option>
               <option value="3">3 child</option>
               <option value="4">4 child</option>
               <option value="5">5 child</option>
               <option value="6">6 child</option>
               <option value="6">7 child</option>
            </select>
         </div>

         <div class="box">
            <p>rooms <span>*</span></p>
            <select name="rooms" id="" class="input">
               <option value="1">1 rooms</option>
               <option value="2">2 rooms</option>
               <option value="3">3 rooms</option>
               <option value="4">4 rooms</option>
               <option value="5">5 rooms</option>
               <option value="6">6 rooms</option>
            </select>
         </div>

         <input type="submit" value="check availability" class="btn">

      </form>

   </section>

   

   <section class="about" id="about">

      <div class="row">

         <div class="image">
            <img src="home.jpg" alt="">
         </div>

         <div class="content">
            <h3>about us</h3>
            <p>Hotel kami adalah tempat yang sempurna untuk menikmati kenyamanan dan layanan berkualitas tinggi di destinasi yang indah.
                Di hotel kami, Anda akan menemukan kenyamanan modern yang dipadukan dengan keramahan tim profesional kami. Hotel kami memiliki lokasi strategis yang memberikan akses mudah ke tempat-tempat wisata terkenal, restoran, dan pusat perbelanjaan. Fasilitas berkualitas tinggi, termasuk kolam renang, restoran mewah, dan spa, akan menjadikan pengalaman menginap Anda istimewa.</p>
            <p>Hotel kami juga memiliki fasilitas berkualitas tinggi, termasuk kolam renang, restoran mewah, dan spa, akan menjadikan pengalaman menginap Anda istimewa. Kami hadir untuk membuat setiap kunjungan Anda menjadi liburan yang mengesankan dan tak terlupakan.</p>
         </div>

      </div>

   </section>

   

   <section class="room" id="room">

      <h1 class="heading">our room</h1>

      <div class="swiper room-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">Rp 1.000.000/night</span>
                  <img src="standart.jpeg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>STANDART ROOM</h3>
                  <p>Standart room memiliki fasilitas,tempat tidur, AC, TV, perlengkapan mandi, dan air minum.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">Rp 2.500.000/night</span>
                  <img src="super.png" alt="">
                  <a href="#reservation" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>SUPERIOR</h3>
                  <p>Superior Room menawarkan ukuran ruangan yang lebih luas dari Standard Room.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">Rp 6.000.000/night</span>
                  <img src="family.webp" alt="">
                  <a href="#reservation" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>FAMILY ROOM</h3>
                  <p>kamar hotel secara khusus para tamu yang ingin menginap bersama dua orang lebih. </p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">Rp 10.000.000/night</span>
                  <img src="suite.jpg" alt="">
                  <a href="#reservation" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>SUITE ROOM</h3>
                  <p>kamar ini memiliki fasilitas yang bagus. Bahkan bisa menemukan mini pantry </p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">Rp 4.500.000/night</span>
                  <img src="konek.webp" alt="">
                  <a href="#reservation" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>CONNECTING ROOM</h3>
                  <p> buat kamu yang menginap bersama rombongan, tapi tetap ingin terhubung</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">Rp 1.500.000/night</span>
                  <img src="disabled.webp" alt="">
                  <a href="#reservation" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>DISABLED ROOM</h3>
                  <p>kamar hotel yang disediakan khusus bagi para tamu yang mempunyai keterbatasan. </p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   

   <section class="services">

      <div class="box-container">

         <div class="box">
            <img src="icon swim.png" alt="">
            <h3>swimming pool</h3>
         </div>

         <div class="box">
            <img src="icon eat.png" alt="">
            <h3>food & drink</h3>
         </div>

         <div class="box">
            <img src="icon restaurant.png" alt="">
            <h3>restaurant</h3>
         </div>

         <div class="box">
            <img src="icon gym.png" alt="">
            <h3>fitness</h3>
         </div>

         <div class="box">
            <img src="icon facial-massage.png" alt="">
            <h3>beauty spa</h3>
         </div>

         <div class="box">
            <img src="icon sunbed.png">
            <h3>resort beach</h3>
         </div>

      </div>

   </section>

   

   <section class="gallery" id="gallery">

      <h1 class="heading">our gallery</h1>

      <div class="swiper gallery-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="galery3.avif" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="galery4.avif" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="galery5.avif" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="galery6.avif" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="galery7.avif" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="galery1.avif" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

         </div>

      </div>

   </section>

   

   <section class="review" id="review">

      <div class="swiper review-slider">
         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>Saya sangat menikmati pengalaman menginap di hotel ini. Pelayanan yang luar biasa, kamar yang luas, dan fasilitas yang lengkap. Semua staf sangat ramah dan membantu. Lokasi hotel yang strategis membuat saya mudah mengakses tempat-tempat wisata terkenal. Saya pasti akan kembali</p>
               <div class="user">
                  <img src="review 1.jpg" alt="">
                  <div class="user-info">
                     <h3>Jibril</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>Hotel ini benar-benar memahami bagaimana melayani tamu dengan baik. Setiap anggota staf selalu siap membantu dan menjawab pertanyaan. Kamar saya selalu bersih dan nyaman. Sarapan pagi yang lezat adalah bonus tambahan. Sangat direkomendasikan.</p>
               <div class="user">
                  <img src="review 2.jpg" alt="">
                  <div class="user-info">
                     <h3>Farid</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>Saya mencari tempat yang tenang untuk menginap dan hotel ini memenuhi harapan saya. Terletak di lingkungan yang damai dan dekat dengan alam, saya merasa sangat rileks selama menginap di sini. Kamar-kamarnya juga sangat nyaman, dengan pemandangan indah.</p>
               <div class="user">
                  <img src="review 3.jpg" alt="">
                  <div class="user-info">
                     <h3>Rifa</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>Kami pergi bersama keluarga besar dan hotel ini sempurna untuk kami. Ada banyak fasilitas untuk anak-anak, seperti kolam renang dan taman bermain. Kami juga menikmati makan malam di restoran hotel yang sangat lezat. Semua orang dalam keluarga senang dengan pengalaman menginap ini.</p>
               <div class="user">
                  <img src="review 4.jpg" alt="">
                  <div class="user-info">
                     <h3>Syahrul</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            

         </div>
         <div class="swiper-pagination"></div>
      </div>

   </section>

   

   <section class="reservation" id="reservation">

      <h1 class="heading">book now</h1>

      <form action="">

         <div class="container">

            <div class="box">
               <p>name <span>*</span></p>
               <input type="text" class="input" placeholder="Your Name">
            </div>

            <div class="box">
               <p>email <span>*</span></p>
               <input type="text" class="input" placeholder="Your Email">
            </div>

            <div class="box">
               <p>check in <span>*</span></p>
               <input type="date" class="input">
            </div>

            <div class="box">
               <p>check out <span>*</span></p>
               <input type="date" class="input">
            </div>

            <div class="box">
               <p>adults <span>*</span></p>
               <select name="adults" class="input">
                  <option value="1">1 adults</option>
                  <option value="2">2 adults</option>
                  <option value="3">3 adults</option>
                  <option value="4">4 adults</option>
                  <option value="5">5 adults</option>
                  <option value="6">6 adults</option>
               </select>
            </div>

            <div class="box">
               <p>children <span>*</span></p>
               <select name="child" class="input">
                  <option value="0">0 child</option>
                  <option value="1">1 child</option>
                  <option value="2">2 child</option>
                  <option value="3">3 child</option>
                  <option value="4">4 child</option>
                  <option value="5">5 child</option>
                  <option value="6">6 child</option>
               </select>
            </div>

            <div class="box">
               <p>rooms <span>*</span></p>
               <select name="rooms" class="input">
                  <option value="1">1 rooms</option>
                  <option value="2">2 rooms</option>
                  <option value="3">3 rooms</option>
                  <option value="4">4 rooms</option>
                  <option value="5">5 rooms</option>
                  <option value="6">6 rooms</option>
               </select>
            </div>

            <div class="box">
               <p>room type <span>*</span></p>
               <select name="type" class="input">
                  <option value="1">STANDART ROOM</option>
                  <option value="2">SUPERIOR ROOM</option>
                  <option value="3">CONNECTING ROOM</option>
                  <option value="4">FAMILY ROOM</option>
                  <option value="5">DISABLED ROOM</option>
                  <option value="6">SUITE ROOM</option>
               </select>
            </div>
   
         </div>

         <input type="submit" value="BOOK" class="btn">

      </form>

   </section>

  

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-852-4565</a>
            <a href="#"> <i class="fas fa-envelope"></i> zenho@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> Seminyak, Bali</a>
         </div>

         <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> home</a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> about</a>
            <a href="#room"> <i class="fas fa-arrow-right"></i> rooms</a>
            <a href="#gallery"> <i class="fas fa-arrow-right"></i> gallery</a>
            <a href="#review"> <i class="fas fa-arrow-right"></i> review</a>
            <a href=""> <i class="fas fa-arrow-right"></i> reservation</a>
         </div>

         

      </div>

      <div class="share">
         <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-whatsapp"></a>
      </div>

      <div class="credit">Created By <span>ZenHo</span></div>

   </section>

   


















   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

   <script src="script.js"></script>

   </body>
</html>

