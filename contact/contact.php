<?php
if($_POST["submit"]) {
    $recipient="hollyelaineyanez@outlook.com";
    $subject="HollyLlama Contact Requested";
    $sender=$_POST["sender"];
    $senderLast=$_POST["senderLast"];
    $senderEmail=$_POST["senderEmail"];
    $senderphone=$_POST["senderPhone"];

    $mailBody="Name: $sender\n\n$senderLast\nEmail: $senderEmail\n\n$senderPhone";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?><!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>HollyLlama Marketer, Graphic Designer & Web Developer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Raleway&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/0fdf82b936.js" crossorigin="anonymous"></script>
    </head>

    <body>


        <header>
          <div class="nav" id="nav">

            <img src="../img/hollyllama-logo-coolblue.png" class="llamalogo" id="llamalogo" alt="HollyLlama Logo"></a>


            <nav>
                <ul>
                  <li><a class="btn first" href="../index.html">Home</a></li>
                  <li><a class="btn first" href="../development/index.html">Development</a></li>
                  <li><a class="btn second" href="../design/index.html">Design</a></li>
                  <li><a class="btn third" href="../about/index.html">About</a></li>
                </ul>
            </nav>
          </div>

          <div class="main" id="main">
            <h2>The one-stop-shop for all things marketing, design and web development.</h2>
          </div>

        </header>

        <section id="reviews">
          <div class="content-wrapper">
            <div class="contact-form">
              <div class="contact-description">
                <h1>I want to hear from you!</h1>
                <p>My best work comes from making real connections with my clients. That means our working relationship is not a sign-on-the-dotted-line, cold-hearted business deal. It's a partnership!</br></br>Together, you and I will bring your brand design, website and marketing dreams to life. Just make that first step to let me know you're interested and I'll do the rest!</p>
              </div>
      
              <div class="contact-box">

                <form  method="post" action="contact.php">
                  <h5>What's your name and how can I reach you?</h5>
                  
                  <input type="text" name="sender" class="input-field-name" placeholder="First Name">
                  <input type="text" name="senderLast" class="input-field" placeholder="Last Name">
                  <input type="email" name="senderEmail" class="input-field-email" placeholder="Email Address">
                  <input type="tel" name="senderPhone" class="input-field" placeholder="Daytime Phone">
                  <input type="submit" name="submit" value="submit">
                </form>
                
                <?=$thankYou ?>
                
              </div>
            </div>
          </div>
      </section>
      

      <footer id="contact">

        <div class="content-wrapper">
          <h1>Let's Connect</h1>

          <div class="contact">
            <a href="https://www.linkedin.com/in/holly-y%C3%A1nez-7aab2755" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/HollyLlama" target="_blank"><i class="fab fa-github"></i></a>
            <a href="mailto:hollyelaineyanez@outlook.com" target="_blank"><i class="fas fa-envelope"></i></a>
          </div>

          <p>&copy; Copyright <script>document.write(new Date().getFullYear());</script> | HollyLlama</p>

        </div>
      </footer>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="../js/vendor/modernizr-3.11.2.min.js"></script>
      <script src="../js/plugins.js"></script>
      <script src="../js/main.js"></script>
    
      <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
      <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
      </script>
      <script src="https://www.google-analytics.com/analytics.js" async></script>

    </body>
</html>
