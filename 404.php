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
          <div class="error_page">
            <h3>We Are Sorry</h3>
            <h1>404</h1>
            <p>Unfortunately, the page you were looking for could not be found. It may be temporarily unavailable, moved or no longer exists</p>
            <span></span> <a href="../index.html" class="wow fadeInLeftBig">Go to home page</a> </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <?php include"shared/sidebar_popular_post.php";?>
      </div>
    </div>
  </section>
  <footer id="footer">
    <?php include"shared/footer.php";?>
  </footer>
</div>
<?php include"shared/jslinks.php";?>
</body>
</html>