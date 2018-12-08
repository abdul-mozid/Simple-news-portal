<!DOCTYPE html>
<html>
    <head>
        <?php
        include "shared/csslinks.php";
        include "db_connect.php";
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
                            $sql = "Select * from news where banner='Yes' and category=(select category_name from category where id='$_GET[id]')";
                            $query = mysql_query($sql);
                            while ($row = mysql_fetch_array($query)) {
                                ?>
                                <div class="single_iteam"> <a href="pages/single_page.php"> <img src="admin/<?php echo $row['photo']; ?>" style="height:430px;width:100%;"></a>
                                    <div class="slider_article">
                                        <h2><a class="slider_tittle" href="pages/single_page.php"><?php echo $row['news_title']; ?></a></h2>
                                        <p><?php echo substr($row['news_title'], 0, 100); ?></p>
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
                                $sql_related = "Select * from news where category=(select category_name from category where id='$_GET[id]')";
                                $query_related = mysql_query($sql_related);
                                while ($row_related = mysql_fetch_array($query_related)) {
                                    ?>
                                    <div class="fashion" style="padding-right:10px;width:50%;">
                                        <div class="single_post_content">
                                            <ul class="business_catgnav wow fadeInDown">
                                                <li>
                                                    <figure class="bsbig_fig"> <a href="single_page.php?id=<?php echo $row_related['id']; ?>" class="featured_img"> <img alt="" src="admin/<?php echo $row_related['photo']; ?>"> <span class="overlay"></span> </a>
                                                        <figcaption> <a href="single_page.php?id=<?php echo $row_related['id']; ?>"><?php echo $row_related['news_title']; ?></a> </figcaption>
                                                        <p><?php echo substr($row_related['news_description'], 0, 200); ?></p>
                                                    </figure>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
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