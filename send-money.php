<?php if(isset($_COOKIE['auth'])):?>
<?php require 'class/User.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<title>Tea Transfer - Money Transfer and Online Payments</title>
<meta name="description" content="This professional platform is for a Money Transfer and online payments purpose.">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
============================================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/css/bootstrap-select.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/currency-flags/css/currency-flags.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/sweetalert.css" />
</head>
<body>

<!-- Preloader -->
<div id="preloader">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
============================================= -->
<div id="main-wrapper"> 
  <!-- Header
  ============================================= -->
  <header id="header">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          <!-- Logo
          ============================= -->
          <div class="logo"> <a class="d-flex" href="index" title="Tea - HTML Template"><img src="images/logo.png" alt="Tea" /></a> </div>
          <!-- Logo end --> 
          <!-- Collapse Button
          ============================== -->
          <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>-->
          <button type="button" class="btn btn-primary btn-sm" style="padding: 0.5rem 0.3rem!important" onclick="location.replace('dashboard')">Dashboard</button>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" class="btn btn-secondary btn-sm" style="padding: 0.5rem 0.3rem!important" onclick="location.replace('logout')">Sign Out</button>
          <!-- Collapse Button end --> 
          
          <!-- Primary Navigation
          ============================== -->
          <!--<nav class="primary-menu navbar navbar-expand-lg">
            <div id="header-nav" class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li><a href="dashboard">Dashboard</a></li>
                <li><a href="transactions">Transactions</a></li>
                <li class="active"><a href="send-money">Send/Request</a></li>
                <li><a href="help">Help</a></li>
                <li class="dropdown"> <a class="dropdown-toggle" href="#">Features</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Headers</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index">Light Version (Default)</a></li>
                        <li><a class="dropdown-item" href="feature-header-dark">Dark Version</a></li>
                        <li><a class="dropdown-item" href="feature-header-primary">Primary Version</a></li>
                        <li><a class="dropdown-item" href="index-2">Transparent Version</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Navigation DropDown</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index">Light Version (Default)</a></li>
                        <li><a class="dropdown-item" href="feature-navigation-dropdown-dark">Dark Version</a></li>
                        <li><a class="dropdown-item" href="feature-navigation-dropdown-primary">Primary Version</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Second Navigation</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="send-money">Default Version</a></li>
                        <li><a class="dropdown-item" href="deposit-money">Alternate Version</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Page Headers</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="feature-page-header-left-alignment">Left Alignment</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-center-alignment">Center Alignment</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-light">Light Version</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-dark">Dark Version</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-primary">Primary Version</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-custom-background">Custom Background</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-custom-background-with-transparent-header">Custom Background 2</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Footer</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index">Light Version Default</a></li>
                        <li><a class="dropdown-item" href="index-2">Alternate Version</a></li>
                        <li><a class="dropdown-item" href="feature-footer-dark">Dark Version</a></li>
                        <li><a class="dropdown-item" href="feature-footer-primary">Primary Version</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="feature-layout-boxed">Layout Boxed</a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-mega"> <a class="dropdown-toggle" href="#">Pages</a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="dropdown-mega-content">
                        <div class="row">
                          <div class="col-lg-3"> <span class="sub-title">Homepage</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="index">Home Version 1</a></li>
                              <li><a class="dropdown-item" href="index-2">Home Version 2</a></li>
                              <li><a class="dropdown-item" href="landing-page-send">Landing Page - Send</a></li>
                              <li><a class="dropdown-item" href="landing-page-receive">Landing Page - Receive</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3"> <span class="sub-title">Account</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="profile">My Profile</a></li>
                              <li><a class="dropdown-item" href="profile-cards-and-bank-accounts">Cards & Bank Accounts</a></li>
                              <li><a class="dropdown-item" href="profile-notifications">Notifications</a></li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Login</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="login">Login Page 1</a></li>
                                  <li><a class="dropdown-item" href="login-2">Login Page 2</a></li>
                                  <li><a class="dropdown-item" href="login-3">Login Page 3</a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Signup</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="signup">Signup Page 1</a></li>
                                  <li><a class="dropdown-item" href="signup-2">Signup Page 2 </a></li>
                                  <li><a class="dropdown-item" href="signup-3">Signup Page 3 </a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-3"> <span class="sub-title">Dashboard</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="dashboard">Dashboard</a></li>
                              <li><a class="dropdown-item" href="transactions">Transactions</a></li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Send Money</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="send-money">Send Money</a></li>
                                  <li><a class="dropdown-item" href="send-money-confirm">Send Money Confirm</a></li>
                                  <li><a class="dropdown-item" href="send-money-success">Send Money Success </a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Request Money</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="request-money">Request Money</a></li>
                                  <li><a class="dropdown-item" href="request-money-confirm">Request Money Confirm</a></li>
                                  <li><a class="dropdown-item" href="request-money-success">Request Money Success </a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Deposit Money</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="deposit-money">Deposit Money</a></li>
                                  <li><a class="dropdown-item" href="deposit-money-confirm">Deposit Money Confirm</a></li>
                                  <li><a class="dropdown-item" href="deposit-money-success">Deposit Money Success </a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Withdraw Money</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="withdraw-money">Withdraw Money</a></li>
                                  <li><a class="dropdown-item" href="withdraw-money-confirm">Withdraw Money Confirm</a></li>
                                  <li><a class="dropdown-item" href="withdraw-money-success">Withdraw Money Success </a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-3"> <span class="sub-title">Others</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="about-us">About Us</a></li>
                              <li><a class="dropdown-item" href="fees">Fees</a></li>
                              <li><a class="dropdown-item" href="help">Help</a></li>
                              <li><a class="dropdown-item" href="contact-us">Contact Us</a></li>
                              <li><a class="dropdown-item" href="elements">Elements</a></li>
                              <li><a class="dropdown-item" href="elements-2">Elements 2</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>-->
          <!-- Primary Navigation end --> 
        </div>
        <div class="header-column justify-content-end"> 
          <!-- Login & Signup Link
          ============================== -->
          <nav class="login-signup navbar navbar-expand">
            <ul class="navbar-nav">
              <li><a href="profile"></a> </li>
              <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-outline-primary shadow-none d-none d-sm-block" href="">Sign out</a></li>
            </ul>
          </nav>
          <!-- Login & Signup Link end --> 
        </div>
      </div>
    </div>
  </header>
  <!-- Header End --> 
  
  <!-- Secondary menu
  ============================================= -->
  <div class="bg-primary">
    <div class="container d-flex justify-content-center">
      <ul class="nav secondary-nav">
        <li class="nav-item"> <a class="nav-link active" href="send-money">Send</a></li>
        <li class="nav-item"> <a class="nav-link" href="#">Request</a></li>
      </ul>
    </div>
  </div>
  <!-- Secondary menu end --> 
  
  <!-- Content
  ============================================= -->
  <div id="content" class="py-4">
    <div class="container">
      <h2 class="font-weight-400 text-center mt-3">Send Money</h2>
      <p class="text-4 text-center mb-4">Send your money on anytime, anywhere in the world.</p>
      <div class="row">
        <div class="col-md-8 col-lg-6 col-xl-5 mx-auto">
          <div class="bg-light shadow-sm rounded p-3 p-sm-4 mb-4">
            <h3 class="text-5 font-weight-400 mb-3">Personal Details</h3>
            <!-- Send Money Form
            ============================================= -->
            <!--<form id="form-send-money" method="post">-->
              <div class="form-group">
                <label for="emailID">Recipient</label>
                <input type="text" value="" class="form-control" data-bv-field="emailid" id="email" required placeholder="Enter Email Address">
              </div>
              <div class="form-group">
                <label for="youSend">You Send</label>
                <div class="input-group">
                  <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                  <input type="number" step="0.000000001" class="form-control" data-bv-field="youSend" id="youSend"  placeholder="0">
                  <div class="input-group-append"> <span class="input-group-text p-0">
                    <select id="youSendCurrency" data-style="custom-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                      <optgroup label="Popular Currency">
                      <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" selected="selected" value="">USD</option>
                      <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="">EUR</option>
                      <option data-icon="currency-flag currency-flag-ngn mr-1" data-subtext="Nigerian naira" value="">NGN</option>
					  </optgroup>
                      <option value="" data-divider="true">divider</option>
                      <optgroup label="Other Currency">
                      <option data-icon="currency-flag currency-flag-aed mr-1" data-subtext="United Arab Emirates dirham" value="">AED</option>
                      <option data-icon="currency-flag currency-flag-ars mr-1" data-subtext="Argentine peso" value="">ARS</option>
                      <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar" value="">AUD</option>
                      <option data-icon="currency-flag currency-flag-bdt mr-1" data-subtext="Bangladeshi taka" value="">BDT</option>
                      <option data-icon="currency-flag currency-flag-bgn mr-1" data-subtext="Bulgarian lev" value="">BGN</option>
                      <option data-icon="currency-flag currency-flag-brl mr-1" data-subtext="Brazilian real" value="">BRL</option>
                      <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar" value="">CAD</option>
                      <option data-icon="currency-flag currency-flag-chf mr-1" data-subtext="Swiss franc" value="">CHF</option>
                      <option data-icon="currency-flag currency-flag-clp mr-1" data-subtext="Chilean peso" value="">CLP</option>
                      <option data-icon="currency-flag currency-flag-cny mr-1" data-subtext="Chinese yuan" value="">CNY</option>
                      <option data-icon="currency-flag currency-flag-czk mr-1" data-subtext="Czech koruna" value="">CZK</option>
                      <option data-icon="currency-flag currency-flag-dkk mr-1" data-subtext="Danish krone" value="">DKK</option>
                      <option data-icon="currency-flag currency-flag-egp mr-1" data-subtext="Egyptian pound" value="">EGP</option>
                      <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="">EUR</option>
                      <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound" value="">GBP</option>
                      <option data-icon="currency-flag currency-flag-gel mr-1" data-subtext="Georgian lari" value="">GEL</option>
                      <option data-icon="currency-flag currency-flag-ghs mr-1" data-subtext="Ghanaian cedi" value="">GHS</option>
                      <option data-icon="currency-flag currency-flag-hkd mr-1" data-subtext="Hong Kong dollar" value="">HKD</option>
                      <option data-icon="currency-flag currency-flag-hrk mr-1" data-subtext="Croatian kuna" value="">HRK</option>
                      <option data-icon="currency-flag currency-flag-huf mr-1" data-subtext="Hungarian forint" value="">HUF</option>
                      <option data-icon="currency-flag currency-flag-idr mr-1" data-subtext="Indonesian rupiah" value="">IDR</option>
                      <option data-icon="currency-flag currency-flag-ils mr-1" data-subtext="Israeli shekel" value="">ILS</option>
                      <option data-icon="currency-flag currency-flag-inr mr-1" data-subtext="Indian rupee" value="">INR</option>
                      <option data-icon="currency-flag currency-flag-jpy mr-1" data-subtext="Japanese yen" value="">JPY</option>
                      <option data-icon="currency-flag currency-flag-kes mr-1" data-subtext="Kenyan shilling" value="">KES</option>
                      <option data-icon="currency-flag currency-flag-krw mr-1" data-subtext="South Korean won" value="">KRW</option>
                      <option data-icon="currency-flag currency-flag-lkr mr-1" data-subtext="Sri Lankan rupee" value="">LKR</option>
                      <option data-icon="currency-flag currency-flag-mad mr-1" data-subtext="Moroccan dirham" value="">MAD</option>
                      <option data-icon="currency-flag currency-flag-mxn mr-1" data-subtext="Mexican peso" value="">MXN</option>
                      <option data-icon="currency-flag currency-flag-myr mr-1" data-subtext="Malaysian ringgit" value="">MYR</option>
                      <option data-icon="currency-flag currency-flag-ngn mr-1" data-subtext="Nigerian naira" value="">NGN</option>
                      <option data-icon="currency-flag currency-flag-nok mr-1" data-subtext="Norwegian krone" value="">NOK</option>
                      <option data-icon="currency-flag currency-flag-npr mr-1" data-subtext="Nepalese rupee" value="">NPR</option>
                      <option data-icon="currency-flag currency-flag-nzd mr-1" data-subtext="New Zealand dollar" value="">NZD</option>
                      <option data-icon="currency-flag currency-flag-pen mr-1" data-subtext="Peruvian nuevo sol" value="">PEN</option>
                      <option data-icon="currency-flag currency-flag-php mr-1" data-subtext="Philippine peso" value="">PHP</option>
                      <option data-icon="currency-flag currency-flag-pkr mr-1" data-subtext="Pakistani rupee" value="">PKR</option>
                      <option data-icon="currency-flag currency-flag-pln mr-1" data-subtext="Polish złoty" value="">PLN</option>
                      <option data-icon="currency-flag currency-flag-ron mr-1" data-subtext="Romanian leu" value="">RON</option>
                      <option data-icon="currency-flag currency-flag-rub mr-1" data-subtext="Russian rouble" value="">RUB</option>
                      <option data-icon="currency-flag currency-flag-sek mr-1" data-subtext="Swedish krona" value="">SEK</option>
                      <option data-icon="currency-flag currency-flag-sgd mr-1" data-subtext="Singapore dollar" value="">SGD</option>
                      <option data-icon="currency-flag currency-flag-thb mr-1" data-subtext="Thai baht" value="">THB</option>
                      <option data-icon="currency-flag currency-flag-try mr-1" data-subtext="Turkish lira" value="">TRY</option>
                      <option data-icon="currency-flag currency-flag-uah mr-1" data-subtext="Ukrainian hryvnia" value="">UAH</option>
                      <option data-icon="currency-flag currency-flag-ugx mr-1" data-subtext="Ugandan shilling" value="">UGX</option>
                      <option data-icon="currency-flag currency-flag-vnd mr-1" data-subtext="Vietnamese dong" value="">VND</option>
                      <option data-icon="currency-flag currency-flag-zar mr-1" data-subtext="South African rand" value="">ZAR</option>
                      </optgroup>
                    </select>
                    </span> </div>
                </div>
              </div>
              <div class="form-group">
                <label for="recipientGets">Recipient Gets</label>
                <div class="input-group">
                  <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                  <input type="number" step="0.000000001" class="form-control" data-bv-field="recipientGets" id="recipientGets" placeholder="0">
                  <div class="input-group-append"> <span class="input-group-text p-0">
                    <select id="recipientCurrency" data-style="custom-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                      <optgroup label="Popular Currency">
                      <option data-icon="currency-flag currency-flag-ngn mr-1" data-subtext="Nigerian naira" selected="selected" value="">NGN</option>
                      <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" value="">USD</option>
                      <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="">EUR</option>
                      </optgroup>
                      <option value="" data-divider="true">divider</option>
                      <optgroup label="Other Currency">
                      <option data-icon="currency-flag currency-flag-aed mr-1" data-subtext="United Arab Emirates dirham" value="">AED</option>
                      <option data-icon="currency-flag currency-flag-ars mr-1" data-subtext="Argentine peso" value="">ARS</option>
                      <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar" value="">AUD</option>
                      <option data-icon="currency-flag currency-flag-bdt mr-1" data-subtext="Bangladeshi taka" value="">BDT</option>
                      <option data-icon="currency-flag currency-flag-bgn mr-1" data-subtext="Bulgarian lev" value="">BGN</option>
                      <option data-icon="currency-flag currency-flag-brl mr-1" data-subtext="Brazilian real" value="">BRL</option>
                      <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar" value="">CAD</option>
                      <option data-icon="currency-flag currency-flag-chf mr-1" data-subtext="Swiss franc" value="">CHF</option>
                      <option data-icon="currency-flag currency-flag-clp mr-1" data-subtext="Chilean peso" value="">CLP</option>
                      <option data-icon="currency-flag currency-flag-cny mr-1" data-subtext="Chinese yuan" value="">CNY</option>
                      <option data-icon="currency-flag currency-flag-czk mr-1" data-subtext="Czech koruna" value="">CZK</option>
                      <option data-icon="currency-flag currency-flag-dkk mr-1" data-subtext="Danish krone" value="">DKK</option>
                      <option data-icon="currency-flag currency-flag-egp mr-1" data-subtext="Egyptian pound" value="">EGP</option>
                      <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="">EUR</option>
                      <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound" value="">GBP</option>
                      <option data-icon="currency-flag currency-flag-gel mr-1" data-subtext="Georgian lari" value="">GEL</option>
                      <option data-icon="currency-flag currency-flag-ghs mr-1" data-subtext="Ghanaian cedi" value="">GHS</option>
                      <option data-icon="currency-flag currency-flag-hkd mr-1" data-subtext="Hong Kong dollar" value="">HKD</option>
                      <option data-icon="currency-flag currency-flag-hrk mr-1" data-subtext="Croatian kuna" value="">HRK</option>
                      <option data-icon="currency-flag currency-flag-huf mr-1" data-subtext="Hungarian forint" value="">HUF</option>
                      <option data-icon="currency-flag currency-flag-idr mr-1" data-subtext="Indonesian rupiah" value="">IDR</option>
                      <option data-icon="currency-flag currency-flag-ils mr-1" data-subtext="Israeli shekel" value="">ILS</option>
                      <option data-icon="currency-flag currency-flag-inr mr-1" data-subtext="Indian rupee" value="">INR</option>
                      <option data-icon="currency-flag currency-flag-jpy mr-1" data-subtext="Japanese yen" value="">JPY</option>
                      <option data-icon="currency-flag currency-flag-kes mr-1" data-subtext="Kenyan shilling" value="">KES</option>
                      <option data-icon="currency-flag currency-flag-krw mr-1" data-subtext="South Korean won" value="">KRW</option>
                      <option data-icon="currency-flag currency-flag-lkr mr-1" data-subtext="Sri Lankan rupee" value="">LKR</option>
                      <option data-icon="currency-flag currency-flag-mad mr-1" data-subtext="Moroccan dirham" value="">MAD</option>
                      <option data-icon="currency-flag currency-flag-mxn mr-1" data-subtext="Mexican peso" value="">MXN</option>
                      <option data-icon="currency-flag currency-flag-myr mr-1" data-subtext="Malaysian ringgit" value="">MYR</option>
                      <option data-icon="currency-flag currency-flag-ngn mr-1" data-subtext="Nigerian naira" value="">NGN</option>
                      <option data-icon="currency-flag currency-flag-nok mr-1" data-subtext="Norwegian krone" value="">NOK</option>
                      <option data-icon="currency-flag currency-flag-npr mr-1" data-subtext="Nepalese rupee" value="">NPR</option>
                      <option data-icon="currency-flag currency-flag-nzd mr-1" data-subtext="New Zealand dollar" value="">NZD</option>
                      <option data-icon="currency-flag currency-flag-pen mr-1" data-subtext="Peruvian nuevo sol" value="">PEN</option>
                      <option data-icon="currency-flag currency-flag-php mr-1" data-subtext="Philippine peso" value="">PHP</option>
                      <option data-icon="currency-flag currency-flag-pkr mr-1" data-subtext="Pakistani rupee" value="">PKR</option>
                      <option data-icon="currency-flag currency-flag-pln mr-1" data-subtext="Polish złoty" value="">PLN</option>
                      <option data-icon="currency-flag currency-flag-ron mr-1" data-subtext="Romanian leu" value="">RON</option>
                      <option data-icon="currency-flag currency-flag-rub mr-1" data-subtext="Russian rouble" value="">RUB</option>
                      <option data-icon="currency-flag currency-flag-sek mr-1" data-subtext="Swedish krona" value="">SEK</option>
                      <option data-icon="currency-flag currency-flag-sgd mr-1" data-subtext="Singapore dollar" value="">SGD</option>
                      <option data-icon="currency-flag currency-flag-thb mr-1" data-subtext="Thai baht" value="">THB</option>
                      <option data-icon="currency-flag currency-flag-try mr-1" data-subtext="Turkish lira" value="">TRY</option>
                      <option data-icon="currency-flag currency-flag-uah mr-1" data-subtext="Ukrainian hryvnia" value="">UAH</option>
                      <option data-icon="currency-flag currency-flag-ugx mr-1" data-subtext="Ugandan shilling" value="">UGX</option>
                      <option data-icon="currency-flag currency-flag-vnd mr-1" data-subtext="Vietnamese dong" value="">VND</option>
                      <option data-icon="currency-flag currency-flag-zar mr-1" data-subtext="South African rand" value="">ZAR</option>
                      </optgroup>
                    </select>
                    </span> </div>
                </div>
              </div>
              <p id="current" class="text-muted text-center">The current exchange rate is <span class="font-weight-500">1 USD = 1.42030 AUD</span></p>
              <hr>
              <!--<p class="mb-1">Total fees <span class="text-3 float-right">7.21 USD</span></p>-->
              <p id="payout" class="font-weight-500">Total To Pay <span class="text-3 float-right"><span id="total">0</span> USD</span></p>
              <p class="font-weight-500">Balance <span class="text-3 float-right"><span id="available"><?php $user->balance($data) ?></span> USD</span></p>
              <button id="send" class="btn btn-primary btn-block"><i class="fa fa-lock"></i>&nbsp;&nbsp;&nbsp;Send</button>
              <button id="processing" style="display: none" class="btn btn-primary btn-block"><i class="fa fa-lock"></i>&nbsp;&nbsp;&nbsp;Processing</button>
            <!--</form>-->
            <!-- Send Money Form end --> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Content end --> 
  
  <!-- Footer
  ============================================= -->
  <!--<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg d-lg-flex align-items-center">
          <ul class="nav justify-content-center justify-content-lg-start text-3">
            <li class="nav-item"> <a class="nav-link active" href="#">About Us</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Support</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Help</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Careers</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Affiliate</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Fees</a></li>
          </ul>
        </div>
        <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
          <ul class="social-icons justify-content-center">
            <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/" target="_blank" title="Google"><i class="fab fa-google"></i></a></li>
            <li class="social-icons-youtube"><a data-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="footer-copyright pt-3 pt-lg-2 mt-2">
        <div class="row">
          <div class="col-lg">
            <p class="text-center text-lg-left mb-2 mb-lg-0">Copyright &copy; 2019 <a href="#">Tea</a>. All Rights Reserved.</p>
          </div>
          <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
            <ul class="nav justify-content-center">
              <li class="nav-item"> <a class="nav-link active" href="#">Security</a></li>
              <li class="nav-item"> <a class="nav-link" href="#">Terms</a></li>
              <li class="nav-item"> <a class="nav-link" href="#">Privacy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>-->
  <!-- Footer end --> 
  
</div>
<!-- Document Wrapper end --> 

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Script --> 
<script type="text/javascript" src="js/sweetalert.init.js"></script>
<script type="text/javascript" src="js/sweetalert.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>  
<script src="js/theme.js"></script>
<script type="text/javascript">
  setTimeout(function () {
    $('button[data-id="youSendCurrency"]').on('click', function(){
        //jhhj
        $('.optgroup-1').on('click', function(){
          setTimeout(function(){
            var base = $('button[data-id="youSendCurrency"]').attr('title');
            var exchange = $('button[data-id="recipientCurrency"]').attr('title');
            var settings = {
              "async": true,
              "crossDomain": true,
              "url": "https://v6.exchangerate-api.com/v6/bfae432d487360a5d7b11376/latest/"+base,
              "method": "GET"
            };
            $.ajax(settings).done(function (response) {
              console.log(response);
              data = response;
              conversion_rate= data["conversion_rates"];
              console.log(conversion_rate);
              console.log(conversion_rate[exchange]);
              $('#current').html('The current exchange rate is <span class="font-weight-500">1 '+base+' = <span id="rate">'+conversion_rate[exchange]+'</span> '+exchange+'</span>');
            });
            setTimeout(function(){var amount = $('#youSend').val();
              var rate = parseFloat($('#rate').html());
              $('#recipientGets').val(amount*rate)}, 1000);
              var power = Math.pow(10, 2);
              $('#total').html(Math.round($('#youSend').val()*conversion_rate["USD"] * power) / power);
            $('.optgroup-1').off();
          }, 1000);
        });
        $('.optgroup-2').on('click', function(){
          setTimeout(function(){
              var base = $('button[data-id="youSendCurrency"]').attr('title');
              var exchange = $('button[data-id="recipientCurrency"]').attr('title');
              var settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://v6.exchangerate-api.com/v6/bfae432d487360a5d7b11376/latest/"+base,
                "method": "GET"
              };
              $.ajax(settings).done(function (response) {
                console.log(response);
                data = response;
                conversion_rate= data["conversion_rates"];
                console.log(conversion_rate);
                console.log(conversion_rate[exchange]);
                $('#current').html('The current exchange rate is <span class="font-weight-500">1 '+base+' = <span id="rate">'+conversion_rate[exchange]+'</span> '+exchange+'</span>');
              });
              setTimeout(function(){var amount = $('#youSend').val();
              var rate = parseFloat($('#rate').html());
              $('#recipientGets').val(amount*rate)}, 1000);
              var power = Math.pow(10, 2);
              $('#total').html(Math.round($('#youSend').val()*conversion_rate["USD"] * power) / power);
              $('.optgroup-2').off();
            }, 1000);
          });
      });
      $('button[data-id="recipientCurrency"]').on('click', function(){
        //jhhj
        $('.optgroup-1').on('click', function(){
          setTimeout(function(){
            var base = $('button[data-id="youSendCurrency"]').attr('title');
            var exchange = $('button[data-id="recipientCurrency"]').attr('title');
            var settings = {
              "async": true,
              "crossDomain": true,
              "url": "https://v6.exchangerate-api.com/v6/bfae432d487360a5d7b11376/latest/"+base,
              "method": "GET"
            };
            $.ajax(settings).done(function (response) {
              console.log(response);
              data = response;
              conversion_rate= data["conversion_rates"];
              console.log(conversion_rate);
              console.log(conversion_rate[exchange]);
              $('#current').html('The current exchange rate is <span class="font-weight-500">1 '+base+' = <span id="rate">'+conversion_rate[exchange]+'</span> '+exchange+'</span>');
            });
            setTimeout(function(){var amount = $('#recipientGets').val();
            var rate = parseFloat($('#rate').html());
            $('#youSend').val(amount/rate)}, 1000);
            $('.optgroup-1').off();
          }, 1000);
        });
        $('.optgroup-2').on('click', function(){
          setTimeout(function(){
            var base = $('button[data-id="youSendCurrency"]').attr('title');
            var exchange = $('button[data-id="recipientCurrency"]').attr('title');
            var settings = {
              "async": true,
              "crossDomain": true,
              "url": "https://v6.exchangerate-api.com/v6/bfae432d487360a5d7b11376/latest/"+base,
              "method": "GET"
            };
            $.ajax(settings).done(function (response) {
              console.log(response);
              data = response;
              conversion_rate= data["conversion_rates"];
              console.log(conversion_rate);
              console.log(conversion_rate[exchange]);
              $('#current').html('The current exchange rate is <span class="font-weight-500">1 '+base+' = <span id="rate">'+conversion_rate[exchange]+'</span> '+exchange+'</span>');
            });
            setTimeout(function(){var amount = $('#recipientGets').val();
            var rate = parseFloat($('#rate').html());
            $('#youSend').val(amount/rate)}, 1000);
            $('.optgroup-2').off();
          }, 1000);
        });
      });
  }, 1000);
</script>
<script type="text/javascript">
  /*
  $('#youSend').on('change', function(){
    $('#payout').html('<p class="font-weight-500">Total To Pay <span class="text-3 float-right">'+parseFloat($('#youSend').val())+' '+$('button[data-id="youSendCurrency"]').attr('title')+'</span></p>');
    var amount = $('#youSend').val();
    var rate = parseFloat($('#rate').html());
    $('#recipientGets').val(amount*rate)
  });
  
  $('#recipientGets').on('change', function(){
    var amount = $('#recipientGets').val();
    var rate = parseFloat($('#rate').html());
    $('#youSend').val(amount/rate)
    //$('#payout').html('<p class="font-weight-500">Total To Pay <span class="text-3 float-right">'+$('#youSend').val()+' '+$('button[data-id="youSendCurrency"]').attr('title')+'</span></p>');
  });
  */
  $('#youSend').on('input', function(){
    $('#total').html($('#youSend').val()*conversion_rate["USD"]);
    var amount = parseFloat($('#youSend').val());
    var rate = parseFloat($('#rate').html());
    var value = amount*rate;
    if (isNaN(value)) {value = 0} else {value = value}
    $('#recipientGets').val(value);
    //$('#payout').html('<p class="font-weight-500">Total To Pay <span class="text-3 float-right">'+$('#youSend').val()+' '+$('button[data-id="youSendCurrency"]').attr('title')+'</span></p>');
  });
  $('#recipientGets').on('input', function(){
    var amount = parseFloat($('#recipientGets').val());
    var rate = parseFloat($('#rate').html());
    var value = amount/rate;
    if (isNaN(value)) {value = 0} else {value = value}
    $('#youSend').val(value);
    //$('#payout').html('<p class="font-weight-500">Total To Pay <span class="text-3 float-right">'+$('#youSend').val()+' '+$('button[data-id="youSendCurrency"]').attr('title')+'</span></p>');
  });
</script>
<script type="text/javascript">
  var base = "USD";
  var exchange = "NGN";
  var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://v6.exchangerate-api.com/v6/bfae432d487360a5d7b11376/latest/"+base,
    "method": "GET"
  };
  $.ajax(settings).done(function (response) {
    console.log(response);
    data = response;
    conversion_rate= data["conversion_rates"];
    console.log(conversion_rate);
    console.log(conversion_rate[exchange]);
    $('#current').html('The current exchange rate is <span class="font-weight-500">1 '+base+' = <span id="rate">'+conversion_rate[exchange]+'</span> '+exchange+'</span>');
  });
</script>
<script type="text/javascript">
  $('#send').on('click', function(){
    var email = $('#email').val();
    var gets = parseFloat($('#recipientGets').val());
    var base = $('button[data-id="recipientCurrency"]').attr('title');
    var total = parseFloat($('#total').html());
    var available = parseFloat($('#available').html());
    if (total < 1) {
      swal("Oops", "Minimum amount to send is 1 USD", "info");
      return;
    }
    else if(email == ''){
      swal("Sorry", "You need to add a recipeint through a registered email ID", "info");
      return;
    }
    else if(available < total){
      swal("Sorry", "You have insufficient funds", "info");
      return;
    }
    else{
      $('#send').hide();
      $('#processing').show();
      $.ajax({
        url : 'lCuLfInEAdenSTabrIBiGASHeaNdPINEnyaRTORmaRDbEdAcESAcelefuLAMAxecuLWOrTypeptabiTANtROVerthEMidALAegAUspOStAInGlOAcKLABOrTarAteBiN',
        type : 'POST',
        data : {
          'email' : email,
          'gets' : gets,
          'base' : base,
          'total' : total,
          'auth' : true
        },
        success: function(data){
          if (data == 'Success') {
            swal("Great", "Your money transfer is processing", "success");
            $('#send').show();
            $('#processing').hide();
            setTimeout(function(){
              location.replace('send-money-success?success=true&amount=$'+total+'&recipient_email='+email);
            }, 2000);
          }
          else{
            swal("Sorry", data, "info");
            $('#send').show();
            $('#processing').hide();
            return;
          }
        },
        error: function(data){
          swal("Oops", "Connection error", "info");
          $('#send').show();
          $('#processing').hide();
        }
      })
    }
  })
</script>
</body>
</html>
<?php else: header('location: login') ?>
<?php endif;  ?>