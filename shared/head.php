<?php
include "db_connect.php";
?>
<header id="header">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_top">
                <div class="header_top_left">
                    <ul class="top_nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="header_top_right">
                    <p>Friday, December 05, 2045</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_bottom">
                <div class="logo_area"><a href="index.html" class="logo"><img src="images/logo.jpg" alt=""></a></div>
                <div class="add_banner"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
            </div>
        </div>
    </div>
</header>
<section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav main_nav">
                <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
                <?php
                $query = mysql_query("Select * from category order by id asc");
                while ($row = mysql_fetch_array($query)) {
                    ?>
                    <li><a href="category_detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</section>
<section id="newsSection">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="latest_newsarea"> <span>Latest News</span>
                <ul id="ticker01" class="news_sticker">
                    <?php
                    $query = mysql_query("Select * from news order by id desc");
                    while ($row = mysql_fetch_array($query)) {
                        ?>
                    <li><a href="#"><img src="admin/<?php echo $row['photo'];?>" alt=""><?php echo $row['news_title'];?></a></li>
                    <?php } ?>
                </ul>
                <div class="social_area">
                    <ul class="social_nav">
                        <li class="facebook"><a href="#"></a></li>
                        <li class="twitter"><a href="#"></a></li>
                        <li class="flickr"><a href="#"></a></li>
                        <li class="pinterest"><a href="#"></a></li>
                        <li class="googleplus"><a href="#"></a></li>
                        <li class="vimeo"><a href="#"></a></li>
                        <li class="youtube"><a href="#"></a></li>
                        <li class="mail"><a href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>