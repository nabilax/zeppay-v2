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


<section class="py-5">
    <div class="container py-5">

        <h4 class="text-uppercase my-5">
            By subscribing to the POS Billing Software provided by Zeppay , you (the "Customer") are agreeing to be bound by the following terms and conditions:
            <hr>
        </h4>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> The duration of this Agreement (the “Term”) shall be ONE YEAR from the date of signing this agreement
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> For the duration of this Agreement, Zeppay gives you a non-exclusive, non-transferable license to use the software, under the terms set forth in this agreement
        </p>
        <h4 class="text-justify pt-3">
            <span>You agrees that</span>
        </h4>
        <ul>
            <li class="text-justify">You have seen a demo of the product and convinced yourself that it suits your business requirement.</li>
            <li class="text-justify">You understand that the product is sold as-is-where-is and no further customisations are on scope unless agreed vide a separate written agreement for an additional fee. </li>
            <li class="text-justify">You agree to pay the charges incurred by you at the agreed upon prices, including any applicable taxes on creation of account based on your subscription/ order form.</li>
        </ul>
        <h5 class="text-justify">
            <span>You are permitting us to create a software account with the e-mail id provided in the order form and you agree to : </span>
        </h5>
        <ul>
            <li class="text-justify pt-3"> Change the password immediately after creation and maintain the security of your password. </li>
            <li class="text-justify"> Maintain and promptly update the Registration Data, and any other information you provide to Zeppay and to keep it accurate, current and complete. </li>
            <li class="text-justify">Accept all risks of unauthorized access to the Registration Data and any other information you provide to us.</li>
        </ul>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> Your software purchased will be active for a period of one year only. After which you will have to renew the subscription of 20% of your First Year Subscription to continue access. Otherwise your account will be suspended.
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> Zeppay reserves the right to revise renewal prices once in 3 years in case there is an escalation in cost. The increase is however capped to 50% of current cost.
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> All fees and Charges are inclusive of a Cloud Server Cost without data usage restriction. However, you agree that Zeppay has the right to archive, zip and save data in a way which it deems fit to optimise the storage cost efficiencies.
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> All fees and charges are exclusive of all applicable federal, provincial, state, local or other governmental taxes, fees or charges. You is responsible for paying all Taxes associated with purchases .
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i>
            <b>You understand that under No Circumstances will you qualify for a refund once the account is created</b>
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> In the event of non-payment/ late payment, Zeppay. will be authorised to suspend any provision of services without prior warning till such payment is made
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> Zeppay will not disclose the confidential information provided by you to anyone unless compelled by law to do so.
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> You understand that his hardware, computing systems, Internet connections have to be in good operational order to provide a suitable operating environment for the software.
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> Zeppay does not warrant that the Software complies with any local or international law or regulations.
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> Zeppay does not represent or warrant that the Site will be error-free, free of viruses or other harmful components, or that defects will be corrected.
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> You understand and acknowledge that as specified in the license of the Software and the Limitation of Liability section of this Agreement, Zeppay cannot be held liable for Bugs in the Software.
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> Zeppay do not represent or warrant that the information available on or through the Site will be correct, accurate, timely or otherwise reliable.
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> Zeppay may make changes to the features, functionality or content of the Site at any time without notice.
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> Zeppay reserves the right in our sole discretion to edit or delete any documents, information or other content appearing on the Site which they consider inappropriate or harmful.
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> Should any dispute arise out of or in connection with this Agreement, you agree to reimburse Zeppay of any Legal Fee, Attorney charges, Travel and Incidental expenses incurred in protecting its interest in this agreement. The aggregate liability of Zeppay together with its affiliates arising out of or related to this Agreement will not exceed SGD 100. Multiple claims shall not enlarge this limitation.
        </p>
        <p class="text-justify">
            <i class="fas fa-check-square"></i> In no event will Zeppay or its affiliates be liable for any indirect, special, exemplary, incidental or consequential damages of any kind, including but not limited to loss of revenue, profits, savings, loss of business or other financial loss, costs of standstill or delay, lost or corrupted data, arising out of or in connection with this Agreement regardless of the form of action, whether in contract, tort (including strict negligence) or any other legal or equitable theory, even if a party or its affiliates have been advised of the possibility of such damages, or if a party or its affiliates' remedy otherwise fails of its essential purpose.
        </p>
        <p class="text-justify pb-5">
            <i class="fas fa-check-square"></i> Zeppay shall not be liable for the delay in any performance or failure to render any performance under this Agreement when such failure or delay is caused by governmental regulations, fire, strike, war, flood, accident, epidemic, embargo, appropriation of plant or product in whole or in part by any government or public authority, or any other cause or causes, whether of like or different nature, beyond the reasonable control of such party as long as such cause or causes exist.
        </p>

    </div>
</section>

<?php
    include( './includes/footer.php');
?>