<?php
include 'include/css-url.php';
?>
<?php
include 'include/models.php';
?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center">
    <h1 class="logo me-auto"><a href="index.php"><img src="./assets/img/logo/blogo-removebg-preview.png" alt="logo"></a></h1>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link" href="index.php">Home</a></li>
        <li><a class="nav-link" href="about.php">About Us</a></li>
        <li><a class="nav-link" href="products.php">Products</a></li>
        <li><a class="nav-link" href="emi_calculator.php">EMI Calculator</a></li>
        <!-- <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li> -->
        <li><a class="nav-link active" href="contact.php">Contact Us</a></li>
        <li><a class="getstarted" data-toggle="modal" data-target="#exampleModal" href="#">Enquiry Now</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->


<!-- /*------Contact page start---------*/ -->

<div class="contact_banner d-flex align-items-center">
  <div class="container position-relative d-flex flex-column ">
    <h2>Contact Us</h2>
    <ol>
      <li><a href="index.php">Home</a></li>
      <li>Contact Us</li>
    </ol>
  </div>
</div>


<section class="contact_page">
  <div class="section_title_new">
    <div class="section-header">
      <span>Contact Information</span>
      <h2>Contact Information</h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="add_card">
          <div class="card">
            <div class="info_items text-center">
              <p><a href="tel:+91-9625418615"> <i class="fa fa-phone" class="text-dark" aria-hidden="true"></i></a></p>
              <h3 class=" mt-2">Call Us</h3>
              <p><a href="tel:+91-8700840240" class="text-dark">+91-8700840240</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="add_card">
          <div class="card">
            <div class="info_items text-center">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <h3 class=" mt-2">Our Address</h3>
              <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="add_card">
          <div class="card">
            <div class="info_items text-center">
              <p><a href="mailto:info@w"><i class="fa fa-envelope" aria-hidden="true" class="text-dark"></i></a></p>
              <h3 class=" mt-2">Mail Us</h3>
              <p><a href="mailto:info@w" class="text-dark">info@wind.in</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="get_in_touch">
  <div class="section_title_new">
    <div class="section-header">
      <span>GET IN TOUCH</span>
      <h2>GET IN TOUCH</h2>
    </div>
  </div>
  <div class="container">
    <div class="card card_get_touch">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="get_touch_image text-center">
            <img src="./assets/img/contact/new_get-removebg-preview.png" alt="" width="80%">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="get_touch_content">
          <form class="row contact-form-wrap" id="contact_form" method="POST" action="mail.php">
            <div class="col-md-12">
              <div class="form-group">
                <input name="name" class="form-control" type="text" placeholder="Name*" required />
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input name="email" class="form-control" type="email" placeholder="E-mail*" required />
              </div>

            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input name="phone" class="form-control" type="text" placeholder="Phone Number*" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" minlength="10" maxlength="10" required />
              </div>

            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input name="subject" class="form-control" type="text" placeholder="Subject*" />
              </div>

            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="message" class="form-control" rows="8" placeholder="Message"></textarea>
              </div>

            </div>
            <div class="text-center">
            <button type="submit" name="submit" class="btn-style btn btn-primary rounded-1" onclick="myFunction()">Send Message</button>
            </div>
            <div id="msg" class="message"></div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="snackbar">message sent successfully</div>


<div class="phone-icon scroll-top">
        <a href="tel:+919625418615">
            <i class="fa fa fa-phone text-white" aria-hidden="true"></i>
        </a>
    </div>

    <div class="whatsapp-icon scroll-top">
        <a href="https://api.whatsapp.com/send?phone=9625418615&text=hi..." target="_blank">
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
        </a>
    </div>



<script src="//code.tidio.co/xlnzklafmsgeufhjx8h2o4ktgn4jjjkm.js" async></script>
<script>
function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 12000);
}
</script>
<?php
include 'include/footer.php';
include 'include/js-url.php';
?>