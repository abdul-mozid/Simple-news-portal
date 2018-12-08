<div class="latest_post">
    <h2><span>LATEST POST</span></h2>
    <div class="latest_post_container">
        <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
        <ul class="latest_postnav">
            <?php
            $sql = "Select * from news order by id desc limit 0,10";
            $sub_query = mysql_query($sql);
            while ($sub_row = mysql_fetch_array($sub_query)) {
                ?>
            <li>
                <div class="media"> <a href="single_page.php?id=<?php echo $sub_row['id'];?>" class="media-left"> <img alt="" src="admin/<?php echo $sub_row['photo'];?>"> </a>
                    <div class="media-body"> <a href="single_page.php?id=<?php echo $sub_row['id'];?>" class="catg_title"><?php echo $sub_row['news_title'];?></a> </div>
                </div>
            </li>
            <?php } ?>
        </ul>
        <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
    </div>
</div>