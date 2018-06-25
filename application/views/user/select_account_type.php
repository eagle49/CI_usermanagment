<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
    .card {
        border-radius: 16px;
    }
    .card-body {
        padding: 40px 50px 30px;
        box-shadow: 0 0 2px 0 rgba(0,0,0,0.12), 0 2px 2px 0 rgba(0,0,0,0.24);
        border-radius: 16px;
    }
    h4 {
        color: #0C8DC4;
    }
    
    span.sub-head {
        font-size: 1.2rem;
        display: block;
    }
    p {
        line-height: 1.5em;
        font-size: 15px;
    }
    ul li {
        min-height: 3em;
        line-height: 2;
        list-style-type: disc;
        /* margin-left: 10px; */
        color: #666;
        font-size: 16px;
    }

    .card-body .btn {
        display: inline-block;
        padding: 9px 15px 10px;
        margin-bottom: 0;
        background: #009cde;
        font-size: 15px;
        font-size: 1.07142857142857rem;
        font-weight: 700;
        line-height: 1.4545em;
        -webkit-font-smoothing: antialiased;
        color: #fff;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        border-radius: 5px;
        box-sizing: border-box;
    }
    .card-body .btn {
        border-radius: 30px;
        font-size: 15px;
        font-size: 1.07142857rem;
        line-height: 1.5;
        padding-bottom: 15px;
        padding-top: 13px;
        padding-left: 30px;
        padding-right: 30px;
        background: #0070ba;
    }

    .card-body .btn:hover {
        background: #005ea6;
        text-decoration: none;
        color: white;
    }

    .card-body .btn-medium {
        width: 100%;
        margin-bottom: 10px;
        outline: 0;
    }

    .contentLink {
        display: block;
        width: 100%;
        margin: 0 auto;
        text-align: center;
        padding: 10px 0 0 0;
        text-decoration: none;
        font-weight: bold;
        color: #0c8dc4;
    }

    .contentLink:hover {
        text-decoration: none;
        color: #005ea6;
        outline: 0;
    }

    .center-text {
        text-align: center;
    }

    .legal-notes {
        font-size: 12px;
        margin: 20px 0px;
        line-height: 1.5em;
    }
</style>
<div class="header-st mb-4">
			<div class="container">
				<div class="row">
          <div class="col-md-12">
            <h3>
              <?php echo lang('core account create'); ?>
            </h3>
          </div>
        </div>
  </div>
</div>

<div class="container">
<div class="row mt-5 mb-5">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h4 style="margin-bottom: 22px;">
            Personal
            <span class="sub-head">For people who want to pay online</span>
        </h4>
        <p class="desc">
            Join the 203 million active users who choose to pay online or on mobile with PayPal. Pay securely at millions of stores and send money quickly to anyone’s PayPal email address or mobile number. Plus, you can still collect your eligible card reward points.
        </p>
        <ul>
            <li>It’s free - sign up for a PayPal account, and shop without transaction fees*, no matter how you choose to pay.</li>
            <li>Shop securely - store all your financial information behind a single secure login.</li>
            <li>Shop globally – pay on sites of all sizes worldwide and in 25 currencies.</li>
        </ul>
        <a class="btn btn-medium btn-personal" href="<?php echo base_url('user/register-personal'); ?>" >Sign Up for a Personal Account</a>
        <a class="contentLink" href="#" >Learn More</a>
        <p class="legal-notes center-text">*A currency conversion fee may apply for cross-border transactions. </p>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
      <h4>
            Business
            <span class="sub-head">For people and businesses who want to receive payments.</span>
        </h4>
        <p class="desc">
        Accept multiple types of payments with a single PayPal account. Get started in minutes.
        </p>
        <ul>
            <li>Securely accept credit and Visa Debit card payments without a monthly fee*.</li>
            <li>Your buyers don’t need a PayPal account.</li>
            <li>Get paid faster with Online Invoicing and Express Checkout.</li>
            <li>Sell securely with PayPal <a href="#" pa-marked="1">Seller Protection</a>.</li>
        </ul>
        <a class="btn btn-medium btn-personal" href="<?php echo base_url('user/register-business'); ?>" >Sign Up for a Business Account</a>
        <a class="contentLink" href="#" >Learn More</a>
        <p class="legal-notes center-text">**No monthly fee. 2.9% + 30 cents per transaction.</p>
      </div>
    </div>
  </div>
</div>
</div>