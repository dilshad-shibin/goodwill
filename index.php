<?php
error_reporting(0);
$source='';
$source=$_GET['utm_source'];
$medium='';
$medium=$_GET['utm_medium'];
?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>GOODWILL IVF</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
<link rel="stylesheet" href="css/bs/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/fontawesome-all.css">
<link rel="stylesheet" href="css/icofont.css">
<link rel="stylesheet" href="css/linea-arrows.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/cookiealert.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TSFWJKS');</script>
<!-- End Google Tag Manager -->


</head>

<body >

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSFWJKS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div class="body_wraper" >
<section class="headerarea">
<div class="container">
<div class="header_align">
<div class="logo_ses">
<a href="#">
<img src="images/logo.png" class="d-none d-lg-inline-block">
<img src="images/logo.png" class="d-lg-none d-lg-inline-block">
</a>
</div> 
<div class="header_right">
<div>
<div class="iso_certi">
<div >
<img src="images/iso.png" class="d-none d-lg-inline-block">
<img src="images/iso2.png" class="d-lg-none d-lg-inline-block">
</div>
</div>
<div class="header_book_appointment">
<a href="#" class="theme_btn" data-bs-toggle="modal" data-bs-target="#en-form">Book An Appointment </a> 
</div>    
</div>
</div>
</div>  
</div>    
</section>
<section class="mb_baner"></section>
<section class="banner_area">
<div class="container">
<div class="row align-items-end">
<div class="col-lg-8">
    <div class="banner-content">
        <h2>World Class <br> <span>Fertility Treatment</span> Now At <span>Affordable Cost</span> </h2>
    </div>
</div>
<div class="col-lg-4">
<div class="bnr_form">
<div class="enq_form placeholder_style form_shadwo">
<form name="form1" method="post" action="email.php">
<div class="form_title">
<h4>We are always just a heartbeat away</h4>  
<p>To book your appointment with our top specialists, submit your details below</p>
<h5>Book Your Appointment
</h5>
</div>
<div class="form-group">
<input type="text" class="form-control" id="" aria-describedby="" placeholder="Name" name="name" required>
</div>
<div class="form-group">
<input type="email" class="form-control" id="" aria-describedby="" placeholder="Email" name="email" required>
</div>
<div class="form-group">
<input class="form-control" id="" aria-describedby="" placeholder="Phone" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
</div>
<div class="form-group">
<input type="hidden" name="esource" value="<?php echo $source;?>">
<input type="hidden" name="emedium" value="<?php echo $medium;?>">
<input type="submit" class="form-control" value="Submit" name="submit">
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
    
<section class="baner_btm">
<div class="container">
<div class="row">
<div class="col-xl-12 col-lg-12">
<div class="bb_sec">
<ul>
<li>
<div>
<h5>1000+ <span>Happy Clients</span></h5> 
</div>    
</li> 
<li>
<div>
<h5>High <span>
Success Rate</span></h5> 
</div>    
</li> 
<li>
<div>
<h5>0%<span>
Interest EMI </span></h5> 
</div>    
</li>
<li>
<div>
<h5>25+ years<span>
Experienced Doctors </span></h5> 
</div>    
</li> 
</ul>
</div> 
</div> 
</div>    
</div>    
</section>
    
<section class="about_area about_area2">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-9 fertility-area text-center justify-content-center">
            <div class="fertility-box">
                <div class="ft-one">
                    <h4>
                        <a href="" data-bs-toggle="modal" data-bs-target="#en-form"><span>Free</span>Fertility Screening</a>
                    </h4>
                </div>
                <div class="ft-two">
                    <h4>
                        <a href="" data-bs-toggle="modal" data-bs-target="#en-form"><span>Free</span>Consultation & Ultrasound</a>
                    </h4>
                </div>
            </div>
            <div class="book-btn">
                    <a>Book Your</a>
            </div>
        </div>
    </div>
<!-- <div class="row">
    <div class="col-lg-6">
        <div class="about_image_block">
            <img src="images/about.png"> 
        </div>  
    </div>  
    <div class="col-lg-6">
        <div class="about_content_area">
            <h1 class="site_title"><span>Welcome to </span>
            Goodwill  IVF</h1>
            <p>Goodwill IVF, one of the best IVF centres in Kerala, aspires to reinvent high-tech fertility care in India by providing world-class medical diagnostics and 
            treatment in the field of Assisted Reproductive 
            Technology (ART). We bring together a highly 
            experienced team of fertility experts, including 
            obstetricians and gynecologists, pediatricians, 
            embryologists, andrologists, ultrasonologists, 
            counselors, nurses, and other healthcare professionals.</p>
            <a href="#" class="theme_btn" data-bs-toggle="modal" data-bs-target="#en-form">Get A Call Back</a>
        </div>
    </div>
</div>  -->
</div>    
</section>

<section class="why_choose_us">
    <div class="container">
        <h3 class="site_title">Why Choose Goodwill?</h3>
        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="why_content_box">
                    <div class="why-content-icon">
                        <div class="wc_icon wc_icon1"></div>
                    </div>
                    <h5> Easy EMIs Option</h5>
                </div> 
            </div> 
            <div class="col-lg-4 col-6">
                <div class="why_content_box">
                    <div class="why-content-icon">
                        <div class="wc_icon wc_icon2"></div>
                    </div>
                    
                    <h5> Highest Success Rate</h5>
                </div>
            </div> 
            <div class="col-lg-4 col-6">
                <div class="why_content_box">
                    <div class="why-content-icon">
                        <div class="wc_icon wc_icon3"></div>
                    </div>
                    
                    <h5>Best Technologies 
                    & Facilities</h5>
                </div> 
            </div> 
            <div class="col-lg-4 col-6">
                <div class="why_content_box">
                    <div class="why-content-icon">
                        <div class="wc_icon wc_icon4"></div>
                    </div>
                    
                    <h5>Highly Qualified Doctors</h5>
                </div> 
            </div> 
            <div class="col-lg-4 col-6">
                <div class="why_content_box">
                    <div class="why-content-icon">
                        <div class="wc_icon wc_icon5"></div>
                    </div>
                    
                    <h5> Affordable Cost</h5>
                </div> 
            </div> 
            <div class="col-lg-4 col-6">
                <div class="why_content_box">
                    <div class="why-content-icon">
                        <div class="wc_icon wc_icon6"></div>
                    </div>
                    
                    <h5> Most Trusted IVF Centre</h5>
                </div> 
            </div> 
        </div>    
    </div>
</section>
    
<section class="service_area">
<div class="container ">
<div class="row m-0 serv_row_styl">
<div class="col-lg-6 p-0">
<div class="service_image_block">
<div class="comn_img_block">
<img src="images/ser-1.jpg">
</div> 
</div> 
</div> 
<div class="col-lg-6 p-0">
<div class="service_content_block scb_left">
<div>
<h3 class="site_title">Infertility Treatment</h3>
<ul class="bult_style">
<li>Fertility Evaluation</li>   
<li>Ovulation Induction</li>   
<li>Intra Uterine Insemination</li>   
<li>IVF (In Vitro Fertilisation)</li>   
<li>Introcytoplasmic Sperm Injection</li>     
<li>Andrology</li>   
<li>Fresh Embryo Transfer</li>   
<li>Frozen Embryo Transfer</li>     
</ul>
<a href="#" class="theme_btn" data-bs-toggle="modal" data-bs-target="#en-form">Know more</a>
</div>
</div> 
</div> 
</div> 
<div class="row m-0">
<div class="col-lg-6 p-0">
<div class="service_image_block">
<div class="comn_img_block">
<img src="images/ser-2.jpg">
</div> 
</div> 
</div> 
<div class="col-lg-6 p-0">
<div class="service_content_block scb_right">
<div>
<h3 class="site_title">Gynaecology & 
Endoscopy</h3>
<ul class="bult_style">
<li>Ovarian Cyst Removal</li>     
<li>Endrometriosis</li>     
<li>Hystrectomy</li>     
<li>Laparoscopy</li>     
<li>Hysteroscopy</li>        
</ul>
<a href="#" class="theme_btn" data-bs-toggle="modal" data-bs-target="#en-form">Make Appointment</a>
</div>
</div> 
</div> 
</div> 
</div>    
</section>
    
<!-- FAQ AREA -->
<section class="testimonial_area">
    <div class="container ">
        <h3 class="site_title">FAQ</h3>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How IVF Process Works ?
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>There won’t be unnecessary fear when you have a conceptual clarity on what exactly is IVF. </p>
                    <ul>
                        <li>• Ovarian Stimulation: It’s a process in which first, a fertility specialist monitors the timing of egg release and then a Doctor will make sure whether the hormonal level and overall health conditions for IVF are normal or not. The Doctor analyses the produced eggs to see whether they are appropriate or not.</li>
                        <li>• Egg Retrieval: Eggs are retrieved from the female’s ovary by using a needle, with minor sedation. Then the eggs are kept inside a container consisting nutrient media and further, it is shifted to the incubator.</li>
                        <li>• Fertilisation: In this step, the male sperm are taken and mixed with the most active sperm in a special chamber. Then, eggs and sperm are placed in an incubator and the process is monitored so that a healthy embryo can be developed.</li>
                        <li>• Embryo Transfer: In this final step, the doctor examines to find a healthy embryo and selects one. The healthiest embryo found is transferred with the help of small plastic tubes.</li>
                    </ul>
                    
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                How much time IVF takes? 
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>There will be two visits</p>
                    <ul>
                        <li>1. Checkup/pre-IVF Preparation </li>
                        <li>2. 15 Day for IVF Procedure</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    What is the cost of IVF Program ?
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>As compared to the international IVF hospitals, the cost of IVF is lower in India. The treatment cost ranges between INR 1,25,000 to 1,50,000. It depends on patient’s medical condition and health.</p>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    What is IUI Process ?
                </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>IUI stands for Intrauterine Insemination. It is one of the common techniques of ART (Assisted Reproductive Technology). It allows adding the sperm directly to the female’s uterus. In this step, the processed (washed) sperm are used and usage of this technique will result in escalating the possibilities of conception.</p>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    Is IVF process painful? 
                </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Absolutely Not. IVF is not at all painful because the injections used for IVF are purified and injected in subcutaneous form. The egg collection process is done only after giving a minor sedation which is also painless. No sedatives are given at the time of embryo transfer but it only takes 2 to 5 minutes, which hardly causes any pain!</p>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                    What treatment is available for low sperm?
                </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Oligospermia is the condition when there’s low sperm count. Undergoing ICSI (Intracytoplasmic Sperm Injection) where a single sperm is injected to matured egg is very helpful. Getting this procedure done will increase the chances of conceiving. This treatment is also useful in case of male infertility, low sperm motility and poor sperm morphology.</p>
                </div>
                </div>
            </div>

            <!-- <div class="accordion-item">
                <h2 class="accordion-header" id="heading7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                    What is the IVF success rate ?
                </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro facilis provident corrupti doloremque amet, pariatur ipsum unde ipsam eum sed commodi cumque corporis blanditiis. Voluptatem dolorem deleniti eveniet quos at!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis voluptates nisi architecto necessitatibus vel earum ipsum officia minus commodi odio!
                </div>
                </div>
            </div> -->
            
        </div>

        <div class="text-center">
            <a href="#" class="theme_btn" data-bs-toggle="modal" data-bs-target="#en-form">Contact Us</a>    
        </div>
    </div> 
</section>

<section class="about_area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
            <h1 class="site_title">About Goodwill  IVF</h1>
            </div>
        </div>
        <div class="row"> 
            <div class="col-lg-12 text-center">
                <div class="about_content_area">
                    
                    <p>Goodwill IVF, A unit of Neha Hospital (An ISO 9001:2015 Certified Institute) aspires to reinvent high-tech fertility care in India by providing world-class medical diagnostics and treatment in the field of Assisted Reproductive Technology (ART) by bringing together a highly experienced team of fertility experts, including obstetricians and gynecologists, pediatricians, embryologists & andrologists with cutting edge technology. Our state-of-the-art technology and clinical protocols ensure our high success rates.</p>
                    <p>At Goodwill , we bring dreams to life. We enjoy getting to know our clients on a intimate level, learning about their story and aspirations for the future. We understand that each storey is unique and special, and we design a personalised fertility plan for each couple wanting to conceive, devoting a great deal of time and consideration to each family we build at Goodwill. Throughout your treatment, we make every effort to make you feel at ease and cared for.</p>
                    
                </div>
            </div>  
        </div> 
    </div>    
</section>
    
<section class="footer_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="footer_contact">
                    <ul>
                        <li><a href="tel:+918089713201">Call:  +918089713201</a></li>    
                        <li><a href="mailto:goodwillivf@gmail.com">Email: goodwillivf@gmail.com</a></li>    
                    </ul> 
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer_social">
                    <ul>
                        <li class=""><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a> </li>
                        <li class=""><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a> </li>
                        <li class=""><a href="" target="_blank"><i class="fab fa-instagram"></i></a> </li>
                    </ul>   
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer_appointment">
                    <div><h3>We are here to help you...</h3></div>
                    <div><a href="#" class="theme_btn" data-bs-toggle="modal" data-bs-target="#en-form">Contact Goodwill</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy_rights">
        <div class="container">
            <p>© 2021 Goodwill IVF. All rights reserved. Designed by <a href="http://www.theviralmafia.com/?utm_source=goodwill" target="_blank"> <img src="images/viralmafia.svg" height="20px"></a> | <a href="#" data-bs-toggle="modal" data-bs-target="#myModal3">Privacy Policy</a></p>
        </div>
    </div>
</section>
    
 <div class="cont_link_box">
      <a id="" href="tel:+918089713201" class="callnow_inte" target="">
        <i class="fa fa-phone" aria-hidden="true"></i>
    </a>    
    <a id="" href="https://wa.me/+918089713201" class="whatsapp_inte" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>
</div>

    <!-- Mobile view bottom buttons -->
    <div class="d-md-none mobile-btn d-flex flex-wrap">
        <div class="col-6 px-0">
            <a href="tel:+918089713201" class="btn" style="background-color: #a0348c;">
            <div class="mob-bottom-icon">
                <i class="fas fa-phone-alt" aria-hidden="true"></i> 
            </div>
            Call Us
        </a>
        </div>
        <div class="col-6 px-0">
            <a href="tel:+918089713201" class="btn smooth-scroll" style="background-color: #1aa554;">
                <div class="mob-bottom-icon">
                    <i class="fab fa-whatsapp"></i> 
                </div>
                Whatsapp
            </a>
        </div>
    </div>



</div> <!-- bodywrapper -->

    <div class="modal modal_style fade" id="en-form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-body">
 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
<div class="enq_form placeholder_style ">
<form name="form2" method="post" action="email.php">
<div class="form_title">
<h4>We are always just a heartbeat away</h4>  
<p>To book your appointment with our top specialists, submit your details below </p>
<h5>Book Your Appointment
</h5>
</div>
<div class="form-group">
<input type="text" class="form-control" id="" aria-describedby="" placeholder="Name" name="name" required>
</div>
<div class="form-group">
<input type="email" class="form-control" id="" aria-describedby="" placeholder="Email" name="email" required>
</div>
<div class="form-group">
<input class="form-control" id="" aria-describedby="" placeholder="Phone" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
</div>
<div class="form-group">
<input type="hidden" name="esource" value="<?php echo $source;?>">
<input type="hidden" name="emedium" value="<?php echo $medium;?>">
<input type="submit" class="form-control" value="Submit" name="submit">
</div>
</form>
</div>
      </div>

    </div>
  </div>
</div>



<div class="modal fade popsec onload_pop" id="myModal3">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="btn-close pop_button" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="privacy_onload">

                            <div class="pop-privacy-box">

                                <h4>Privacy Policy</h4>

                                <p>This privacy policy applies to the website( name). We may collect personal information such as your name, address, phone number and email address. We use this information to offer services, deliver services on your request and inform you about events and promotions. We use "cookies" to personalize your online experience. We secure the personal information you provide.</p>

                                <h4>Cookies Policy</h4>

                                <p>We use cookies to improve your experience of our website and to analyze performance and traffic in our website.</p>

                            </div>

                        </div>    
                        
                    </div>

                </div>
            </div>
</div>


<!-- START Bootstrap-Cookie-Alert -->
<div class="alert text-center cookiealert" role="alert">
    <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="#" data-bs-toggle="modal" data-bs-target="#myModal3">Learn more</a>

    <button type="button" class="btn btn-primary btn-sm acceptcookies">
        I agree
    </button>
</div>
<!-- END Bootstrap-Cookie-Alert -->

<a href="#" class="vertical_btn" data-bs-toggle="modal" data-bs-target="#en-form">Enquire</a> 




<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/bs/bootstrap.min.js"></script> 
<script src="js/slick.min.js"></script>	
<script src="js/jquery.fancybox.js"></script>
<script src="js/custom.js"></script>
<script src="js/cookiealert.js"></script>
<script type="text/javascript">
            // $(document).ready(function() {
            //     setTimeout(function() {
            //         $("#en-form").modal('show');
            //     }, 7000);
            // });
</script>

</body>

</html>