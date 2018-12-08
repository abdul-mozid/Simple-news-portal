<!DOCTYPE html>
<html>
    <head>
        <?php
        include"shared/csslinks.php";
        include "db_connect.php";
        $sql = "Select * from news where id='$_GET[id]'";
        $query = mysql_query($sql);
        $row = mysql_fetch_array($query);
        $title = $row['news_title'];
        $category = $row['category'];
        $posted_by = $row['insert_by'];
        $insert_datetime = $row['insert_datetime'];
        $category = $row['category'];
        $description = $row['news_description'];
        $photo = $row['photo'];
        ?>
    </head>
    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        <div class="container">
            <?php include"shared/head.php"; ?>
            <section id="contentSection">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="left_content">
                            <div class="single_page">
                                <h1><?php echo $title; ?></h1>
                                <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i><?php echo $posted_by; ?></a> <span><i class="fa fa-calendar"></i><?php echo $insert_datetime; ?></span> <a href="#"><i class="fa fa-tags"></i><?php echo $category; ?></a> </div>
                                <div class="single_page_content"> <img class="img-center" src="admin/<?php echo $photo; ?>" alt="">
                                    <p><?php echo $description; ?></p>

                                </div>
                                <div class="social_link">
                                    <ul class="sociallink_nav">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <div class="related_post">
                                    <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
                                    <ul class="spost_nav wow fadeInDown animated">
                                        <?php
                                        $sql_related = "Select * from news where category='$category' and id NOT in($_GET[id])";
                                        $query_related = mysql_query($sql_related);
                                        while($row_related = mysql_fetch_array($query_related)){
                                        ?>
                                        <li>
                                            <div class="media"> <a class="media-left" href="single_page.html"> <img src="admin/<?php echo $row_related['photo'];?>" alt=""> </a>
                                                <div class="media-body"> <a class="catg_title" href="single_page.html"><?php echo $row_related['news_title'];?><br/><?php echo substr($row_related['news_description'],0,50);?></a> </div>
                                            </div>
                                        </li>   
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="nav-slit"> <a class="prev" href="#"> <span class="icon-wrap"><i class="fa fa-angle-left"></i></span>
                            <div>
                                <h3>City Lights</h3>
                                <img src="../images/post_img1.jpg" alt=""/> </div>
                        </a> <a class="next" href="#"> <span class="icon-wrap"><i class="fa fa-angle-right"></i></span>
                            <div>
                                <h3>Street Hills</h3>
                                <img src="../images/post_img1.jpg" alt=""/> </div>
                        </a> </nav>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <?php include"shared/sidebar_popular_post.php"; ?>
                    </div>
                </div>
            </section>
            <footer id="footer">
                <?php include"shared/footer.php"; ?>
            </footer>
        </div>
        <?php include"shared/jslinks.php"; ?>
    </body>
</html>