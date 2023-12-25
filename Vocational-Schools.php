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

<div class="modal talkExpertModal fade" id="talkExpert" tabindex="-1" aria-labelledby="talkExpertLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-tertiary">
      <div class="modal-header border-bottom-0">
        <h4 class="modal-title" id="exampleModalLabel">Talk To An Expert</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#!" method="post">
          <!-- Name and Business Type Inputs -->
          <div class="mb-3 form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Your Name">
          </div>
          <!-- Phone Number Input in Bootstrap Form -->
          <div class="mb-3 select-box">
          <div class="selected-option">
          <div>
          <span class="iconify" data-icon="flag:in-4x3"></span>
          <strong>+91</strong>
          </div>
          <input type="tel" name="tel" class="form-control" placeholder="Your Phone Number">
          </div>
          <div class="options">
          <input type="text" class="search-box" placeholder="Search Country Name">
          <ol>
            
          </ol>
          </div>
          </div>
          <div class="form-group mb-3">
            <label for="business_type" class="fw-bold">Business Type</label>
            <select name="business_type" id="business_type" class="form-control form-select" required="">
            <option value="" selected="" disabled="">Choose Your Business Type</option>
  <optgroup label="FEES">
          <option value="Badmiton coaching">Badmiton coaching</option>
          <option value="Dance School">Dance School</option>
          <option value="Martial arts coaching">Martial arts coaching</option>
          <option value="Music schools">Music schools</option>
         <option value="Sports Acadamy">Sports Acadamy</option>
   </optgroup>

  <optgroup label="INSTALMENTS">
      <option value="Hire Purchase">Hire Purchase</option>
      <option value="Small Money Lender">Small Money Lender</option>
  </optgroup>

  <optgroup label="INVOICES">
      <option value="Manufacturer">Manufacturer</option>
      <option value="Trader">Trader</option>
      <option value="Wholesaler">Wholesaler</option>
  </optgroup>

   <optgroup label="MAINTENANCE">
      <option value="Air conditioner">Air conditioner</option>
      <option value="Building">Building</option>
      <option value="Home Appliances">Home Appliances</option>
      <option value="Vehicle">Vehicle</option>
  </optgroup>

  <optgroup label="RENTALS">
          <option value="Aircon rentals">Aircon rentals</option>
          <option value="Car rentals">Car rentals</option>
          <option value="Computer rentals">Computer rentals</option>
  </optgroup>

  <optgroup label="SAVINGS">
       <option value="Finance Chit">Finance Chit</option>
        <option value="Gold Chit">Gold Chit</option>
</optgroup>

<optgroup label="SUBSCRIPTION">
        <option value="Club">Club</option>
        <option value="Gym">Gym</option>
        <option value="Magazine">Magazine</option>
        <option value="SaaS">SaaS</option>
</optgroup>

 <optgroup label="OTHERS">
       <option value="Others">Others</option>

</optgroup>

</select>
          </div>   
         <!-- Submit and Close Buttons -->
         <div class="d-flex justify-content-end">
          <button type="submit" class="btn me-2" style="background-color: #fe015b" >Submit</button>
        </div>            
        </form>
      </div>
    </div>
  </div>
</div>


  <section class=" position-relative overflow-hidden pt-4 pb-4">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="section-title">
            <h1 class="text-capitalize mb-4">Fees Collection Software for Vocational Schools</h1>
            <p>Fees Collection Software automates Vocational Schools invoicing and collections processes</p>
                <a type="button"
                class="btn fs-6" style="background-color: #fe015b" href="#" data-bs-toggle="modal" data-bs-target=""><span></span>Try Software Now
                </a>
                <a type="button"
            class="btn fs-6" style="background-color: #fe015b" href="#" data-bs-toggle="modal" data-bs-target="#talkExpert"><span></span>Talk to an
            Expert</a>
            </p>
          </div>
        </div>
        <div class="col-lg-1 text-center text-lg-end">
          
        </div>  
        <div class="col-lg-7 text-center text-lg-end">
          <img loading="lazy" decoding="async" src="images/bg/features/vocational-school-payment-collection.png" class="img-fluid rounded ">
        </div>   
      </div>
    </div>
    </section>
    <section class="pt-4 pb-4">
      <div class="container mt-4">
        <div class="row mt-2 align-items-center justify-content-between">
          <div class="section-title text-center">
            <!-- <p class="text-primary text-uppercase fw-bold mb-3">FEATURE HIGHLIGHTS</p> -->
            <h1>Features of Fees Collection <br>Software for Vocational Schools</h1>
            
          </div>
          <div class="col-lg-3">
            <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
              <div class="d-block d-sm-flex align-items-center m-2">
                <div class="icon me-4 mb-4 mb-sm-0"> <img src="images/bg/icons/iconfeature.png" width="65" class="mt-1">
                </div>
                <div class="block">
                  <p class="mb-3">WhatsApp Integration for Communication & Reminders.</p>
                </div>
              </div>
            </div>
            <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
              <div class="d-block d-sm-flex align-items-center m-2">
                <div class="icon me-4 mb-4 mb-sm-0"><img src="images/bg/icons/iconchit.png" width="70" class="mt-1">
                </div>
                <div class="block">
                  <p class="mb-3">Payment Gateway Integration for Faster Processing.</p>
                </div>
              </div>
            </div>
            <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
              <div class="d-block d-sm-flex align-items-center m-2">
                <div class="icon me-4 mb-4 mb-sm-0"> <img src="images/bg/icons/iconfeature3.png" width="65" class="mt-1">
                </div>
                <div class="block">
                  <p class="mb-3">Accounting Software Synchronization to Refresh Data.</p>
                </div>
              </div>
            </div>             
            </div>
          <div class="col-lg-6">
            <img src="images/bg/features/feature-zeppay.png" alt="Image 1" class="img-fluid rounded">
          </div>
          <div class="col-lg-3">
            <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
              <div class="d-block d-sm-flex align-items-center m-2">
                <div class="icon me-4 mb-4 mb-sm-0"> <img src="images/bg/icons/iconfeature2.png" width="65" class="mt-1">
                </div>
                <div class="block">
                  <p class="mb-3">Dashboard showing Cash Projections, Collections and Defaulters</p>
                </div>
              </div>
            </div>
            <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
              <div class="d-block d-sm-flex align-items-center m-2">
                <div class="icon me-4 mb-4 mb-sm-0">  <img src="images/bg/icons/iconchit3.png" width="65" class="mt-1">
                </div>
                <div class="block">
                  <p class="mb-3">Click-to-Call with Recording Feature.</p>
                </div>
              </div>
            </div>
            <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
              <div class="d-block d-sm-flex align-items-center m-2">
                <div class="icon me-4 mb-4 mb-sm-0"> <img src="images/bg/icons/iconfeature6.png" width="65" class="mt-1">
                </div>
                <div class="block">
                  <p class="mb-3">Automated Reminders via WhatsApp, SMS, and Email.</p>
                </div>
              </div>
            </div>             
            </div>
        </div>
        <div class="text-center">
        <a type="button"
        class="btn fs-6" style="background-color: #fe015b" href="#" data-bs-toggle="modal" data-bs-target=""><span></span>Try Software Now
        </a>
        <a type="button"
    class="btn fs-6" style="background-color: #fe015b" href="#" data-bs-toggle="modal" data-bs-target="#talkExpert"><span></span>Talk to an
    Expert</a>
      </div>
    </div>
      </section>
    
<section class="about-section position-relative overflow-hidden">
  <div class="container mt-4 mb-4">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-1 text-center text-lg-end">
      
      </div>
      <div class="col-lg-5">
        <div class="section-title">
          <h1>Why Zeppay?</h1>
          <ul style="color:#000" class="m-0 ml-3 p-3 text-black ">
            <li class="py-2"><strong>Free Onboarding</strong>
              <br>No cost account creation with free credits to try-before-buy.<br> </li>
            <li class="py-2"><strong>Chat Customer Service</strong>
              <br>Integrated chat support to resolve questions and expedite payments.<br> </li>
            <li class="py-2"><strong>Quick Implementation</strong>
              <br>Our experts will help you setup your account in minutes at no cost.<br> </li>
            <li class="py-2"><strong>Transactional Pricing</strong>
              <br>Our per-invoice fixed cost helps you keep more of the money you collect.<br> </li>
            <li class="py-2"><strong>Super Easy Interface</strong>
              <br>Intuitive interface requires no training. <br> </li>
            <li class="py-2 mb-4"><strong>Import Invoices from Accounting Softwares</strong>
              <br>Use existing software integrations or Excel to import invoice and customer data.<br> </li>    
          </ul>
          <a type="button"
          class="btn fs-6" style="background-color: #fe015b" href="#" data-bs-toggle="modal" data-bs-target=""><span></span>Try Software Now
          </a>
          <a type="button"
      class="btn fs-6" style="background-color: #fe015b" href="#" data-bs-toggle="modal" data-bs-target="#talkExpert"><span></span>Talk to an
      Expert</a>
          
        </div>
      </div>
      <div class="col-lg-6 text-center text-lg-end">
        <img loading="lazy" decoding="async" src="images/bg/method.gif" alt="About Ourselves" class="img-fluid" width="600px" height="auto" >
      </div>
    </div>
  </div>
</section>

<section class="about-section position-relative bg-tertiary overflow-hidden">
  <div class="container mt-4 mb-4">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-6 text-center text-lg-end">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-4 col-md-4 col-sm-2">
            <img src="images/bg/comlogo1.png" alt="" class="img-fluid">
          </div>
          <div class="col-lg-3 col-md-3 col-sm-2">
            <img src="images/bg/comlogo2.png" width="120px" height="120px" alt="" class="img-fluid">
          </div>
          </div>
          <div class="row justify-content-center align-items-center">
          <div class="col-lg-3 col-md-3 col-sm-2">
            <img src="images/bg/comlogo3.png" alt="" class="img-fluid">
          </div>
          <div class="col-lg-3 col-md-3 col-sm-2">
            <img src="images/bg/comlogo5.png" alt="" class="img-fluid">
          </div>
          </div>
          <div class="row justify-content-center align-items-center">
          <div class="col-lg-3 col-md-3 col-sm-2">
            <img src="images/bg/comlogo6.png" alt="" class="img-fluid">
          </div>
          <div class="col-lg-4 col-md-3 col-sm-2">
            <img src="images/bg/comlogo7.png" alt="" class="img-fluid">
          </div>
          </div>
          <div class="row justify-content-center align-items-center">
          <div class="col-lg-3 col-md-3 col-sm-2">
            <img src="images/bg/comlogo8.png" alt="" class="img-fluid">
          </div>
          </div>
        </div>
       
      <div class="col-lg-5">
        <div class="section-title">
          <h1>Works Standalone Or Syncs To Your Current Software</h1>
          <p class="lead mb-0 mt-4">
            <p>You can create payment requests using only zeppay or can instantly sync to your existing accounting software and send reminders automatically.</p> 
          </p> 
          <a type="button"
          class="btn fs-6" style="background-color: #fe015b" href="#" data-bs-toggle="modal" data-bs-target=""><span></span>Try Software Now
          </a>
          <a type="button"
      class="btn fs-6" style="background-color: #fe015b" href="#" data-bs-toggle="modal" data-bs-target="#talkExpert"><span></span>Talk to an
      Expert</a>
          
        </div>
      </div>

    </div>
  </div>
</section>

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
      class="btn fs-6" href="#" style="background-color: #fe015b"><span></span>Free Sign Up</a>
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