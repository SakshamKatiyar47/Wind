<!--calculator Modal -->
<div class="modal fade" id="exampleModal_emi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style=" width:100%;">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLabel">Calculator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="wrapper">
          <h2>Loan EMI Calculator</h2>
          <span class="div-bar"></span>
          <div class="calculator">
            <div class="calculator-input">
              <label for="">Loan Amount (Rs.):</label>
              <input type="number" id="loan_amount">
            </div>
            <div class="calculator-input">
              <label for="">Loan Tenure (Year.):</label>
              <input type="number" id="loan_tenure">
            </div>
            <div class="calculator-input">
              <label for="">Interest Rate (%):</label>
              <input type="number" id="loan_interest">
            </div>
            <div class="calculator-input">
              <button class="calculator-btn">Calculate EMI</button>
            </div>
          </div>

          <div class="calculator-result">
            <!---Canvas-->
            <!-- <canvas id="loanChart"></canvas> -->
            <ul>
              <li>Monthly Loan EMI: <span class="loan_emi"></span></li>
              <li>Principle Amount: <span class="loan_principle"></span></li>
              <li>Loan on Interest: <span class="loan_interest_rate"></span></li>
              <li>Total Amount to be paid: <span class="loan_total"></span></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /*-------sticky-calculator-closed-----------*/ -->



<!-- /*----------Enquiry Form model--------*/ -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content enquiry_model_back">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLabel">Enquiry Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="row contact-form-wrap" id="contact_form" method="POST" action="mail_two.php">
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
            <button type="submit" name="submit" class="btn-style btn btn-primary rounded-1" >Send Message</button>
            </div>
            <div id="msg" class="message"></div>
          </form>
      </div>
    </div>
  </div>
</div>
<!-- /*----------Enquiry Form model closed--------*/ -->




<!-- The Modal BEGINNER -->

<!-- /*--------Loan Origination System----------*/ -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content model_back">

      <!-- Modal Header -->
      <div class="modal-header">
        <div class="">
          <h3 class="modal-title" style="font-weight: 700;color: #0a1137;">BEGINNER</h3>
          <h4 class="modal-title" style="font-weight: 700;color: #0a1137;">LOAN ORIGINATION SYSTEM</h4>
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body model_size">
        <div class="row">
          <div class="col-md-6">
            <ul>
              <li>Unlimited logins</li>
              <li>Leads management</li>
              <li>Fully Digitalized</li>
              <li>Flexbile Panels</li>
              <li>Systematic Records of Applications</li>
              <li>Notifications Alert</li>
              <li>Payment Gateway Integration</li>
              <li>Training and Guidance</li>
              <li>Cloud based backup </li>
              <li>Email notifications</li>
              <li>SMS integration</li>
              <li>PAN Verification</li>
              <li>Aadhaar Verification</li>
              <li>Fraud check system</li>
              <li>Cibil checking Criteria</li>
            </ul>

          </div>
          <div class="col-md-6">
            <ul>
              <li>Tele-PD Process</li>
              <li>Recommendations by Credit Manager</li>
              <li>Inspection by Filed agent and report management</li>
              <li>Completion of documents and upload required details</li>
              <li>CAM report </li>
              <li>Financial Analysis</li>
              <li>Differentiating the actual and given data by the customer to make genuine report</li>
              <li>Bank Creation</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

    </div>
  </div>
</div>

<!-- /*--------Loan Origination System closed----------*/ -->

<!-- /*--------Loan Management System----------*/ -->
<div class="modal" id="myModalLoanManagement">
  <div class="modal-dialog">
    <div class="modal-content model_back">

      <!-- Modal Header -->
      <div class="modal-header">
        <div class="">
          <h3 class="modal-title" style="font-weight: 700;color: #0a1137;">BEGINNER</h3>
          <h4 class="modal-title" style="font-weight: 700;color: #0a1137;">LOAN MANAGEMENT SYSTEM</h4>
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body model_size">
        <div class="row">
          <div class="col-md-6">
            <ul>
              <li>Disbursement to loan closing to the entire process</li>
              <li>Financial Accounting</li>
              <li>software with tally features</li>
              <li>maintained system of records</li>
              <li>welcome letter for customers</li>
              <li>agreement process and other mandatory documents</li>
              <li>Repayment process with friendly EMI’s setup</li>
              <li>Scheduling the disbursement as per the needs and requirements</li>
             
            </ul>

          </div>
          <div class="col-md-6">
            <ul>
            <li>Flexible EMI’s with proper systematic </li>
              <li>Documentation report </li>
              <li>Due EMI’s settlement</li>
              <li>Alert Noifications to pay EMI</li>
              <li>After Disbursement Documentation process</li>
              <li>MIS </li>
              <li>RA and other deeds</li>
              <li>Emails process for proper updation</li>
              <li>Cibil information finalization</li>
              <li>SMS facilities</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

    </div>
  </div>
</div>

<!-- /*--------Loan Management System closed----------*/ -->

<!-- /*--------COLLECTION----------*/ -->
<div class="modal" id="myModalCollection">
  <div class="modal-dialog">
    <div class="modal-content model_back">

      <!-- Modal Header -->
      <div class="modal-header">
        <div class="">
          <h3 class="modal-title" style="font-weight: 700;color: #0a1137;">BEGINNER</h3>
          <h4 class="modal-title" style="font-weight: 700;color: #0a1137;">COLLECTION</h4>
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body model_size">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li>Differentiation</li>
              <li>Allocating resources to deal with</li>
              <li>proper followup</li>
              <li>Cash management</li>
              <li>Live tracking</li>
              <li>Location Access to admin</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

    </div>
  </div>
</div>

<!-- /*--------COLLECTION closed----------*/ -->

<!-- The Modal BEGINNER closed-->


<!-- The Modal Advance -->

<!-- /*--------Loan Origination System----------*/ -->
<div class="modal" id="myModalAdvance">
  <div class="modal-dialog">
    <div class="modal-content model_back">

      <!-- Modal Header -->
      <div class="modal-header">
        <div class="">
          <h3 class="modal-title" style="font-weight: 700;color: #0a1137;">ADVANCE</h3>
          <h4 class="modal-title" style="font-weight: 700;color: #0a1137;">LOAN ORIGINATION SYSTEM</h4>
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body model_size">
        <div class="row">
          <div class="col-md-6">
            <ul>
              <li>Unlimited logins</li>
              <li>Leads management</li>
              <li>Fully Digitalized</li>
              <li>Flexbile Panels</li>
              <li>Systematic Records of Applications</li>
              <li>Notifications Alert</li>
              <li>Payment Gateway Integration</li>
              <li>Training and Guidance</li>
              <li>Cloud based backup </li>
              <li>Email notifications</li>
              <li>SMS integration</li>
              <li>PAN Verification</li>
              <li>Aadhaar Verification</li>
              <li>Fraud check system</li>
              <li>Cibil checking Criteria</li>
            </ul>

          </div>
          <div class="col-md-6">
            <ul>
              <li>Tele-PD Process</li>
              <li>Recommendations by Credit Manager</li>
              <li>Inspection by Filed agent and report management</li>
              <li>Completion of documents and upload required details</li>
              <li>CAM report </li>
              <li>Financial Analysis</li>
              <li>Differentiating the actual and given data by the customer to make genuine report</li>
              <li>Bank Creation</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

    </div>
  </div>
</div>

<!-- /*--------Loan Origination System closed----------*/ -->

<!-- /*--------Loan Management System----------*/ -->
<div class="modal" id="myModalLoanManagementAdvance">
  <div class="modal-dialog">
    <div class="modal-content model_back">

      <!-- Modal Header -->
      <div class="modal-header">
        <div class="">
          <h3 class="modal-title" style="font-weight: 700;color: #0a1137;">ADVANCE</h3>
          <h4 class="modal-title" style="font-weight: 700;color: #0a1137;">LOAN MANAGEMENT SYSTEM</h4>
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body model_size">
        <div class="row">
          <div class="col-md-6">
            <ul>
              <li>Disbursement to loan closing to the entire process</li>
              <li>Financial Accounting</li>
              <li>software with tally features</li>
              <li>maintained system of records</li>
              <li>welcome letter for customers</li>
              <li>agreement process and other mandatory documents</li>
              <li>Repayment process with friendly EMI’s setup</li>
              <li>Scheduling the disbursement as per the needs and requirements</li>
             
            </ul>

          </div>
          <div class="col-md-6">
            <ul>
            <li>Flexible EMI’s with proper systematic </li>
              <li>Documentation report </li>
              <li>Due EMI’s settlement</li>
              <li>Alert Noifications to pay EMI</li>
              <li>After Disbursement Documentation process</li>
              <li>MIS </li>
              <li>RA and other deeds</li>
              <li>Emails process for proper updation</li>
              <li>Cibil information finalization</li>
              <li>SMS facilities</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

    </div>
  </div>
</div>

<!-- /*--------Loan Management System closed----------*/ -->

<!-- /*--------COLLECTION----------*/ -->
<div class="modal" id="myModalCollectionAdvance">
  <div class="modal-dialog">
    <div class="modal-content model_back">

      <!-- Modal Header -->
      <div class="modal-header">
        <div class="">
          <h3 class="modal-title" style="font-weight: 700;color: #0a1137;">ADVANCE</h3>
          <h4 class="modal-title" style="font-weight: 700;color: #0a1137;">COLLECTION</h4>
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body model_size">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li>Differentiation</li>
              <li>Allocating resources to deal with</li>
              <li>proper followup</li>
              <li>Cash management</li>
              <li>Live tracking</li>
              <li>Location Access to admin</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

    </div>
  </div>
</div>

<!-- /*--------COLLECTION closed----------*/ -->

<!-- The Modal Advance  CLOSED-->


<!-- The Modal PREMIUM -->

<!-- /*--------Loan Origination System----------*/ -->
<div class="modal" id="myModalPremium">
  <div class="modal-dialog">
    <div class="modal-content model_back">

      <!-- Modal Header -->
      <div class="modal-header">
        <div class="">
          <h3 class="modal-title" style="font-weight: 700;color: #0a1137;">PREMIUM</h3>
          <h4 class="modal-title" style="font-weight: 700;color: #0a1137;">LOAN ORIGINATION SYSTEM</h4>
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body model_size">
        <div class="row">
          <div class="col-md-6">
            <ul>
              <li>Unlimited logins</li>
              <li>Leads management</li>
              <li>Fully Digitalized</li>
              <li>Flexbile Panels</li>
              <li>Systematic Records of Applications</li>
              <li>Notifications Alert</li>
              <li>Payment Gateway Integration</li>
              <li>Training and Guidance</li>
              <li>Cloud based backup </li>
              <li>Email notifications</li>
              <li>SMS integration</li>
              <li>PAN Verification</li>
              <li>Aadhaar Verification</li>
              <li>Fraud check system</li>
              <li>Cibil checking Criteria</li>
            </ul>

          </div>
          <div class="col-md-6">
            <ul>
              <li>Tele-PD Process</li>
              <li>Recommendations by Credit Manager</li>
              <li>Inspection by Filed agent and report management</li>
              <li>Completion of documents and upload required details</li>
              <li>CAM report </li>
              <li>Financial Analysis</li>
              <li>Differentiating the actual and given data by the customer to make genuine report</li>
              <li>Bank Creation</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

    </div>
  </div>
</div>

<!-- /*--------Loan Origination System closed----------*/ -->

<!-- /*--------Loan Management System----------*/ -->
<div class="modal" id="myModalLoanManagementPremium">
  <div class="modal-dialog">
    <div class="modal-content model_back">

      <!-- Modal Header -->
      <div class="modal-header">
        <div class="">
          <h3 class="modal-title" style="font-weight: 700;color: #0a1137;">PREMIUM</h3>
          <h4 class="modal-title" style="font-weight: 700;color: #0a1137;">LOAN MANAGEMENT SYSTEM</h4>
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body model_size">
        <div class="row">
          <div class="col-md-6">
            <ul>
              <li>Disbursement to loan closing to the entire process</li>
              <li>Financial Accounting</li>
              <li>software with tally features</li>
              <li>maintained system of records</li>
              <li>welcome letter for customers</li>
              <li>agreement process and other mandatory documents</li>
              <li>Repayment process with friendly EMI’s setup</li>
              <li>Scheduling the disbursement as per the needs and requirements</li>
             
            </ul>

          </div>
          <div class="col-md-6">
            <ul>
            <li>Flexible EMI’s with proper systematic </li>
              <li>Documentation report </li>
              <li>Due EMI’s settlement</li>
              <li>Alert Noifications to pay EMI</li>
              <li>After Disbursement Documentation process</li>
              <li>MIS </li>
              <li>RA and other deeds</li>
              <li>Emails process for proper updation</li>
              <li>Cibil information finalization</li>
              <li>SMS facilities</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

    </div>
  </div>
</div>

<!-- /*--------Loan Management System closed----------*/ -->

<!-- /*--------COLLECTION----------*/ -->
<div class="modal" id="myModalCollectionPremium">
  <div class="modal-dialog">
    <div class="modal-content model_back">

      <!-- Modal Header -->
      <div class="modal-header">
        <div class="">
          <h3 class="modal-title" style="font-weight: 700;color: #0a1137;">PREMIUM</h3>
          <h4 class="modal-title" style="font-weight: 700;color: #0a1137;">COLLECTION</h4>
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body model_size">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li>Differentiation</li>
              <li>Allocating resources to deal with</li>
              <li>proper followup</li>
              <li>Cash management</li>
              <li>Live tracking</li>
              <li>Location Access to admin</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

    </div>
  </div>
</div>

<!-- /*--------COLLECTION closed----------*/ -->

<!-- The Modal PREMIUM  CLOSED-->





<!-- /*--------CUSTOM PLANS----------*/ -->
<div class="modal" id="myModalCollectionCustom">
  <div class="modal-dialog">
    <div class="modal-content model_back">

      <!-- Modal Header -->
      <div class="modal-header">
        <div class="">
          <h3 class="modal-title" style="font-weight: 700;color: #0a1137;">CUSTOM</h3>
          <h4 class="modal-title" style="font-weight: 700;color: #0a1137;">Your Plan</h4>
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body model_size">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li>First Plan</li>
              <li>Second Plan</li>
              <li>Third Plan</li>
              <li>Fourth Plan</li>
              <li>Fifth Plan</li>
              <li>Sixth Plan</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

    </div>
  </div>
</div>

<!-- /*--------CUSTOM closed----------*/ -->