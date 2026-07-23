<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flexarloeren . Request accepted!</title>
        <meta property="og:title" content="Flexarloeren . Request accepted!" />
        <meta property="og:image" content="logo-main.png"/>
        
        <meta property="og:description" content="Flexarloeren . Request accepted!">
        <meta name="description" content="Flexarloeren . Request accepted!">
  
  

        <link rel="shortcut icon" href="logo-main.png" type="image/x-icon">
        <link rel="stylesheet" href="main.css?rev=3727">
        
        

        <style>
        
        </style>

        
        </head>
        <body>

          <style>#consent-banner{position:fixed;bottom:0;left:0;width:100%;max-width:500px;background-color:#222;color:#fff;padding:15px;box-sizing:border-box;display:flex;flex-direction:column;align-items:center;z-index:9999;}#consent-banner .buttons{display:flex;gap:10px;margin-top:10px;}#consent-banner button{background-color:#4CAF50;color:#fff;border:none;padding:10px 15px;cursor:pointer;}@media(min-width:768px){#consent-banner{flex-direction:row;justify-content:space-between;}}</style>
<div id="consent-banner"><p>This website uses cookies to improve your experience.</p><div class="buttons"><button>Accept</button><button>Cancel</button></div></div>
<script>(function(){var m=document.cookie.match(/user_consent=true/);if(m){document.getElementById('consent-banner').style.display='none';}else{document.querySelectorAll('#consent-banner button').forEach(function(b){b.addEventListener('click',function(){document.getElementById('consent-banner').style.display='none';document.cookie='user_consent=true;path=/;max-age=31536000';});});}})();</script>

            <div class="header-sctn">
              <div class="header-block container-in">
                <header class="header-block" id="top">

                  <nav class="header-menu filter--widgetum">
                    <div class="logo-box">
                      <a href="./"> 
                        <div class="logo-site">
                          <img class="logo-image" src="logo-main.png"> 
                          <div class="header-title ">Flexarloeren</div>
                        </div>
                      </a>
                    </div>
                    
                    <div class="phone-menu-box">
                      <div class="phone-box">
                        
                        <p class="phone-header"><a class="text-hover" href="tel:+1 074-904-252">+1 074-904-252</a></p>
                        
                      </div>
                  
                  
                  
                     
                      <div class="menu-box">
                        <ul class="header-menu-items">
                          <li><a class="text-hover" href="./">Home</a></li>
                          <li><a class="text-hover" href="./#service-block">Services</a></li>
                          <li><a class="text-hover" href="who-we-are.html">Who We Are</a></li>
                          <li><a class="text-hover" href="help.html">Contact</a></li> 
                        </ul>
                      </div>

                      <span class="open-icon" id="menuToggle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="45px" fill="currentColor">
                          <path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/>
                        </svg>
                      </span>
                    </div>
                  </nav>
                  </header>

                  <nav class="menu-mobile" id="mobileMenu">
                    <span class="close-icon" id="menuClose">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="45px" fill="currentColor">
                          <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z"/>
                      </svg>
                    </span>

                    <ul class="header-menu-mob-items">
                      <li><a class="text-hover" href="./">Home</a></li>
                      <li><a class="serv-title-menu text-hover" href="./#service-block">Services</a>
                        <ul class="serv-art-menu-heder-menu">
                          
                          <li class="">
                             <a class="text-hover" href="gym.html">Gym</a>
                          </li>
                          
                          
                          
                          <li class="">
                            <a class="text-hover" href="functional-training.html">Functional training</a>
                          </li>
                          
                         
                          
                          <li class="">
                            <a class="text-hover" href="group-classes.html">Group classes</a>
                          </li>
                          
                          
                          
                          <li class="">
                            <a class="text-hover" href="cardio-zone.html">Cardio zone</a>
                          </li>
                          
                          
                          </ul></li>
                      <li><a class="text-hover" href="who-we-are.html">Who We Are</a></li>
                      <li><a class="text-hover" href="help.html">Contact</a></li> 
                    </ul>

                  </nav>
      
                  </div>
                
                  <div class="head-sctn container-out">
                    <div class="overlay"></div>
                      <div class="head-block container-in">
                        <div class="head-title">
                            <h1>Welcome to Flexarloeren, your modern fitness center designed to support your active lifestyle. Enjoy our diverse workout programs, comfortable gyms, and expertly organized spaces where you can train regularly and achieve your health goals. Join us today and experience fitness like never before!</h1>
                            <span></span>
                        </div>

                        
                        
                      </div>
                  </div>
                   
                        <div class="login-box container-in">
                          <h2 class="form-title">Write to us</h2>
                           <form method="post" class="form" action="{thx-page}" id="formField">
                            
                             <label for="field-columncomponent-name">Enter your name</label><input class="input-field-columncomponent" id="field-columncomponentname" type="text" name="name_alternate-data" required> <label for="field-columncomponent-phone">Enter Your Phone Number</label><input name="phone_alternate-data" class="input-field-columncomponent" id="field-columncomponent-phone" type="tel" required> <label for="field-columncomponent-email">Email Address</label><input name="email_alternate-data" class="input-field-columncomponent" id="field-columncomponent-email" type="email" required>
                            <div class="input-field">
                              <label class="container">
                                <input type="checkbox" checked="checked">
                                <div class="checkmark"></div>
                            </label>
                              <label  for="Check1" class="log-box-label">I accept
                                  <a href="Privacy.html"  class="log-labelA"> Privacy policy</a> 
                              </label>
                            </div>
                              <div class="batton-form">
                                  <button type="submit" class="button-4">Consultation with a specialist</button>
                              </div>
                        </form>
                        </div>
                   

                </div>
              </div>
                


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-address__overlaykl{
		margin: 0px;
		padding: 0px;
		font-family: 'Libre Baskerville', sans-serif;
		width: 100%;
		font-size: 16px;
		padding: 306px 0px;
	}
	.bodyClass1-address__overlaykl{
		background: #f8fff7;
		color: #ffffff;
	}
	.bodyClass2-address__overlaykl{
		background: #9ddfd3;
		color: #fff;
	}
	.bodyClass3-address__overlaykl{
		background: #fff;
		color: #111;
	}
	.wrapage-block-address__overlaykl{
		background-size: 100%;
		width: 100%;
	}
	.box_main-address__overlaykl{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-address__overlaykl h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-address__overlaykl p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-address__overlaykl{
		text-align: center;
	}
	.mainBlock-address__overlaykl ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-address__overlaykl ul>li span{
		font-weight: bold;
	}
	.mainBlock-address__overlaykl{
		max-width: 1028px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 15px;
	}
	.mainBlock-address__overlaykl .cBlock-address__overlaykl{
		text-align: center;
	}

	.bodyClass3-address__overlaykl .mainBlock-address__overlaykl{
		background: none;
		border-top: 2px dotted #9ddfd3;
		border-bottom: 2px dotted #9ddfd3;
	}
	.bodyClass2-address__overlaykl .mainBlock-address__overlaykl{
		background: #1B262C;
		color: #fff !important;
		box-shadow: 0px 0px 15px #1B262C;
	}
	.bodyClass2-address__overlaykl .mainBlock-address__overlaykl p{
		color: #fff !important;
	}
	.bodyClass1-address__overlaykl .mainBlock-address__overlaykl{
		background: #1A1502;
		color: #ffffff;
		border-left: 2px solid #FFD700;
	}
	.bodyClass1-address__overlaykl .mainBlock-address__overlaykl p{
		color: #ffffff !important;
	}
	.order-address__overlaykl{
		font-size: 19px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-address__overlaykl p{
			padding: 0px 15px;
		  }
		  .box_main-address__overlaykl h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-address__overlaykl{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-address__overlaykl{
			height: 100%;
		}
	}
</style>
<div class="bodyClass2-address__overlaykl" id="mainWrapp-address__overlaykl">


	<div class="wrapage-block-address__overlaykl">
		<div class="box_main-address__overlaykl">
			<div class="mainBlock-address__overlaykl">
				<p>We're truly grateful for your outreach and the confidence you've placed in us. Your support empowers our dedicated team to enhance the caliber of our offerings continually.</p>
<p>Remember, your insights, feedback, and suggestions are invaluable to our growth and evolution. If there's anything on your mind or if you require assistance, please feel free to reach out. Our commitment is to be readily available to assist you.</p>
<p class="cBlock-address__overlaykl">With heartfelt thanks and warm wishes!</p>
			</div>
		</div>
	</div>


</div>




  <div class="footer-sctn container-out">
    <div class="container-in">


    <div class="logo-menu-footer">

    <div class="logo-box-footer">
       <a href="./"> 
        <div class="header-logo-footer">
          <img class="logo-image-footer" src="logo-main.png"> 
           <div class="header-title ">Flexarloeren</div>
        </div>
      </a>
      <div>
        Flexarloeren is a state-of-the-art fitness center dedicated to providing a wide range of training options tailored for every fitness level. Our spacious, comfortable gyms are equipped with modern equipment to ensure an optimal workout experience. Our professional team organizes the space to promote a welcoming atmosphere for regular exercise and an active lifestyle. We focus on helping our members reach their personal health and fitness goals through innovative programs and a supportive community. Whether you're a beginner or an advanced athlete, Flexarloeren offers the environment and resources you need to thrive.
      </div>
    </div>
 
    <div class="footer-menu">
        <nav class="footer-menu-block">
          <ul class="footer-menu-list">
            <li><a class="text-hover" href="./">Home</a></li>
            <li><a class="text-hover" href="who-we-are.html"> Who We Are</a></li>
            <li><a class="text-hover" href="help.html">Contact</a></li> 
          </ul>
        </nav>
    </div>
      
      <div class="footer-serv-art-block">
          <p><a class="menu-link-foot" href="#service-block">Services:</a></p>
          <ul class="serv-art-menu-footer">
          
          <li class="serv-art-item">
             <a class="text-hover" href="gym.html">Gym</a>
          </li>
          
          
          
          <li class="serv-art-item">
            <a class="text-hover" href="functional-training.html">Functional training</a>
          </li>
          
         
          
          <li class="serv-art-item">
            <a class="text-hover" href="group-classes.html">Group classes</a>
          </li>
          
          
          
          <li class="serv-art-item">
            <a class="text-hover" href="cardio-zone.html">Cardio zone</a>
          </li>
          
          
          </ul>
      </div>

      
      <div class="adres-footer-block" id="contactid">
        <p class="adres-title-footer"> Contact</p>
        <ul class="adres-items-footer">
           <li class="adres-item-footer">
            <a >Business ID (1234567-8): 12-34567892021 Florida Avenue Kenner 70062 United States</a></li>
            <li class="adres-item-footer">
              <a href="tel:+1 074-904-252">+1 074-904-252</a></li>
            <li class="adres-item-footer">
              <a href="mailto:info@flexarloeren.com">info@flexarloeren.com</a></li>
           </li>
         </ul>
      </div>
      

    </div>
 

    </div>
  </div>

  <div class="privacy-sctn container-out">
    <div class="container-in">
      <div class="privacy-items">
        <a class="text-hover" href="Privacy.html">Privacy policy</a>
        <a class="text-hover" href="terms.html">Terms & Conditions</a>
        <a class="text-hover" href="disclaimer.html">Disclaimer</a>
      </div>
    </div>
  </div>



  <script>
    const toggleButton = document.getElementById('menuToggle');
    const closeButton = document.getElementById('menuClose');
    const navigationMenu = document.getElementById('mobileMenu');
    const navigationLinks = document.querySelectorAll('.header-menu-items li a');
  
    toggleButton.addEventListener('click', () => {
        navigationMenu.classList.toggle('active');
    });
  
    closeButton.addEventListener('click', () => {
        navigationMenu.classList.remove('active');
    });
  
    navigationLinks.forEach(link => {
        link.addEventListener('click', () => {
            navigationMenu.classList.remove('active');
        });
    });
  </script>
  








        

        

</body>
</html>
