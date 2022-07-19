<?php

if(isset($_POST['button']))
{
  $from_email     = 'mnikolic7395@gmail.com'; //from mail, sender email address
  $recipient_email = 'milanche7395@gmail.com'; //recipient email address
  
  //Load POST data from HTML form
  $sender_name = $_POST["name"]; //sender name
  $reply_to_email = $_POST["email"]; //sender email, it will be used in "reply-to" header
  $subject   = $_POST["subject"]; //subject for the email
  $message   = $_POST["message"]; //body of the email

  /*Always remember to validate the form fields like this
  if(strlen($sender_name)<1)
  {
    die('Name is too short or empty!');
  }
  */

  $encoded_content = chunk_split(base64_encode($content));
  $boundary = md5("random"); // define boundary with a md5 hashed value

  //header
  $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
  $headers .= "From:".$from_email."\r\n"; // Sender Email
  $headers .= "Reply-To: ".$reply_to_email."\r\n"; // Email address to reach back
  $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
  $headers .= "boundary = $boundary\r\n"; //Defining the Boundary
    
  //plain text
  $body = "--$boundary\r\n";
  $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
  $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
  $body .= chunk_split(base64_encode($message));

  
  $sentMailResult = mail($recipient_email, $subject, $body, $headers);

  if($sentMailResult ){
    
  }
  else{
    die("Sorry but the email could not be sent.
          Please go back and try again!");
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dist/css/main.min.css">
    <link rel="stylesheet" href="dist/css/splide.min.css">
    <link rel="stylesheet" href="scss/magnific-popup.min.css">
    <link rel="stylesheet" href="dist/css/aos.css">
    <title>Milan Nikolić | Web Developer and Grapchic Designer</title>

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon//favicon-16x16.png">
    <link rel="manifest" href="img/favicon//site.webmanifest">
    <link rel="mask-icon" href="img/favicon//safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:url" content="httsp://www.milan-nikolic.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Milan Nikolic Portfolio Website" />
    <meta property="og:description"
        content="Frontend developer and UI designer based in Serbia, with a wide range of expertise in both the creative and development process" />
    <meta property="og:image" content="https://milan-nikolic.com/img/og-image.jpg" />

    <script src="js/fontawesome.js"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("contact-form").submit();
        }
    </script>
</head>

<body>
    <div class="preloader">
            <div class="content">
                <div class="milan">
                    <svg version="1.1" id="milan" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 243 54.5"
                        style="enable-background:new 0 0 243 54.5;" xml:space="preserve">
                        <g>
                            <path
                                d="M63.7,0v54.5H48.5V24.4L38.2,54.5H25.5L15.2,24.2v30.3H0V0h18.3L32,35.4L45.4,0H63.7z" />
                            <path d="M87.5,0v54.5H72.3V0H87.5z" />
                            <path d="M111.3,42.9h16.9v11.6H96.2V0h15.2V42.9z" />
                            <path
                                d="M168.6,45.6h-19.3l-2.9,8.9h-15.9L150.3,0h17.5l19.8,54.5h-16L168.6,45.6z M164.8,34L159,16.4L153.2,34H164.8z" />
                            <path d="M243,54.5h-15.2l-20.2-30.5v30.5h-15.2V0h15.2l20.2,30.9V0H243V54.5z" />
                        </g>
                    </svg>
                </div>
                <div class="nikolic">
                    <svg version="1.1" id="nikolic" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 313.3 76.8"
                        style="enable-background:new 0 0 313.3 76.8;" xml:space="preserve">
                        <g>
                            <path d="M50.5,76.8H35.4L15.2,46.3v30.5H0V22.3h15.2l20.2,30.9V22.3h15.2V76.8z" />
                            <path d="M74.3,22.3v54.5H59.2V22.3H74.3z" />
                            <path
                                d="M115.3,76.8L98.2,52.9v23.9H83V22.3h15.2v23.5l16.9-23.5h17.5l-20,26.5l21,28.1H115.3z" />
                            <path d="M151.2,73.8c-4.3-2.4-7.7-5.7-10.2-10c-2.5-4.3-3.8-9.1-3.8-14.4c0-5.4,1.2-10.2,3.8-14.4c2.5-4.3,5.9-7.6,10.2-9.9
		c4.3-2.4,9-3.6,14.1-3.6c5.2,0,9.9,1.2,14.1,3.6c4.3,2.4,7.6,5.7,10.1,9.9c2.5,4.3,3.7,9.1,3.7,14.4c0,5.4-1.2,10.2-3.7,14.4
		c-2.5,4.3-5.9,7.6-10.1,10c-4.3,2.4-9,3.6-14.1,3.6S155.5,76.2,151.2,73.8z M174.5,59.5c2.2-2.5,3.4-5.9,3.4-10.1
		c0-4.3-1.1-7.7-3.4-10.2c-2.2-2.5-5.3-3.8-9.2-3.8c-3.9,0-7,1.3-9.2,3.8c-2.2,2.5-3.3,5.9-3.3,10.2c0,4.3,1.1,7.7,3.3,10.2
		c2.2,2.5,5.3,3.8,9.2,3.8C169.2,63.3,172.2,62,174.5,59.5z" />
                            <path d="M215.2,65.2h16.9v11.6H200V22.3h15.2V65.2z" />
                            <path d="M253.2,22.3v54.5H238V22.3H253.2z" />
                            <path d="M263.4,35.1c2.2-4.2,5.4-7.5,9.6-9.8c4.1-2.3,8.9-3.5,14.2-3.5c6.8,0,12.5,1.8,17.2,5.5s7.6,8.6,9,14.8H297
		c-1-2.1-2.3-3.6-4.1-4.7c-1.7-1.1-3.7-1.6-6-1.6c-3.5,0-6.3,1.3-8.4,3.8c-2.1,2.5-3.1,5.8-3.1,10c0,4.2,1,7.6,3.1,10.1
		c2.1,2.5,4.9,3.8,8.4,3.8c2.3,0,4.3-0.5,6-1.6c1.7-1.1,3.1-2.7,4.1-4.7h16.3c-1.3,6.2-4.3,11.2-9,14.8c-4.6,3.6-10.4,5.5-17.2,5.5
		c-5.4,0-10.1-1.2-14.2-3.5c-4.1-2.3-7.3-5.6-9.6-9.8c-2.2-4.2-3.4-9-3.4-14.4C260,44.1,261.1,39.3,263.4,35.1z M296.4,11.4
		L277.1,19V8.7L296.4,0V11.4z" />
                        </g>
                    </svg>

                </div>
        </div>

    </div>

    <div class="progress-holder">
        <div class="progress-container">
            <div class="progress-bar" id="progressBar"></div>
        </div>
    </div>
    <header>
        <div class="container container-holder">
            <div class="logo">Milan<span>.</span></div>
            <div class="navigation">
                <nav>
                    <ul id="nav">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#work">Work</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <a href="#contact" class="hire-me">Hire Me</a>
            </div>
            <div class="menu menu--close5">
                <div class="menu__icon">
                    <div class="menu__line menu__line--1"></div>
                    <div class="menu__line menu__line--2"></div>
                    <div class="menu__line menu__line--3"></div>
                    <div class="menu__line menu__line--4"></div>
                    <div class="menu__line menu__line--5"></div>
                </div>
            </div>
        </div>
    </header>

    <section id="home" class="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span class="tagline-headline">Hello, I am <strong>Milan Nikolić</strong></span>
                    <h1><span class="gradient-text">Web Developer & UI Designer</span></h1>
                    <p>I am a frontend developer and UI designer, with over 15 years experience. I mainly work on frontend using HTML, CSS/SASS and JS Libraries. I use Adobe Suite to design mocks and illustrations. <br>Currently working at BridTV Company.</p>
                    <a href="#about" class="btn">Show me more</a>
                    <h3></h3>
                </div>
                <div class="col-lg-6 main-img">
                    <img src="img/circle.svg" alt="" class="circle">
                    <img src="img/main-photo-color.webp" alt="Milan Nikolic" class="mn-img">
                    <div class="floating-icons">
                        <img class="adobexd" src="img/adobexd.svg" alt="">
                        <img class="reactjs" src="img/reactjs.svg" alt="">
                        <img class="photoshop" src="img/adobephotoshop.svg" alt="">
                        <img class="illustrator" src="img/adobeillustrator.svg" alt="">
                        <img class="javascript" src="img/javascript.svg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="about" class="about" data-aos="fade" data-aos-delay="200" data-aos-duration="800">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pe-4 about-img">
                    <div class="back-img">
                        <img class="back" src="img/about-img.webp" alt="">
                    </div>
                    <div class="img-container">
                        <img src="img/milan-nikolic.webp" alt="Milan Nikolic">
                    </div>
                </div>
                <div class="col-lg-6 ps-4 about-section">
                    <span class="tagline">About me</span>
                    <h2>From zero to <span>hero</span></h2>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">About Me</a>
                            <a class="nav-link" id="nav-personal-info-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-personal-info" role="tab" aria-controls="nav-education"
                                aria-selected="false">Personal Info</a>
                            <a class="nav-link" id="nav-education-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-education" role="tab" aria-controls="nav-education"
                                aria-selected="false">Education</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <p>Over the past <span class="years"></span> years, I've worked with a diverse range of
                                clients, from startups to Fortune 500 companies. I love crafting interfaces that delight
                                users and help businesses grow.</p>
                            <p>My most recent position was as an interactive designer at a large corporation where I was
                                responsible for designing assets for marketing campaigns, landing pages and apps for
                                Android and iOS devices. </p>
                            <img class="signature" src="img/signature.png" alt="">
                        </div>
                        <div class="tab-pane fade" id="nav-personal-info" role="tabpanel"
                            aria-labelledby="nav-personal-info-tab">
                            <ul class="personal-info">
                                <li>Name : <span>Milan Nikolić</span> </li>
                                <li>Age : <span class="birthday"></span> </li>
                                <li>Nationality : <span>Serbia</span> </li>
                                <li>Freelance : <span>Available</span> </li>
                                <li>Residence : <span>Serbia</span> </li>
                                <li>Phone : <span>+381 63 73 95 202</span> </li>
                                <li>Email : <span>contact@milan-nikolic.com</span> </li>
                                <li>Languages : <span>Serbian, English</span> </li>
                            </ul>

                        </div>
                        <div class="tab-pane fade" id="nav-education" role="tabpanel"
                            aria-labelledby="nav-education-tab">
                            <div class="tab-holder">
                                <div class="year">
                                    2001 2005
                                </div>
                                <p>
                                    Electrotechnical High School “Nada Dimić”
                                    <span>
                                        Computer Technician
                                    </span>
                                </p>
                            </div>
                            <div class="tab-holder">
                                <div class="year">
                                    2005 2009
                                </div>
                                <p>
                                    Singidunum University
                                    <span>
                                        Information Systems Engineer
                                    </span>
                                </p>
                            </div>
                            <div class="tab-holder">
                                <div class="year">
                                    2009 Now
                                </div>
                                <p>
                                    Self Education
                                    <span>
                                        Courses & Internet
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="services" class="services" data-aos="fade" data-aos-delay="200" data-aos-duration="800">
        <div class="container">
            <div class="row my-services">
                <div class="col-lg-6 left">
                    <span class="tagline">My Services</span>
                    <h2>Why do <span>you need me?</span></h2>
                    <p>I use a wide range of techniques and tools to create high-quality websites and graphical design
                        projects. I work, with HTML5 / CSS3 / JavaScript, jQuery, VueJS and ReactJS.</p>
                    <p>For faster results and smaller budgets I work with WordPress, Webflow and Hubspot. My SEO skills
                        are solid, so you can be sure that your site will be well optimized for search engines.</p>
                        <a href="#contact" class="btn">Hire me</a>
                </div>
                <div class="col-lg-6">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="item">
                                <div class="icon-img">
                                    <img class="img-fluid" src="img/service-1.svg" alt="What I can do for you">
                                </div>
                                <div class="item-content">
                                    <h3>Web Development</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item second-service">
                                <div class="icon-img">
                                    <img class="img-fluid" src="img/service-3.svg" alt="Applicatitions I'm fluent in">
                                </div>
                                <div class="item-content">
                                    <h3>Graphic Design</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item">
                                <div class="icon-img">
                                    <img class="img-fluid" src="img/service-2.svg" alt="What you can expect">
                                </div>
                                <div class="item-content">
                                    <h3>UI & UX Design</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item second-service">
                                <div class="icon-img">
                                    <img class="img-fluid" src="img/service-4.svg" alt="What you can expect">
                                </div>
                                <div class="item-content">
                                    <h3>Motion Graphics</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="work" class="work" data-aos="fade" data-aos-delay="200" data-aos-duration="800">
        <div class="container">
            <div class="row mb-4">
                <div class="col-xl-3">
                    <span class="tagline">Portfolio</span>
                    <h2>Latest <span>work</span></h2>
                </div>
                <div class="col-xl-9">
                    <p class="portfolio-subline">Just a little sneak peek at my latest projects. If you want to see more, please contact me. <br>Due to NDA contracts, I am not allowed to show every project I worked on.</p>
                </div>
            </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div id="splide" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <a href="img/portfolio/portfolio-design.webp" data-effect="mfp-zoom-out">
                                <img src="img/portfolio/portfolio-design.webp">
                                <div class="overlay">
                                    <h3>Milan Nikolic</h3>
                                    <p>Website Design and Development</p>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="img/portfolio/insurance.webp" data-effect="mfp-zoom-out">
                                <img src="img/portfolio/insurance.webp">
                                <div class="overlay">
                                    <h3>Sanzlife</h3>
                                    <p>Website Design</p>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="img/portfolio/belgrade.webp" data-effect="mfp-zoom-out">
                                <img src="img/portfolio/belgrade.webp">
                                <div class="overlay">
                                    <h3>Belgrade</h3>
                                    <p>Website Design</p>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="img/portfolio/idvorsky-business-card.webp" data-effect="mfp-zoom-out">
                                <img src="img/portfolio/idvorsky-business-card.webp">
                                <div class="overlay">
                                    <h3>Idvorsky</h3>
                                    <p>Business Card Design</p>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="img/portfolio/social-media.webp" data-effect="mfp-zoom-out">
                                <img src="img/portfolio/social-media.webp">
                                <div class="overlay">
                                    <h3>BridTV</h3>
                                    <p>Social Media Design</p>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="img/portfolio/dr-zutic.webp" data-effect="mfp-zoom-out">
                                <img src="img/portfolio/dr-zutic.webp">
                                <div class="overlay">
                                    <h3>DrZutic</h3>
                                    <p>www.drzutic.com</p>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="img/portfolio/medigen.webp" data-effect="mfp-zoom-out">
                                <img src="img/portfolio/medigen.webp">
                                <div class="overlay">
                                    <h3>Medigen</h3>
                                    <p>www.medigen.rs</p>
                                </div>
                            </a>
                        </li>                     
                    </ul>
                </div>
            </div>
        </div>

    </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="tagline">Let's connect</span>
                    <h2>Contact <span>me</span></h2>
                    <p>If you have any questions, fill in the form or can contact me directly.</p>
                    <ul class="list-unstyled mb-0">
                        <li><i class="fa-solid fa-location-dot"></i> <p>Belgrade, Serbia</p>
                        </li>

                        <li><i class="fa-solid fa-phone"></i>
                            <p> <a href="tel:+381637395202">+381 63 73 95 202</a></p>
                        </li>

                        <li><i class="fa-solid fa-envelope"></i></i>
                            <p> <a href="mailto:contact@milan-nikolic.com">contact@milan-nikolic.com</a></p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                   
                        <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            echo "<span class=\"tagline\">Message sent</span>";
            echo "<h2>We'll be <span>in touch.</span></h2>";
        }
            else
        {
    ?>
                    <!--Section description-->
                    <form id="contact-form" name="contact-form" action="index.php#contact" method="POST">
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="mb-4 form-holder">
                                    <input type="text" id="name" name="name" class="form-control" required>
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="mb-4 form-holder">
                                    <input type="text" id="email" name="email" class="form-control" required>
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4 form-holder">
                                    <input type="text" id="subject" name="subject" class="form-control" required>
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12 mb-4 form-holder message">

                                <textarea type="text" id="message" name="message" rows="2"
                                    class="form-control md-textarea <?= $invalid_class_name ?? "" ?>" required></textarea>
                                <label for="message">Your message</label>

                            </div>
                        </div>
                        <!--Grid row-->

                        <div>
                                <input class="btn btn-primary" type="submit" name="button" value="Send"  onclick="validateForm();" class="g-recaptcha"
                                data-sitekey="6Le4NIUgAAAAAA1bM1xSjzrPR00quSMx0iov9vVD" data-callback='onSubmit'
                                data-action='submit'/>
                            <div class="status"></div>
                        </div>
                  
                    </form>

                    <?php
}
?>

                </div>
                <!--Grid column-->


            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <small>Milan Nikolic © 2007-<span class="currentyear"></span>. All rights Reserved.</small>
        </div>
    </footer>

    <div class="social-holder">
        <div class="button-social">Let's connect</div>
        <div class="links">
            <ul>
                <li>
                    <a target="_blank" href="https://www.linkedin.com/in/mnikolic1/">
                        <img src="img/linkedin.svg" class="linkedin" alt="Linkedin">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.facebook.com/milanche7395/">
                        <img src="img/facebook.svg" class="facebook" alt="Facebook"></a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/milanche7395/">
                        <img src="img/instagram.svg" class="instagram" alt="Instagram">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://wa.me/+381637395202">
                        <img src="img/whatsup.svg" class="whatsup" alt="Whatsup">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="http://m.me/milanche7395">
                        <img src="img/messinger.svg" class="messinger" alt="Messinger">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="skype:milanche7395?chat">
                        <img src="img/skype.svg" class="skype" alt="Skype"></a>
                </li>
            </ul>
        </div>


    </div>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119148481-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-119148481-1');
    </script>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/splide.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/aos.js"></script>

</body>

</html>