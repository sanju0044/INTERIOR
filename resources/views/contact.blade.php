<!DOCTYPE HTML>
<html class="no-js" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Interior - Contact Us</title>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700%7COpen+Sans:300,400" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body class="inner-page">

    <!-- Wrapper -->
    <div id="wrapper">
        @include('navbar')

        <section class="headings">
            <div class="text-heading">
                <div class="container">
                    <h1 class="text-center">CONTACT US</h1>
                </div>
            </div>
        </section>
        <div class="road">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="index.html">Home</a><span>»</span><span>CONTACT US</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION CONTACT -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title ml-3">
                    <h3>Have a Question?</h3>
                    <h2>CONTACT US</h2>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                            <div id="success" class="successform">
                                <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                            </div>
                            <div id="error" class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" name="name" placeholder="Enter Full Name">
                            </div>
                            <div class="form-group">
                                <input type="number" required class="form-control input-custom input-full" name="lastname" placeholder="Enter Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-custom input-full" name="email" placeholder="Enter Email id">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="Message"></textarea>
                            </div>
                            <div class="box bg-3">
                                <button type="submit" id="submit-contact" class="button button--wayra button--border-thick button--text-upper button--size-s">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 info-touch">
                        <h4>Keep In Touch</h4>
                        <div class="my-info">
                            <div class="in1">
                                <div class="address">
                                    <p><i class="fa fa-map-marker"></i>H-3, 2ND FLOOR, SHIVAJI PARK, PUNJABI<br>BAGH- WEST, NEW DELHI - 110026</p>
                                </div>

                            </div><br>
                            <div class="in1">
                                <div class="address">
                                    <p><i class="fa fa-map-marker"></i>6/482, VINEET KHAND 6, GOMTI
NAGAR, LUCKNOW
UTTAR PRADESH - 226010</p>
                                </div>

                            </div><br>
                            <div class="in1">
                                <div class="address">
                                    <p><i class="fa fa-map-marker"></i>AYODHYA ROAD, AKBARPUR,
AMBEDKAR NAGAR, UTTAR PRADESH,
224122</p>
                                </div>

                            </div><br>
                            <div class="in1">
                                <div class="email">
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> CONTACT@INTERIORTOUCH.CO.IN</p>
                                </div>
                                <div class="phone">
                                    <p><i class="fa fa-phone" aria-hidden="true"></i> 9580434453</p>
                                </div>
                                    <!-- <div class="whatssap">
                                        <p><i class="fa fa-whatsapp" aria-hidden="true"></i> (234) 0200 17813</p>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION CONTACT -->

        <!-- START SECTION GOOGLE MAP -->
        <div id="contact-map" class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6766.693168115271!2d81.016348!3d26.856932!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be2ee9425f761%3A0x67750fdecc4d38c4!2s6%2F482%2C%20Vineet%20Khand%206%2C%20Gomti%20Nagar%2C%20Lucknow%2C%20Uttar%20Pradesh%20226010!5e1!3m2!1sen!2sin!4v1758011268705!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- END SECTION GOOGLE MAP -->

        @include('footer')

        @include('js')

    </div>
    <!-- Wrapper / End -->
</body>

</html>
