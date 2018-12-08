<aside class="right_content">
    <div class="single_sidebar">
        <h2><span>MOST POPULARP</span></h2>
        <ul class="spost_nav">
            <?php
            $sql = "Select * from news where porpular='Yes' order by id desc";
            $sub_query = mysql_query($sql);
            while ($sub_row = mysql_fetch_array($sub_query)) {
                ?>
                <li>
                    <div class="media wow fadeInDown"> <a href="single_page.php?id=<?php echo $sub_row['id'];?>" class="media-left"> <img alt="" src="admin/<?php echo $sub_row['photo'];?>"> </a>
                        <div class="media-body"> <a href="single_page.php?id=<?php echo $sub_row['id'];?>" class="catg_title"><?php echo $sub_row['news_title'];?></a> </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="single_sidebar">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">CATEGORY</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                    <?php
                    include "db_connect.php";
                    $query = mysql_query("Select * from category order by id asc");
                    while ($row = mysql_fetch_array($query)) {
                        ?>
                        <li class="cat-item"><a href="category_detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="single_sidebar wow fadeInDown">
        <h2><span>LINKS</span></h2>
        <ul>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Rss Feed</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Life &amp; Style</a></li>
        </ul>
    </div>
</aside>