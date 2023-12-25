<?php
    include( './includes/header.php');
?>


<!-- navigation -->
<?php
    include( './includes/nav.php');
?>
<!-- /navigation -->
<?php
    include( './includes/request_demo.php');
?>


  
<section class="about-section position-relative overflow-hidden pt-4 pb-4">
  <div class="container mt-4">
    <div class="row align-items-center">
      <div class="section-title text-center">
        <h1>Pricing Plans</h1>
        <p>Supercharge your Cash Flow..</p>
        <a type="button" class="btn fs-6" style="background-color: #fe015b" href="#" data-bs-toggle="modal" data-bs-target="#talkExpert"><span></span>Talk to an Expert</a>
      </div>
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-4 text-center pt-4 pb-4 " style="border: 1px solid #fe015b; border-radius: 10px;">
          <p><b>Simple Pricing</b></p>
          <p>Increase payment collections and improve cash flows. Free your staff to concentrate on core business activities.</p>
          
          <!-- Add an element to display the dynamic pricing -->
          <h1 id="dynamicPrice">$1.00</h1>

          <p><b>Per Customer Bill</b></p>
          <a type="button" class="btn fs-6" style="background-color: #fe015b" href="signup.php"><span></span>Get Started</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
      
    <div class="row justify-content-center align-items-center ">
      <div class="section-title text-center">
      <h1>Our Payment Partners</h1>
      </div>
      <div class="text-center">
        <img src="images/bg/paymentmethod.png" width="100%" class="px-3">  
    </div>
    </div>

    <div class="row justify-content-center align-items-center pt-4">
      <div class="text-center">
      <a type="button"
      class="btn fs-6" href="signup.php" style="background-color: #fe015b"><span></span>Free Sign Up</a>
      <a type="button"
            class="btn fs-6" href="#" style="background-color: #fe015b" data-bs-toggle="modal" data-bs-target="#talkExpert"><span></span>Request Demo
            </a>
    </div>
    </div>
  </div>
  </section>

  <?php
    include( './includes/footer.php');
?>