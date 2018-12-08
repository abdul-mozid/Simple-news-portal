<!DOCTYPE html>
<html>
<head>
<?php include"shared/csslinks.php";?>
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <?php include"shared/head.php";?>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="contact_area">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <form action="#" class="contact_form">
              <input class="form-control" type="text" placeholder="Name*">
              <input class="form-control" type="email" placeholder="Email*">
              <textarea class="form-control" cols="30" rows="10" placeholder="Message*"></textarea>
              <input type="submit" value="Send Message">
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <?php include "shared/sidebar_popular_post.php";?>
      </div>
    </div>
  </section>
  <footer id="footer">
   <?php include "shared/footer.php";?>
  </footer>
</div>
<?php include"shared/jslinks.php";?>
</body>
</html>