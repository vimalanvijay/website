<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='contactstyle.css'>

    <!-- icon pack -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
</head>

<body>
    <nav>
        <div class="logo">
            <img src="media/logo.svg" class="img-logo">
        </div>

        <ul class="nav-links">
            <li><a href="index.html">Home</a></li> 
            <li><a href="index.html#productpage">Order</a></li> 
            <li><a href="about.html">About Us</a></li> 
            <li><a href="#">Basket</a></li> 
            
        </ul>

        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>

        </div>
        <script src="app.js"></script>
    </nav>

    <div class="contact">
        <img src="media/contact.jpeg" class="contact-img">

        <div class="contact-us">
            We'd love to hear from you

        </div>
        <div class="contact-2">
            Wheather you have questions about the product, pricing, willing to test, <br> or anything else, our team is ready to answer all your questions
        </div>

    </div>

    <div class="row">
            <!-- card 1 -->
            <div class="column">
              <div class="card">Send us a message
                  
                    <form class="form-style-9" action="form.php" method="post">
                            <input type="text" name="name" placeholder="name">
                            <input type="text" name="mail" placeholder="email addresss">
                            <input type="text" name="subject" placeholder="subject">

                            <textarea name="message" placeholder="message"></textarea>

                            <button type="submit" name="submit">send mail</button>

                    </form>
              </div>
            </div>

            

            <!-- card 2 -->
            <div class="column-2">
              <div class="card-2" id="social-text">Follow us 
                    <div class="social">
                            <a href="#" class="link facebook" target="_parent"><span class="fa fa-facebook-square"></span></a>
                            <a href="#" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
                            <a href="#" class="link instagram" target="_parent"><span class="fa fa-instagram"></span></a>
                    </div>

                    <div class="social-link-text" id="social-links">
                        Facebook: <a href="www.facebook.com" > facebook.com/magicmaps</a> <br>
                        Twitter:  <a href="www.twitter.com" > twitter.com/@magicmaps </a> <br>
                        Instagram: <a href="www.instagram.com" >instagram.com/@magicmaps </a><br> <br>

                        <hr>

                        <div class="contact-via-text"> 
                            <div class="title-contact-us">Contact us</div>

                            <div class="phone-email-text">
                                <i class="fa fa-phone"> 
                                    <div class="phone">
                                        Phone: (+44)07493102832 
                                    </div>
                                </i>
                                
                                <br>

                                <i class="fa fa-at">
                                    <div class="email">
                                        Email: magicmaps@gmail.com
                                    </div>
                                </i>

                                <br>

                                <i class="fa fa-map-marker"></i>
                                    <div class="location">
                                        Address: Department of Bioengineering <br>
                                        
                                        <div class="align-address-center">
                                            Imperial College London
                                        </div>
                                        <div class="align-address-center-2">
                                            South Kensington, SW7 2AZ <br>
                                        </div>
                                        
                                        
                                        
                                    </div>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>

    
</body>

</html>