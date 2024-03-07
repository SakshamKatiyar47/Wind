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
        <li><a class="nav-link active" href="emi_calculator.php">EMI Calculator</a></li>
        <!-- <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li> -->
        <li><a class="nav-link" href="contact.php">Contact Us</a></li>
        <li><a class="getstarted" data-toggle="modal" data-target="#exampleModal" href="#">Enquiry Now</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->


<!-- /*------EMI calculator page start---------*/ -->

<div class="emi_banner d-flex align-items-center">
  <div class="container position-relative d-flex flex-column ">
    <h2>EMI Calculator</h2>
    <ol>
      <li><a href="index.php">Home</a></li>
      <li>EMI Calculator</li>
    </ol>
  </div>
</div>

<section>
  <div class="section_title_new">
    <div class="section-header">
      <span>EMI Calculator</span>
      <h2>EMI Calculator</h2>
    </div>
  </div>


  <div class="loan-calculator">
    <div class="top">
      <h2>Loan Calculator</h2>

      <form action="#">
        <div class="group">
          <div class="title">Amount</div>
          <input type="text" value="10000" class="loan-amount" />
        </div>

        <div class="group">
          <div class="title">Interest Rate</div>
          <input type="text" value="8.5" class="interest-rate" />
        </div>

        <div class="group">
          <div class="title">Tenure (in months)</div>
          <input type="text" value="10" class="loan-tenure" />
        </div>
      </form>
    </div>

    <div class="result">
      <div class="left">
        <div class="loan-emi">
          <h3>Loan EMI</h3>
          <div class="value">123</div>
        </div>

        <div class="total-interest">
          <h3>Total Interest Payable</h3>
          <div class="value">1234</div>
        </div>

        <div class="total-amount">
          <h3>Total Amount</h3>
          <div class="value">12345</div>
        </div>

        <button class="calculate-btn">Calculate</button>
      </div>

      <div class="right">
        <canvas id="myChart" width="400" height="400"></canvas>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>


<script>
  const loanAmountInput = document.querySelector(".loan-amount");
  const interestRateInput = document.querySelector(".interest-rate");
  const loanTenureInput = document.querySelector(".loan-tenure");

  const loanEMIValue = document.querySelector(".loan-emi .value");
  const totalInterestValue = document.querySelector(".total-interest .value");
  const totalAmountValue = document.querySelector(".total-amount .value");

  const calculateBtn = document.querySelector(".calculate-btn");

  let loanAmount = parseFloat(loanAmountInput.value);
  let interestRate = parseFloat(interestRateInput.value);
  let loanTenure = parseFloat(loanTenureInput.value);

  let interest = interestRate / 12 / 100;

  let myChart;

  const checkValues = () => {
    let loanAmountValue = loanAmountInput.value;
    let interestRateValue = interestRateInput.value;
    let loanTenureValue = loanTenureInput.value;

    let regexNumber = /^[0-9]+$/;
    if (!loanAmountValue.match(regexNumber)) {
      loanAmountInput.value = "10000";
    }

    if (!loanTenureValue.match(regexNumber)) {
      loanTenureInput.value = "12";
    }

    let regexDecimalNumber = /^(\d*\.)?\d+$/;
    if (!interestRateValue.match(regexDecimalNumber)) {
      interestRateInput.value = "7.5";
    }
  };

  const displayChart = (totalInterestPayableValue) => {
    const ctx = document.getElementById("myChart").getContext("2d");
    myChart = new Chart(ctx, {
      type: "pie",
      data: {
        labels: ["Total Interest", "Principal Loan Amount"],
        datasets: [{
          data: [totalInterestPayableValue, loanAmount],
          backgroundColor: ["#e63946", "#14213d"],
          borderWidth: 0,
        }, ],
      },
    });
  };

  const updateChart = (totalInterestPayableValue) => {
    myChart.data.datasets[0].data[0] = totalInterestPayableValue;
    myChart.data.datasets[0].data[1] = loanAmount;
    myChart.update();
  };

  const refreshInputValues = () => {
    loanAmount = parseFloat(loanAmountInput.value);
    interestRate = parseFloat(interestRateInput.value);
    loanTenure = parseFloat(loanTenureInput.value);
    interest = interestRate / 12 / 100;
  };

  const calculateEMI = () => {
    checkValues();
    refreshInputValues();
    let emi =
      loanAmount *
      interest *
      (Math.pow(1 + interest, loanTenure) /
        (Math.pow(1 + interest, loanTenure) - 1));

    return emi;
  };

  const updateData = (emi) => {
    loanEMIValue.innerHTML = Math.round(emi);

    let totalAmount = Math.round(loanTenure * emi);
    totalAmountValue.innerHTML = totalAmount;

    let totalInterestPayable = Math.round(totalAmount - loanAmount);
    totalInterestValue.innerHTML = totalInterestPayable;

    if (myChart) {
      updateChart(totalInterestPayable);
    } else {
      displayChart(totalInterestPayable);
    }
  };

  const init = () => {
    let emi = calculateEMI();
    updateData(emi);
  };

  init();

  calculateBtn.addEventListener("click", init);
</script>








<?php
include 'include/footer.php';
include 'include/js-url.php';
?>