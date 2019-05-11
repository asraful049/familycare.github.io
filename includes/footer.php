<!-- footer -->
<div class="contact" id="contact">
    <div class="container">
        <div class="f-bg-w3l">
            <h3>CONTACT US</h3>
            <div class="col-md-4  w3layouts_footer_grid1">
                <div class="form-bg-w3ls">
                    <h4 class="subhead-agileits white-w3ls">Get in Touch</h4>
                    <form action="#" method="post">
                        <input type="text" name="Name" placeholder="Name" required="">
                        <input type="email" name="Email" placeholder="Email" required="">
                        <textarea name="Message" placeholder="Message" required=""></textarea>
                        <div class="w3_cs">
                            <input type="submit" value="SEND" class="button-w3layouts hvr-rectangle-out">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4  w3layouts_footer_grid">
                <h4>Address</h4>
                <ul class="con_inner_text">
                    <li><span class="fa fa-map-marker" aria-hidden="true"></span>1234k Avenue, 4th block, <label> New York City.</label></li>
                    <li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@familycare.com">info@familycare.com</a></li>
                    <li><span class="fa fa-phone" aria-hidden="true"></span> +8801745675674</li>
                    <li><span class="fa fa-phone" aria-hidden="true"></span> +8801761771424</li>
                </ul>

                <ul class="social_agileinfo">
                    <li><a href="https://facebook.com/cse.asraful" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/cse.asraful" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://instagram.com/cse.asraful" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://plus.google.com/cse.asraful" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>


            <div class="clearfix"> </div>
            <p class="copyright">© 2018 All Rights Reserved Family Care by <a href="https://facebook.com/cse.asraful" target="_blank">Asraful</a></p>
        </div>
    </div>
</div>
<!-- //footer -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- for testimonials slider-js-file-->
<script src="js/owl.carousel.js"></script>
<!-- //for testimonials slider-js-file-->
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds
            autoPlay: true,
            items: 3,
            itemsDesktop: [640, 5],
            itemsDesktopSmall: [414, 4]
        });
    });

</script>
<!-- for testimonials slider-js-script-->

<!--script-->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true // 100% fit in a container
        });
    });

</script>
<!--script-->
<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker,#datepicker1").datepicker();
    });

</script>
<!-- //Calendar -->
<!-- /gallery -->
<script src="js/jquery.tools.min.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/jquery.cm-overlay.js"></script>

<script>
    $(document).ready(function() {
        $('.cm-overlay').cmOverlay();
    });

</script>
<!-- //gallery -->
<!-- start-smoth-scrolling -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        	var defaults = {
        	containerID: 'toTop', // fading element id
        	containerHoverID: 'toTopHover', // fading element hover id
        	scrollSpeed: 1200,
        	easingType: 'linear' 
        	};
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });

</script>
<!-- scrolling script -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });

</script>
<!-- //scrolling script -->
<!--//start-smoth-scrolling -->

</body>

</html>
