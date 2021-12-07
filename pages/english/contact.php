<?php
//Collect informations
$name = $_POST['prénom'];
$last_name = $_POST ['nom'];
$sender = $_POST ['destinateur'];
$number = $_POST ['numéro'];
$subject = $_POST ['sujet'];
$message = $_POST ['message'];
$mail_subject = "Nouveau message sur votre site web à propos de: $subject.".
$mail_body = "Vous avez reçu un nouveau message de $name $last_name.\n".
		"Adresse e-mail: $sender\n".
		"Numéro: $number\n".
		"Message: $message";
$to = "postmaster@kegroupe.com";
$headers = "From: $name $last_name \n";
//Send the mail
mail($to, $mail_subject, $mail_body, $headers);
?>
<!doctype html>
<html>
  
<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="robots" content="noindex">

    <title>K&E</title>
    <!-- web fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&amp;display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style-liberty.css">
</head>
  

<body>
<div class="w3l-bootstrap-header fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark  bg-dark p-2">
    <div class="container">
      <a class="navbar-brand" href="index.html"><span class="fa fa-shield"></span>K&E groupe</a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html" style="color: white; font-weight: bold;"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#commencer"><i class="fa fa-info" aria-hidden="true"></i> About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-briefcase" aria-hidden="true"></i> Services</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="preventive_surveillance.html"><span class="fa fa-video-camera" aria-hidden="true"></span> Preventive surveillance</a>
              <a class="dropdown-item" href="virtual_security.html"><span class="fa fa-lock" aria-hidden="true"></span> Virtual security</a>
              <a class="dropdown-item" href="facial_recognition.html"><span class="fa fa-eye" aria-hidden="true"></span> Facial recognition</a>
              <a class="dropdown-item" href="idt_access.html"><span class="fa fa-wrench" aria-hidden="true"></span> IDT Acess</a>
              <a class="dropdown-item" href="idt_jet.html"><span class="fa fa-wrench" aria-hidden="true"></span> IDT Jet</a>
              <a class="dropdown-item" href="idt_onyx.html"><span class="fa fa-wrench" aria-hidden="true"></span> IDT Onyx</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#membres"><i class="fa fa-users" aria-hidden="true"></i> Members</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html"><i class="fa fa-user" aria-hidden="true"></i> Contact</a>
          </li>
          <li class="nav-item" style="float: right!important;">
            <a class="nav-link" href="../../index.html" name="english"><span class="fa fa-globe"></span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- contacts -->
<section class="w3l-contact mt-5">
  <div class="contacts-9 py-5 mt-5">
    <div class="container py-lg-3">
      <div class="row top-map">
        <div class="cont-details col-md-5">
          <div class="heading mb-lg-4 mb-4">
            <h3 class="head">Contact us </h3>
          </div>
          <div class="cont-top">
            <div class="cont-left">
              <span class="fa fa-phone"></span>
            </div>
            <div class="cont-right">
              <p><a href="tel:+225 57-10-63-94">+225 57-10-63-94</a></p>

            </div>
          </div>
          <div class="cont-top mt-4">
            <div class="cont-left">
              <span class="fa fa-envelope-o"></span>
            </div>
            <div class="cont-right">
              <p><a href="mailto:postmaster@kegroupe.com" class="mail">postmaster@kegroupe.com</a></p>
            </div>
          </div>
          <div class="cont-top mt-4">
            <div class="cont-left">
              <span class="fa fa-map-marker"></span>
            </div>
            <div class="cont-right">
              <p>Riviera Faya Lauriers 9 entrée C ,Abidjan, Côte d'Ivoire</p>
            </div>
          </div>
        </div>
        <div class="map-content-9 col-md-7 mt-5 mt-md-0">
          <form action="contact.php" method="post">
            <div class="form-group row">
              <div class="col-md-6">
                <label class="contact-textfield-label" for="prénom">First name</label>
                <input type="text" class="form-control" name="prénom" id="w3lName" placeholder="" required="">
              </div>
              <div class="col-md-6 mt-md-0 mt-3">
                <label class="contact-textfield-label" for="nom">Last name</label>
                <input type="text" class="form-control" name="nom" placeholder="" required="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label class="contact-textfield-label" for="destinateur">Email adress</label>
                <input type="email" class="form-control" name="destinateur" id="w3lSender" placeholder="" required="">
              </div>
              <div class="col-md-6 mt-md-0 mt-3">
                <label class="contact-textfield-label" for="numéro">Phone number</label>
                <input type="tel" class="form-control" name="numéro" id="w3lPhone" placeholder="" required="">
              </div>
            </div>
            <div class="form-group">
              <label class="contact-textfield-label" for="sujet">Subject</label>
              <input type="text" class="form-control" name="sujet" id="w3lSubject" placeholder="" required="">
            </div>
            <div class="form-group">
              <label class="contact-textfield-label" for="message">Message</label>
              <textarea name="message" class="form-control" id="w3lMessage" placeholder="" required=""></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-contact">Send Message</button>
            <p></p>
            <p style="color: red;">Thank you, your message has been sent !</p>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="map">
    <iframe
      src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=riviera%205%20laurier9%20abidjan+(Your%20Business%20Name)&ie=UTF8&t=&z=16&iwloc=B&output=embed"
      allowfullscreen=""></iframe>
  </div>

<!-- //contacts -->
      <!-- footer-28 block -->
  <section class="w3l-market-footer">
   <footer class="footer-28">
     <div class="footer-bg-layer">
        <div class="container py-lg-3">
          <div class="row footer-top-28">
            <div class="col-md-6 footer-list-28 mt-5">
                <h6 class="footer-title-28">Contact information</h6>
                <ul>
                  <li>
                    <p><strong>Head office</strong> : Riviera Faya Lauriers 9 entrée C ,Abidjan, Côte d'Ivoire</p>
                  </li>
                  <li>
                    <p><strong>Phone</strong> : <a href="tel:+225 57-10-63-94">+225 57-10-63-94</a></p>
                  </li>
                  <li>
                    <p><strong>Email</strong> : <a href="mailto:infos@kegroupe.com">infos@kegroupe.com</a></p>
                  </li>
                </ul>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-4 footer-list-28 mt-5">
                  <h6 class="footer-title-28">Our services</h6>
                  <ul>
                    <li><a href="preventive_surveillance.html">Preventive surveillance</a></li>
                    <li><a href="virtual_security.html">Virtual security</a></li>
                    <li><a href="facial_recognition.html">Facial recognition</a></li>
                    <li><a href="idt_access.html">IDT Access</a></li>
                    <li><a href="idt_jet.html">IDT Jet</a></li>
                    <li><a href="idt_onyx.html">IDT Onyx</a></li>
                  </ul>
                </div>
                <div class="col-md-4 footer-list-28 mt-5">
                  <h6 class="footer-title-28">The company</h6>
                  <ul>
                   <li><a href="index.html#commencer">About</a></li>
                    <li><a href="index.html#commencer">How it works</a></li>
                    <li><a href="index.html#avantages">Benefits</a></li>
                  </ul>
                </div>
                <div class="col-md-4 footer-list-28 mt-5">
                  <h6 class="footer-title-28">Divers</h6>
                  <ul>
                    <li><a href="contact.html">Contact us</a></li>
                    <li><a href="index.html#membres">Members</a></li>
                    <li><a href="../../index.html">French</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="midd-footer-28 align-center py-lg-4 py-3 mt-5">
          <div class="container">
            <p class="copy-footer-28 text-center" style="font-style: bold;"> &copy; 2020 . All Rights Reserved <a href="mailto:infos@kegroupe.com">K&E Groupe</a>. Design by <a href="mailto:ehuidav@gmail.com"><strong>David Ehui</strong></a></p>
          </div>
        </div>
      </div>
    </footer>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
          &#10548;
        </button>
        <script>
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function () {
            scrollFunction()
          };

          function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("movetop").style.display = "block";
            } else {
              document.getElementById("movetop").style.display = "none";
            }
          }

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }
        </script>
        <!-- /move top -->
  </section>
      <!-- //footer-28 block -->

      <!-- jQuery, Bootstrap JS -->
      <script src="../../assets/js/jquery-3.3.1.min.js"></script>
      <script src="../../assets/js/bootstrap.min.js"></script>

      <!-- Template JavaScript -->
      
      <script src="../../assets/js/owl.carousel.js"></script>

      <!-- script for owlcarousel -->
      <script>
        $(document).ready(function () {
          $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
              0: {
                items: 1,
                nav: false
              },
              480: {
                items: 1,
                nav: false
              },
              667: {
                items: 1,
                nav: true
              },
              1000: {
                items: 1,
                nav: true
              }
            }
          })
        })
      </script>
      <!-- //script for owlcarousel -->

      <!-- disable body scroll which navbar is in active -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
      <!-- disable body scroll which navbar is in active -->
      
      <script src="../../assets/js/smartphoto.js"></script>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          const sm = new SmartPhoto(".js-img-viwer", {
            showAnimation: false
          });
          // sm.destroy();
        });
      </script>

      <script src="../assets/js/jquery.magnific-popup.min.js"></script>
      <script>
        $(document).ready(function () {
          $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
          });

          $('.popup-with-move-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-slide-bottom'
          });
        });
      </script>
 

</body>


</html>