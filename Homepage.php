<?php
include_once('DBConnection.php');

$query="select id,name,price,qty from my_cart";

$categories=mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html>

<head>

  <title>WPL Trading</title>
  <link href="images/Logo.png" rel="icon">
  <link href="assets/css/style.css" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  
</head>

<body>

  
  <!--Header-->
  <header id="header" class="header">
    <div class="container-fluid d-flex align-items-center fixed-top bg-light">

      <h1 class="logo me-auto"><a href="index.php"><img src="images/Logo.png" alt=""></a></h1>
      
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          
          <li class="dropdown"><a href="#"><span>Catogeries</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#hardware">Hardware Items</a></li>
              <li><a href="#electric">Electric Items</a></li>
              <li class="dropdown"><a href="#paint"><span>Paints</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#emulsion">Emulsion</a></li>
                  <li><a href="#enamel">Enamel</a></li>
                  <li class="dropdown"><a href="#"><span>Floor Paints</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Floor Paint (Q/D)</a></li>
                      <li><a href="#">Top Coat</a></li>
                      <li><a href="#">Water Based</a></li>
                    </ul>
                  </li>
                  <li><a href="#roof">Roofing Paints</a></li>
                </ul>
              </li>
              
              <li><a href="#plumbing">Plumbing</a></li>
              <li><a href="#">Home & Kitchen</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="cart.php">Cart</a></li>
          <li><a href="index.php"><button type="btn" class="btn btn-warning">Logout</button></a></li>
        </ul>
        
        
      </nav>

      

    </div>
  </header>





  <!--Top Section-->
  <section id="top" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to WPL Trading</h1>
      <h2>The Biggest  Hardware Supermarket in Warakapola</h2>
      <a href="#" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>





  <main id="main">



    <!--Item Section-->
    <section id="item1" class="item1">
      
      <div class="container" align="center">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4" >
            <div class="card">
              <img src="images/card/AirFreshners.jpg" style="height: 175px;" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Air Freshners</h5>
                <p class="card-text">**********</p>
                <button type="button" class="btn btn-primary" id="btnAirFresh">Show</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
              <img src="images/card/Cleaning.jpg" style="height: 175px;" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cleaning Items</h5>
                <p class="card-text">**********</p>
                <button type="button" class="btn btn-primary" id="btncleaningitems" disabled>Show</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
              <img src="images/card/Tiles.jpg" style="height: 175px;" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Tiles & Skirtings</h5>
                <p class="card-text">**********</p>
                <button type="button" class="btn btn-primary" id="btnTiles" disabled>Show</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>



    <section id="item2" class="item2">
      <div class="container" align="center">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
              <img src="images/card/Adhesive.jpg" style="height: 175px;" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Adhesive</h5>
                <p class="card-text">**********</p>
                <button type="button" class="btn btn-primary" id="" disabled>Show</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
              <img src="images/card/BindingWire.jpeg" style="height: 175px;" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Binding Wire</h5>
                <p class="card-text">**********</p>
                <button type="button" class="btn btn-primary" id="" disabled>Show</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
              <img src="images/card/Polythene.jpg" style="height: 175px;" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Polythene Sheet</h5>
                <p class="card-text">**********</p>
                <button type="button" class="btn btn-primary" id="" disabled>Show</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>

    <section id="item3" class="item3">
      <div class="container" align="center">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
              <img src="images/card/Brass.jpg" style="height: 175px;" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Brass Fittings</h5>
                <p class="card-text">**********</p>
                <button type="button" class="btn btn-primary" id="" disabled>Show</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
              <img src="images/card/Door.jpg" style="height: 175px;" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Door Locks</h5>
                <p class="card-text">**********</p>
                <button type="button" class="btn btn-primary" id="" disabled>Show</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
              <img src="images/card/Padlocks.jpg" style="height: 175px;" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Pad Locks</h5>
                <p class="card-text">**********</p>
                <button type="button" class="btn btn-primary" id="" disabled>Show</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>

    <section id="item4" class="item4">
      <div id="electric" class="container" align="center">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
              <img src="images/card/Lighting.jpg" style="height: 175px;" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lighting Items</h5>
                <p class="card-text">**********</p>
                <button type="button" class="btn btn-primary" id="" disabled>Show</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
              <img src="images/card/Switchs.jpg" style="height: 175px;" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Switch & Sockets</h5>
                <p class="card-text">**********</p>
                <button type="button" class="btn btn-primary" id="" disabled>Show</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
              <img src="images/card/Wire.jpg" style="height: 175px;" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Wire & Cables</h5>
                <p class="card-text">**********</p>
                <button type="button" class="btn btn-primary" id="" disabled>Show</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>


    <!--Making popups -->
    <!--popup for Air freashes-->
    <div class="popup fixed-top">
      <div class="popup-content">
        <div class="container-fluid">

        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <h3 align="center">Air Freshners</h3>
            <img src="images/close.png" alt="close" class="close">
          </div>
            </div>

            <div class="row">
    <div class="col-12 col-sm-6 col-md-3">
              <div class="card">
          <img src="images/card/airfresh2 (1).jpeg" style="height: 175px;" class="card-img-top" alt="...">
          <div class="card-body">
            <form action="iteminsert.php"  method="post">
              
            <h5 class="card-title"><input type="text" name="itemname" value="AMAMI" style="border: none;" readonly></h5>
            <h6>Price Rs<input type="text" name="itemprice" value="750.00" style="border: none;" readonly></h6>
            <h6>Qty  <input type="number" id="itemqty" name="itemqty" min="1" max="20"></h6>
            <p class="card-text">Simple description about the product..<a href="">view more</a></p>
            <button type="submit" class="btn btn-primary">ADD To Cart</button>
            </form>
            
            
          </div>
        </div>
                
    </div>


              <div class="col-12 col-sm-6 col-md-3">
              <div class="card">
          <img src="images/card/airfresh2 (2).jpeg" style="height: 175px;" class="card-img-top" alt="...">
          <div class="card-body">
          <form action="iteminsert.php"  method="post">
              
            <h5 class="card-title"><input type="text" name="itemname" value="Ambi Pur " style="border: none;" readonly></h5>
            <h6>Price Rs<input type="text" name="itemprice" value="1750.00" style="border: none;" readonly></h6>
            <h6>Qty  <input type="number" id="itemqty" name="itemqty" min="1" max="20"></h6>
            <p class="card-text">Simple description about the product..<a href="">view more</a></p>
            <button type="submit" class="btn btn-primary">ADD To Cart</button>
            </form>
          </div>
        </div>
                
              </div>
              
              
              <div class="col-12 col-sm-6 col-md-3">
              <div class="card">
          <img src="images/card/airfresh2 (3).jpeg" style="height: 175px;" class="card-img-top" alt="...">
          <div class="card-body">
          <form action="iteminsert.php"  method="post">
              <!--<h4><input type="text" name="itemcode" value="#A003" style="border: none;" hidden></h4>-->
            <h5 class="card-title"><input type="text" name="itemname" value="Natra" style="border: none;" readonly></h5>
            <h6>Price Rs<input type="text" name="itemprice" value="900.00" style="border: none;" readonly></h6>
            <h6>Qty  <input type="number" id="itemqty" name="itemqty" min="1" max="20"></h6>
            <p class="card-text">Simple description about the product..<a href="">view more</a></p>
            <button type="submit" class="btn btn-primary">ADD To Cart</button>
          </form>
          </div>
        </div>
                
              </div>
              
              <div class="col-12 col-sm-6 col-md-3">
              <div class="card">
          <img src="images/card/airfresh2 (4).jpeg" style="height: 175px;" class="card-img-top" alt="...">
          <div class="card-body">
          <form action="iteminsert.php"  method="post">
            <h5 class="card-title"><input type="text" name="itemname" value="Febreze Air" style="border: none;" readonly></h5>
            <h6>Price Rs <input type="text" name="itemprice" value="1400.00" style="border: none;" readonly></h6>
            <h6>Qty  <input type="number" id="itemqty" name="itemqty" min="1" max="20"></h6>
            <p class="card-text">Simple description about the product..<a href="">view more</a></p>
            <button type="submit" class="btn btn-primary">ADD To Cart</button>
           </form>
          </div>
        </div>
                
              </div>
              </div>



        <!--main 3 divs-->
        </div>

      </div>
    </div>




    <!-- end of popups-->

   
    

    





    <!--Gallery Section-->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          
        </div>
      </div>

      <div class="container-fluid">
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/Gallery/01.jpg" class="galelry-lightbox">
                <img src="images/Gallery/01.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/Gallery/02.jpg" class="galelry-lightbox">
                <img src="images/Gallery/02.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/Gallery/03.jpg" class="galelry-lightbox">
                <img src="images/Gallery/03.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/Gallery/04.jpg" class="galelry-lightbox">
                <img src="images/Gallery/04.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/Gallery/05.jpg" class="galelry-lightbox">
                <img src="images/Gallery/05.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/Gallery/06.jpg" class="galelry-lightbox">
                <img src="images/Gallery/06.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/Gallery/07.jpg" class="galelry-lightbox">
                <img src="images/Gallery/07.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/Gallery/08.jpg" class="galelry-lightbox">
                <img src="images/Gallery/08.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/Gallery/09.jpg" class="galelry-lightbox">
                <img src="images/Gallery/09.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/Gallery/10.jpg" class="galelry-lightbox">
                <img src="images/Gallery/10.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/Gallery/11.jpg" class="galelry-lightbox">
                <img src="images/Gallery/11.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/Gallery/12.jpg" class="galelry-lightbox">
                <img src="images/Gallery/12.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section>


    <!--About Us-->
    <section id="about" class="about">

      


      


    </section>



    <!--Contact Section-->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>

        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Colombo-Kandy Road, Infront of the bustand, Warakapola</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>wpltrading@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+94 352 267 756</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d543.7327547921736!2d80.19666050580675!3d7.224949301361307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae31b4281eb1d4d%3A0x731e753e024bb5a2!2sWPL%20Trading!5e0!3m2!1sen!2slk!4v1687248109719!5m2!1sen!2slk" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="images/Contact/con01.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Supun Pathirana</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    
                  </div>
                </div>
              </div>
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="images/Contact/con02.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Buddika Pradeep</h4>
                  <span>Manager</span>
                  <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </section>

  </main>

  <!--Footer-->

  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          <strong><span>WPL Trading</span></strong>. &copy; 2023 All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="">NIBMteamAlpha</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
  
  <!-- ************************END************************** -->

  
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jQuery.js"></script>

  <script>
      document.getElementById("btnAirFresh").addEventListener("click",function(){
        document.querySelector(".popup").style.display="flex";
      }) 

      document.querySelector(".close").addEventListener("click",function(){
        document.querySelector(".popup").style.display="none";
      }) 
      document.getElementById("close").addEventListener("click",function(){
        document.querySelector(".popup").style.display="none";
      })
      
     


    </script>
    
  

</body>

</html>