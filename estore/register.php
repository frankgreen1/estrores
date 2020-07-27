<!doctype html>
<html lang="zxx">

<?php
require_once "headLink.php";

?>

<body>

<?php
require_once "header.php";
?>



<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>CREATE AN ACCOUNT</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!--================login_part Area =================-->
<section class="login_part section_padding ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12">
                <div class="section-top-border">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="col-lg-12">
                                <h1 class="page-header">Register Here</h1>
                            </div>
                            <br>
                            <form action="process.php" class="form-horizontal span6 container" id=
                            "signUp" method="post" name="signupForm">
                                <div class="row">

                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-4 control-label" for=
                                        "FNAME">Firstname:</label>
                                        <div class="col-md-6">
                                            <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder="First Name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-4 control-label" for=
                                        "LNAME">Lastname:</label>
                                        <div class="col-md-6">
                                            <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder="Last Name" type="text"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required  value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-4 control-label" for=
                                        "USERNAME">Username:</label>
                                        <div class="col-md-6">
                                            <input class="form-control input-sm" id="USERNAME" name="USERNAME" placeholder="Username" type="text"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required  value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-4 control-label" for="EMAILADD">Email
                                            Address:</label>
                                        <div class="col-md-6">
                                            <input class="form-control input-sm" id="EMAILADD" name="EMAILADD" placeholder="Email Address" type="text"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required  value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-4 control-label" for=
                                        "PASS">Password:</label>
                                        <div class="col-md-6">
                                            <input class="form-control input-sm" id="PASS" name="PASS"
                                                   placeholder="Password" type="password"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required  value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-4 control-label" for=
                                        "CPASS">Confirm Password:</label>
                                        <div class="col-md-6">
                                            <input class="form-control input-sm" id="CPASS" name="CPASS" placeholder="Password" type="password"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required  value="">
                                        </div><label class="col-md-2 password"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-4 control-label" for="idno"></label>
                                        <div class="col-md-8">
                                            <button class="btn btn-primary btn-sm btn-signup"  id="register" name="save" type="submit"><span class="fa fa-save fw-fa"></span>
                                                Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>


                </div>
            </div>

        </div>
    </div>
</section>
<!--================login_part end =================-->

<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding2">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.php"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Offers & Discounts</a></li>
                                <li><a href="#"> Get Coupon</a></li>
                                <li><a href="#">  Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>New Products</h4>
                            <ul>
                                <li><a href="#">Woman Cloth</a></li>
                                <li><a href="#">Fashion Accessories</a></li>
                                <li><a href="#"> Man Accessories</a></li>
                                <li><a href="#"> Rubber made Toys</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Support</h4>
                            <ul>
                                <li><a href="#">Frequently Asked Questions</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Report a Payment Issue</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer bottom -->
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="footer-copy-right">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5">
                    <div class="footer-copy-right f-right">
                        <!-- social -->
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer End-->
</footer>

<!-- JS here -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<!-- All JS Custom Plugins Link Here here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="./assets/js/jquery.scrollUp.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
<script type="text/javascript">
    /*$(document).ready(function(){
        $('#contact-form').on('submit',function(e) {  //Don't foget to change the id form
            $.ajax({
                url:'contact.php', //===PHP file name====
                data:$(this).serialize(),
                type:'POST',
                success:function(data){
                    console.log(data);
                    //Success Message == 'Title', 'Message body', Last one leave as it is
                    swal("¡Success!", "Message sent!", "success");
                },
                error:function(data){
                    //Error Message == 'Title', 'Message body', Last one leave as it is
                    swal("Oops...", "Something went wrong :(", "error");
                }
            });
            e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
        });
    });*/
    $(document).ready(function() {


        // validating signup form on keyup and submit
        $("#signUp").validate({
            rules: {
                FNAME: "required",
                LNAME: "required",
                USERNAME: {
                    required: true,
                    minlength: 4
                },
                PASS: {
                    required: true,
                    minlength: 8
                },
                CPASS: {
                    required: true,
                    minlength: 8,
                    equalTo: "#PASS"
                },
                EMAILADD: {
                    required: true,
                    email: true
                }
            },
            /**set the validating message */
            messages: {
                FNAME: "Please enter your First Name",
                LNAME: "Please enter your Last Name",
                USERNAME: {
                    required: "Please enter a Username",
                    minlength: "Your username must consist of at least 4 characters"
                },
                PASS: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 8 characters long"
                },
                CPASS: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 8 characters long",
                    equalTo: "Password does not match."
                },
                EMAILADD: "Please enter a valid email address",

            }
        });

    });

</script>
</html>