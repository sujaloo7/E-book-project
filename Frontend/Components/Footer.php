<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wi-Fi Publictaion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
<style>


section {
    padding: 60px 0;
    min-height: 100vh;
}
a
{
    text-decoration: none !important;
}
ul{
    padding-left: 0% !important;
}

a,
a:hover,
a:focus,
a:active {
    text-decoration: none;
    outline: none;
}

a,
a:active,
a:focus {
    color: #6f6f6f;
    text-decoration: none;
    transition-timing-function: ease-in-out;
    -ms-transition-timing-function: ease-in-out;
    -moz-transition-timing-function: ease-in-out;
    -webkit-transition-timing-function: ease-in-out;
    -o-transition-timing-function: ease-in-out;
    transition-duration: .2s;
    -ms-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -webkit-transition-duration: .2s;
    -o-transition-duration: .2s;
}

ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
img {
max-width: 100%;
/* height: auto; */
}.footer-section {
background-color: #233243;
position: relative;
overflow: hidden;
z-index: 9;
}
.footer-section:before {
content: '';
position: absolute;
top: -146%;
left: -18%;
width: 44%;
height: 257%;
transform: rotate(54deg);
background-color: rgb(31, 47, 64);
-webkit-transform: rotate(54deg);
-moz-transform: rotate(54deg);
-ms-transform: rotate(54deg);
-o-transform: rotate(54deg);
z-index: -10;
}
.footer-section:after {
position: absolute;
content: '';
background-color: rgb(31, 47, 64);
top: -24%;
right: 4%;
width: 26%;
height: 264%;
transform: rotate(44deg);
-webkit-transform: rotate(44deg);
-moz-transform: rotate(44deg);
-ms-transform: rotate(44deg);
-o-transform: rotate(44deg);
z-index: -10;
}
.footer-top {
padding-top: 96px;
padding-bottom: 50px;
}
.footer-top p,
.company-footer-contact-list li {
color: #ffffff;
}
.company-footer-contact-list {
margin-top: 10px;
}
.company-footer-contact-list li {
display: flex;
display: -webkit-flex;
align-items: center;
}
.company-footer-contact-list li+li {
margin-top: 5px;
}
.company-footer-contact-list li i {
margin-right: 10px;
font-size: 20px;
display: inline-block;
}

.footer-top .site-logo {
margin-bottom: 25px;
display: block;
max-width: 170px;
}
.widget-title {
text-transform: capitalize;
}
.footer-top .widget-title {
color: #ffffff;
margin-bottom: 40px;
}
.courses-link-list li+li {
margin-top: 10px;
}
.courses-link-list li a {
color: #ffffff;
text-transform: capitalize;
font-family: var(--para-font);
font-weight: 400;
}
.courses-link-list li a:hover {
color: #0CC5CD;
}
.courses-link-list li i {
margin-right: 5px;
}
.footer-top .small-post-title a {
font-family: var(--para-font);
color: #ffffff;
font-weight: 400;
}
.small-post-item .post-date {
color:#0CC5CD;
margin-bottom: 3px;
font-family: var(--para-font);
font-weight: 400;
}
.small-post-list li+li {
margin-top: 30px;
}
.news-letter-form {
margin-top: 15px;
}
.news-letter-form input {
width: 100%;
padding: 12px 25px;
border-radius: 5px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
-ms-border-radius: 5px;
-o-border-radius: 5px;
border: none;
}
.news-letter-form input[type="submit"] {
width: auto;
border: none;
background-color: #0CC5CD;
padding: 9px 30px;
border-radius: 5px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
-ms-border-radius: 5px;
-o-border-radius: 5px;
color: #ffffff;
margin-top: 10px;
}
.footer-bottom {
padding: 13px 0;
border-top: 1px solid rgba(255, 255, 255, 0.149);
}
.copy-right-text {
color: #ffffff;
}
.copy-right-text a {
color: #0CC5CD;
}
.terms-privacy li+li {
margin-left: 30px;
}
.terms-privacy li a {
color: #ffffff;
position: relative;
}
.terms-privacy li a:after {
position: absolute;
content: '-';
color: #ffffff;
display: inline-block;
top: 0;
right: -18px;
}
.terms-privacy li+li a:after {
display: none;
}

@media screen and (max-width:525px) {
    .footer-top{
        text-align: center !important;
    }
   .widget-title{
    color: #0CC5CD !important;
   }
}
    </style>

  <footer class="footer-section bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget company-intro-widget">
                            <a href="#" class="site-logo"><img src="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/images/logo.png"; ?>."
                                    class=""   alt="logo"></a>
                            <p style="font-size:15px;"> B-6, Rajendra Marg, Maharani Appartment,Bapu Nagar,Jaipur-302015</p>
                            <i class="fa-brands fa-facebook "  style="font-size:25px; color:#3f729b;"></i>&nbsp;&nbsp;
                            <i class="fa-brands fa-instagram " style="font-size:25px; color:#E1306C;"></i>&nbsp;&nbsp;
                            <i class="fa-brands fa-twitter text-info"   style="font-size:25px;"></i>&nbsp;&nbsp;
                            <i class="fa-brands fa-linkedin "  style="font-size:25px; color:#0077b5;"></i>
                            
                            </ul>
                        </div>
                    </div><!-- widget end -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget course-links-widget">
                            <h5 class="widget-title">Popular Courses</h5>
                            <ul class="courses-link-list">
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Academic English</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Web Technology</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>PC Systems</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Ui Web Design</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Web Development</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Apps Development</a></li>
                            </ul>
                        </div>
                    </div><!-- widget end -->

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget course-links-widget">
                            <h5 class="widget-title">Popular Courses</h5>
                            <ul class="courses-link-list">
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Academic English</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Web Technology</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>PC Systems</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Ui Web Design</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Web Development</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Apps Development</a></li>
                            </ul>
                        </div>
                    </div><!-- widget end -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget course-links-widget">
                            <h5 class="widget-title">Popular Courses</h5>
                            <ul class="courses-link-list">
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Academic English</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Web Technology</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>PC Systems</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Ui Web Design</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Web Development</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Apps Development</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="color: white;">
        <div>
            <div class="container p-3">
                <div class="row">
                    <div class="col-md-6 col-sm-6 text-sm-left text-center">
                        <span class="copy-right-text">© 2022 <a href="#">Wi-Fi Publictaion</a> All
                            Rights Reserved.</span>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <ul class="terms-privacy d-flex justify-content-sm-end justify-content-center">
                            <li><a href="">Terms & Conditions</a></li>
                            <li><a href="./inner-pages/privacy-policy.php">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- footer-bottom end -->
    </footer>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>