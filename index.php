<!DOCTYPE html>
<html>
    <head>
        <?php
        include "shared/csslinks.php";
        ?>
    </head>
    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        <div class="container">
            <?php include "shared/head.php"; ?>
            <section id="sliderSection">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="slick_slider">
                            <?php
                            include "db_connect.php";
                            $sql = "Select * from news where banner='Yes'";
                            $query = mysql_query($sql);
                            while($row = mysql_fetch_array($query)){
                            ?>
                            <div class="single_iteam"> <a href="pages/single_page.php"> <img src="admin/<?php echo $row['photo'];?>" style="height:430px;width:100%;"></a>
                                <div class="slider_article">
                                    <h2><a class="slider_tittle" href="pages/single_page.php"><?php echo $row['news_title'];?></a></h2>
                                    <p><?php echo substr($row['news_title'],0,100);?></p>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <?php include "shared/sideber_latest_post.php"; ?>
                    </div>
                </div>
            </section>
            <section id="contentSection">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="left_content">
                            <div class="fashion_technology_area">
                                <?php
                                $query = mysql_query("Select * from category order by id asc");
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <div class="fashion" style="width:50%;padding-right:15px;">
                                        <div class="single_post_content">
                                            <h2><span><?php echo $row['category_name']; ?></span></h2>
                                            <?php
                                            $sql = "Select * from news where category='$row[category_name]' order by id desc limit 0,1";
                                            $sub_query = mysql_query($sql);
                                            while ($sub_row = mysql_fetch_array($sub_query)) {
                                                ?>
                                                <ul class="business_catgnav wow fadeInDown">
                                                    <li>
                                                        <figure class="bsbig_fig"> <a href="single_page.php?id=<?php echo $sub_row['id']; ?>" class="featured_img"> <img alt="" src="admin/<?php echo $sub_row['photo']; ?>" style="height:240px;"> <span class="overlay"></span> </a>
                                                            <figcaption> <a href="single_page.php?id=<?php echo $sub_row['id']; ?>"><?php echo $sub_row['news_title']; ?></a> </figcaption>
                                                            <p><?php echo substr($sub_row['news_description'], 0, 50); ?></p>
                                                        </figure>
                                                    </li>
                                                </ul>
                                            <?php } ?>
                                            <ul class="spost_nav">
                                                <?php
                                                $sql2 = "Select * from news where category='$row[category_name]' order by id desc limit 1,4";
                                                $sub_query2 = mysql_query($sql2);
                                                while ($sub_row2 = mysql_fetch_array($sub_query2)) {
                                                    ?>
                                                    <li>
                                                        <div class="media wow fadeInDown"> <a href="single_page.php?id=<?php echo $sub_row2['id']; ?>" class="media-left"> <img alt="" src="admin/<?php echo $sub_row2['photo']; ?>"> </a>
                                                            <div class="media-body"> <a href="single_page.php?id=<?php echo $sub_row2['id']; ?>" class="catg_title"> <?php echo $sub_row2['news_title']; ?><br/><?php echo substr($sub_row2['news_description'], 0, 50); ?></a> </div>
                                                        </div>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <?php include "shared/sidebar_popular_post.php"; ?>
                    </div>
                </div>
            </section>
            <footer id="footer">
                <?php include "shared/footer.php"; ?>
            </footer>
        </div>
        <?php include "shared/jslinks.php"; ?>
    </body>
</html>