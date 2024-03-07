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
        <li><a class="nav-link active" href="products.php">Products</a></li>
        <li><a class="nav-link" href="emi_calculator.php">EMI Calculator</a></li>
        <!-- <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li> -->
        <li><a class="nav-link" href="contact.php">Contact Us</a></li>
        <li><a class="getstarted" data-toggle="modal" data-target="#exampleModal" href="#">Enquiry Now</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->


<!-- /*------Products page start---------*/ -->

<div class="products_banner d-flex align-items-center">
   <div class="container position-relative d-flex flex-column ">
      <h2>Products</h2>
      <ol>
         <li><a href="index.php">Home</a></li>
         <li>Products</li>
      </ol>
   </div>
</div>

<section class="our_products">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12">
            <div class="section_title_new">
               <div class="section-header">
                  <span>Our Products</span>
                  <h2>Our Products</h2>
               </div>
            </div>
            <!-- <div class="section_title_new">
          <h2>Our <span class="loan_work"> Products </span></h2>
        </div> -->
         </div>
      </div>
      <div class="timeline">
         <div class="timeline-section">
            <div class="timeline-year">Loan Against Property Module</div>
            <div class="timeline-icon"><i class="fas fa-hotel icon"></i></div>
            <div class="timeline-content">
               <h3 class="title"><span style="color:#13184a;">About</span> Loan Against Property</h3>
               <p class="description">
                  A loan against property(LAP) is a secured loan that is sanctioned against the asset pledged as collateral. This asset can either be an owned land, a house, or any other commercial premises.
               </p>
               <button class="btn btn-primary rounded-1"> <a href="lap_module.php" class="text-light">More Info</a></button>
            </div>
         </div>

         <div class="timeline-section red">
            <div class="timeline-year" style="font-size: 35px;">Home Loan</div>
            <div class="timeline-icon"><i class="fa-solid fa-house"></i></div>
            <div class="timeline-content">
               <h3 class="title"><span style="color:#0097bf;">About</span> Home Loan</h3>
               <p class="description">
                  Purchasing a home is one of the biggest financial decisions anyone may take in their lifetime, and if you are considering to apply for a home loan, check the interest rate and other benefits through wind finance.
               </p>
            </div>
         </div>

         <div class="timeline-section green">
            <div class="timeline-year" style="font-size: 35px;">Gold Loan</div>
            <div class="timeline-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
            <div class="timeline-content">
               <h3 class="title"><span style="color:#32a852;">About</span> Gold Loan</h3>
               <p class="description">
                  Wind Finance offers best gold Loan scheme at best price for all your personal needs. Apply online for loan against gold. Contact us now for more info!
               </p>
            </div>
         </div>
         <div class="timeline-section skyblue">
            <div class="timeline-year" style="font-size: 32px;">Personal loan</div>
            <div class="timeline-icon"><i class="fa-solid fa-user"></i></div>
            <div class="timeline-content">
               <h3 class="title"><span style="color:#3294a8;">About</span> Personal loan</h3>
               <p class="description">
                  To apply for the personal loan your credit score should have good value, there are various types of personal loan that user can opt for. To know about them read more about our service.
               </p>
            </div>
         </div>
         <div class="timeline-section blue">
            <div class="timeline-year" style="font-size: 35px;">Vehicle loan</div>
            <div class="timeline-icon"><i class="fa-solid fa-car-side"></i></div>
            <div class="timeline-content">
               <h3 class="title"><span style="color:#1768b9;">About </span> Vehicle loan</h3>
               <p class="description">
                  Applying for a vehicle loan is easy as it requires minimum documentation and require less eligibility as compared to other loan. Interest rate and other documents required can be easily changed through depending upon NBFC.
               </p>
            </div>
         </div>
         <div class="timeline-section yelllo">
            <div class="timeline-year" style="font-size: 35px;">SME Loan</div>
            <div class="timeline-icon"><i class="fa-solid fa-users"></i></div>
            <div class="timeline-content">
               <h3 class="title"><span style="color:#13184a;">About</span> SME Loan</h3>
               <p class="description">
                  Fulfill your business goals with an SME loan which offers business loan to large as well as medium and small business needs. With us you can manage Quick loan disbursal with no hassle and low interest rate offers.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>

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



<?php
include 'include/footer.php';
include 'include/js-url.php';
?>